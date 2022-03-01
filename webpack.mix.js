const mix = require( 'laravel-mix' );
require( 'laravel-mix-jigsaw' )

/*
 * Sets the path to the generated assets. By default, this is the `/public` folder in the theme.
 */
mix.setPublicPath( 'source/assets/scripts' );

/*
 * Compile JavaScript.
 *
 * @link https://laravel.com/docs/5.6/mix#working-with-scripts
 */
mix.jigsaw()
    .js( `source/_assets/js/app.js`, 'js' )
    .sass( `source/_assets/scss/screen.scss`, 'css' )
    .options( {
        processCssUrls: false,
    } )
    .browserSync({
        server: 'build_local',
        files: ['build_*/**'],
    });

// Override the default config
mix.jigsaw({
    watch: {
        files: [
            'config.php',
            'source/*.php',
            'source/**/*.md',
            'source/**/*.php',
            'source/**/*.scss',
        ]
    },
});