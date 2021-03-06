<?php
use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'siteTitle' => 'Benjamin Lu',
    'siteDescription' => 'Life: The Joy of Blogging',

    'primaryMenu' => [ 
        [
            'link' => '/about-me',
            'title' => 'About Me'
        ]
    ],

    'collections' => [
        'posts' => [
            'author' => 'Benjamin Lu',
            'path'  => 'blog/{-title}',
            'sort' => 'date',
            'getDate' => function( $page ) {
                return Datetime::createFromFormat( 'U', $page->date );
            },
            'hasCategory' => function ( $page, $category ) {
                return collect( $page->categories )->contains( $category );
            },
        ],
        'categories' => [
            'path' => '/category/{filename}',
            'extends' => '_layouts.category',
            'name' => function( $page ) {
                return $page->getFilename();
            }
        ],
    ],

    'selected' => function( $page, $selection ) {
        return Str::contains( $page->getPath(), $selection ) ? 'active' : '';
    },

    'getExcerpt' => function( $page, $length = 255 ) {
        if ( $page->excerpt ) {
            return $page->excerpt;
        }

        $content = preg_split( '/<!-- more -->/m', $page->getContent(), 2 );
        $cleaned = trim( strip_tags( preg_replace( [ '/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/' ], '', $content[ 0 ]), '<code>' ) );

        if ( count( $content ) > 1 ) {
            return $cleaned;
        }

        $truncated = substr( $cleaned, 0, $length );

        if ( substr_count( $truncated, '<code>' ) > substr_count( $truncated, '</code>' ) ) {
            $truncated .= '</code>';
        }

        return strlen( $cleaned ) > $length ? preg_replace('/\s+?(\S+)?$/', '', $truncated ) . '...' : $cleaned;
    },
];
