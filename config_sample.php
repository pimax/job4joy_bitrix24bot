<?php

return [

    // Goo.gl Token
    'google_token' => '',

    // Webhook message receive bot url
    'url_message_add' => 'https://job4joy.com/bitrix24bot/',

    // Webhook install bot url
    'url_welcome_message' => 'https://job4joy.com/bitrix24bot/',

    // Webhook uninstall bot url
    'url_bot_delete' => 'https://job4joy.com/bitrix24bot/',

    // Bot alias
    'alias' => 'job4joybot',

    // Type B - Bot, H - human
    'type' => 'B',

    // Bot info
    'data' => [

        // First name
        'NAME'              => 'Job4Joy.com Bot',

        // Last name
        'LAST_NAME'         => '',

        // Color for mobile
        'COLOR'             => 'AQUA',

        // Email
        'EMAIL'             => 'admin@job4joy.com',

        // Bithday
        'PERSONAL_BIRTHDAY' => '2016-02-01',

        // Work position
        'WORK_POSITION'     => 'find work & hire freelancers',

        // Website url
        'PERSONAL_WWW'      => 'https://job4joy.com',

        // Gender
        'PERSONAL_GENDER'   => "M",

        // Bot avatar
        'PERSONAL_PHOTO'    => base64_encode(file_get_contents(__DIR__.'/logo.png')),
    ],

    'feeds' => [
        '/all' => [
            'Title' => 'All jobs',
            'Feed' => 'https://job4joy.com/marketplace/rss/'
        ],

        '/webdev' => [
            'Title' => 'Web Development',
            'Feed' => 'https://job4joy.com/marketplace/rss/?id=3'
        ],

        '/software' => [
            'Title' => 'Software Development & IT',
            'Feed' => 'https://job4joy.com/marketplace/rss/?id=5'
        ],

        '/design' => [
            'Title' => 'Design & Multimedia',
            'Feed' => 'https://job4joy.com/marketplace/rss/?id=2'
        ],

        '/mobile' => [
            'Title' => 'Mobile Application',
            'Feed' => 'https://job4joy.com/marketplace/rss/?id=7'
        ],

        '/server' => [
            'Title' => 'Host & Server Management',
            'Feed' => 'https://job4joy.com/marketplace/rss/?id=6'
        ],

        '/writing' => [
            'Title' => 'Writing',
            'Feed' => 'https://job4joy.com/marketplace/rss/?id=8'
        ],

        '/customer' => [
            'Title' => 'Customer Service',
            'Feed' => 'https://job4joy.com/marketplace/rss/?id=10'
        ],

        '/marketing' => [
            'Title' => 'Marketing',
            'Feed' => 'https://job4joy.com/marketplace/rss/?id=11'
        ],

        '/business' => [
            'Title' => 'Business Services',
            'Feed' => 'https://job4joy.com/marketplace/rss/?id=12'
        ],

        '/translations  ' => [
            'Title' => 'Translation & Languages',
            'Feed' => 'https://job4joy.com/marketplace/rss/?id=14'
        ]
    ]
];