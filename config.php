<?php

use Illuminate\Support\Str;

return [
    'siteName'        => 'Benjamin Lu',
    'siteDescription' => 'Life & Joy',

    'selected' => function( $page, $selection ) {
        return Str::contains( $page->getPath(), $selection ) ? 'active' : '';
    },

    'collections' => [
        'blog' => [
            'author' => 'Benjamin Lu',
            'path'  => 'blog/{filename}',
            'sort' => [ '-date' ],
        ]
    ],
];