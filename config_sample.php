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
        'All jobs' => 'https://job4joy.com/marketplace/rss/',
        'Web Development' => 'https://job4joy.com/marketplace/rss/?id=3',
        'Software Development & IT' => 'https://job4joy.com/marketplace/rss/?id=5',
        'Design & Multimedia' => 'https://job4joy.com/marketplace/rss/?id=2',
        'Mobile Application' => 'https://job4joy.com/marketplace/rss/?id=7',
        'Host & Server Management' => 'https://job4joy.com/marketplace/rss/?id=6',
        'Writing' => 'https://job4joy.com/marketplace/rss/?id=8',
        'Customer Service' => 'https://job4joy.com/marketplace/rss/?id=10',
        'Marketing' => 'https://job4joy.com/marketplace/rss/?id=11',
        'Business Services' => 'https://job4joy.com/marketplace/rss/?id=12',
        'Translation & Languages' => 'https://job4joy.com/marketplace/rss/?id=14',
    ]
];