const { registerBlockType } = wp.blocks;
const { TextControl, Button } = wp.components;
const { withSelect } = wp.data;

registerBlockType('greeting-block/greeting', {
    title: 'Greeting Block',
    icon: 'smiley',
    category: 'common',
    attributes: {
        greeting: {
            type: 'string',
            default: 'Hello, World!',
        },
    },
    edit: withSelect((select) => {
        return {
            jwtToken: select('core/edit-post').getCurrentPost().meta['_jwt_token'],
        };
    })(({ attributes, setAttributes, jwtToken }) => {
        const handleGreetingChange = (newGreeting) => {
            setAttributes({ greeting: newGreeting });
        };

        const handleButtonClick = () => {
            if (!jwtToken) {
                console.error('JWT token not available.');
                return;
            }

            // Call the API with the custom greeting and dynamic JWT token
            fetch('http://localhost:8081/wp-json/jwt-greeting/v1/greeting/', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${jwtToken ? jwtToken : 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOjEsIm5hbWUiOiJ0YXNsaW0iLCJpYXQiOjE3MDU5MjcwNTIsImV4cCI6MTg2MzYwNzA1Mn0.poqGcJrPf-ThYYnwApJkR6jSFHh62sRXonN1FmeGGNA'}`
                },
                body: JSON.stringify({ greeting: attributes.greeting }),
            })
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.error(error));
        };

        return (
            <div>
                <TextControl
                    label="Enter Greeting:"
                    value={attributes.greeting}
                    onChange={handleGreetingChange}
                />
                <Button onClick={handleButtonClick}>Save Greeting</Button>
            </div>
        );
    }),
    save: ({ attributes }) => {
        return (
            <div>
                <p>{attributes.greeting}</p>
            </div>
        );
    },
});
