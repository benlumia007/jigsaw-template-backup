const mix = require( 'laravel-mix' );
const build = require( './tasks/build' );
require( 'laravel-mix-jigsaw' );

mix.disableSuccessNotifications();
mix.setPublicPath( 'source/assets/scripts' );

mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch([
            'config.php',
            'source/*.php',
            'source/**/*.md',
            'source/**/*.php',
            'source/**/*.scss',
        ]),
    ],
});

mix.jigsaw()
    .js( 'resources/js/app.js', 'js' )
    .sass( 'resources/scss/screen.scss', 'css/screen.css' )
    .options( {
        processCssUrls: false
    } )