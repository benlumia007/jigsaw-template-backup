const mix = require( 'laravel-mix' );
require( 'laravel-mix-jigsaw' );

mix.disableSuccessNotifications();
mix.setPublicPath( 'source/assets' );

mix.jigsaw()
    .js( 'resources/js/app.js', 'js' )
    .sass( 'resources/scss/screen.scss', 'css/screen.css' )
    .options( {
        processCssUrls: false
    } )