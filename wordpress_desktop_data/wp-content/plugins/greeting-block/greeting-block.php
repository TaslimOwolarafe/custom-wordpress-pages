<?php
/*
Plugin Name: Gutenberg Greeting Block
Description: Adds a custom Gutenberg block to call the API and display a greeting.
Version: 1.0
*/

// // Register block script
// function register_greeting_block() {
//     wp_register_script(
//         'greeting-block-script',
//         plugins_url('greeting-block.js', __FILE__),
//         array('wp-blocks', 'wp-editor', 'wp-components', 'wp-i18n')
//     );
// }

// add_action('init', 'register_greeting_block');

// // Register block type
// function register_greeting_block_type() {
//     register_block_type('gutenberg-greeting-block/greeting', array(
//         'editor_script' => 'greeting-block-script',
//     ));
// }

// add_action('init', 'register_greeting_block_type');

function register_greeting_block() {
    wp_enqueue_script('greeting-block-scripts', plugin_dir_url(__FILE__).'greeting-block.js',array('wp-blocks', 'wp-editor', 'wp-components', 'wp-i18n'),true);

    register_block_type('greeting-block/greeting', array(
                'editor_script' => 'greeting-block-scripts',
            ));
}
add_action('init','register_greeting_block');