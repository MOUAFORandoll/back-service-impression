<?php
return [

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],
    'credentials' => [
        'grant_type' => 'password',
        'client_id' => 2,
        'client_secret' => 'EgDwYss1HthxUbAjbRViO0QaNF82gsJIyCiKXiZr'
    ]
];
