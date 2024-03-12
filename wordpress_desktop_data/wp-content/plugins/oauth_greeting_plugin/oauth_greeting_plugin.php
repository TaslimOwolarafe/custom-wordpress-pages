<?php
/*
Plugin Name: Greeting API Plugin
Description: Exposes a JWT-secured API to store and retrieve greetings in the database.
Version: 1.0
*/

// Hook to handle API requests
add_action('rest_api_init', function () {
    // Register the REST route for POST requests
    register_rest_route('jwt-greeting/v1', '/greeting/', array(
        'methods'             => 'POST',
        'callback'            => 'store_greeting',
        'permission_callback' => 'verify_jwt_token',
    ));

    // Register the REST route for GET requests
    register_rest_route('jwt-greeting/v1', '/greeting/', array(
        'methods'             => 'GET',
        'callback'            => 'get_greeting',
        'permission_callback' => 'verify_jwt_token',
    ));
});

// Callback function to verify JWT token
function verify_jwt_token() {
    $token = get_token_from_request(); // Retrieve the JWT token from the request

    // Add your JWT token verification logic here
    $verification_url = 'http://localhost:8081/index.php?rest_route=/api/v1/token-validate';
    $response = wp_remote_get($verification_url, array(
        'headers' => array('Authorization' => 'Bearer ' . $token),
    ));

    if (is_wp_error($response)) {
        return false; // Verification failed
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);

    return !empty($data['valid']); // Return true if the token is valid, false otherwise
}

// Callback function to handle POST request
function store_greeting(WP_REST_Request $request) {
    $greeting = sanitize_text_field($request->get_param('greeting'));

    // Store greeting in the database
    $post_id = wp_insert_post(array(
        'post_title'   => $greeting,
        'post_type'    => 'greetings',
        'post_status'  => 'publish',
    ));

    return array('message' => 'Greeting stored successfully!');
}

// Callback function to handle GET request
function get_greeting(WP_REST_Request $request) {
    // Your logic to retrieve greetings goes here
    // For demonstration purposes, return a simple JSON response
    $response_data = array(
        'message' => 'Hello from the JWT Greeting endpoint!',
    );

    return new WP_REST_Response($response_data, 200);
}

// Function to get the JWT token from the request
function get_token_from_request() {
    $authorization_header = $_SERVER['HTTP_AUTHORIZATION'];

    if (empty($authorization_header)) {
        return false;
    }

    $token_parts = explode(' ', $authorization_header);

    if (count($token_parts) !== 2 || $token_parts[0] !== 'Bearer') {
        return false;
    }

    return $token_parts[1];
}