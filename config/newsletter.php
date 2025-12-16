<?php

return [
    'mailchimp' => [
        'api_key' => env('MAILCHIMP_API_KEY'),
        'list_id' => env('MAILCHIMP_LIST_ID'),
        'server_prefix' => env('MAILCHIMP_SERVER_PREFIX'),
    ],
];

/*
Required environment variables for newsletter subscriptions:
MAILCHIMP_API_KEY=your-mailchimp-api-key
MAILCHIMP_LIST_ID=your-mailchimp-audience-id
MAILCHIMP_SERVER_PREFIX=usX (e.g. us1, us2)
*/



