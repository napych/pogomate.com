<?php

return [
    'version' => '0.99.29',

    'locale' => 'en_US',
    'plugins' => [
//        'Editor' => true,
//        'CMS' => true,
//        'Capcha' => false,
//        'Users' => false
    ],

    'db' => [
        'default' => [
            'type' => 'mysql',
            'hostname' => '127.0.0.1',
            'database' => 'pogomate',
            'username' => 'pogomate',
            'password' => 'ooFu9QueooFu9Que'
        ]
    ],

    'instances' => [
        'main' => [
            'include' => [
                'bootstrap4' => true,
                'jquery3' => true,
                'all' => true,
            ]
        ]
    ],

    'auth' => [
        'registration' => false
    ],

    'sitemap' => [
        'maxLines' => 10000,
        'main' => [
            ['loc' => '/', 'changefreq' => 'weekly'],
            ['loc' => '/cleanup', 'changefreq' => 'weekly'],
            ['loc' => '/lists', 'changefreq' => 'weekly'],
            ['loc' => '/pokemon', 'changefreq' => 'monthly']
        ],
        'mainLastmod' => '2020-12-20',
        'pokemon' => [
            'lastmod' => '2020-12-20',
            'changefreq' => 'weekly'
        ],
        'counters' => [
            'lastmod' => '2020-09-22',
            'changefreq' => 'monthly'
        ]
    ]
];
