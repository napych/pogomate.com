<?php

declare(strict_types=1);

return [
    'version' => '0.99.38',

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
        'mainLastmod' => '2022-02-05',
        'pokemon' => [
            'lastmod' => '2022-02-05',
            'changefreq' => 'weekly'
        ],
        'counters' => [
            'lastmod' => '2022-02-05',
            'changefreq' => 'monthly'
        ],
        'moves' => [
            'lastmod' => '2022-02-05',
            'changefreq' => 'monthly'
        ]
    ]
];
