<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Addinsoft',
    'brand' => 'ADDINSOFT',
    'logo' => '/assets/images/ADDINSOFT.png',
    'logoMobile' => '/assets/images/ADDINSOFT-MOBILE.png',
    'description' => 'Data science made simple.',
    'copyright' => 'Copyright © 2020 Addinsoft. All Rights Reserved.',
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'selected' : '';
    },
    'navSelected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'navSelected' : '';
    },
    'collections' => [ 
        'posts' => [
            'sort' => 'sort_order',
        ],
        'softwares' => [
            'sort' => 'sort_order',
        ],
        'navigations' => [
            'path' => 'addinsoft/{filename}',
            'sort' => 'sort_order',
        ],
        'socials' => [
            'sort' => 'sort_order',
        ],
        'rgpds' => [
            'sort' => 'sort_order',
        ],
        'socialsw' => [
            'sort' => 'sort_order',
        ],
        'rgpdsw' => [
            'sort' => 'sort_order',
        ],
        'techs' => [
            'sort' => 'sort_order',
        ],
        'researchs' => [
            'sort' => 'sort_order',
        ],
        'customers' => [
            'sort' => 'sort_order',
        ],
        'sales' => [
            'sort' => 'sort_order',
        ],
        'directions' => [
            'sort' => 'sort_order',
        ],
        'videos' => [
            'sort' => 'sort_order',
        ],
    ],
];
