const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();

mix.setPublicPath('source/assets');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .postCss('source/_assets/css/main.pcss', 'css', [
        require('postcss-import'),
        require('postcss-nested'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .options({
        processCssUrls: false,
    })
    .version();

if (! mix.inProduction()) {
    mix.sourceMaps();
}
