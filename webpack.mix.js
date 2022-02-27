const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/scripts');

mix.jigsaw()
    .js('source/_assets/js/app.js', 'js')
    .sass('source/_assets/scss/screen.scss', 'css' )
    .options({
        processCssUrls: false,
    })
    .version();
