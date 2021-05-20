const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    // .sourceMaps()
    .sass('resources/sass/app.scss', 'public/css').options({
    // processCssUrls: false
})
    .copyDirectory('resources/images', 'public/images');


//
// mix.js('resources/js/app.js', 'public/js')
//     .sourceMaps()
//     .sass('resources/sass/app.scss', 'public/css').options({
//     processCssUrls: false
// })
//     // .postCss('public/css/app.css', 'public/css', [
//     //     //
//     // ])
//     .copyDirectory('resources/images', 'public/images')
//     // .copyDirectory('node_modules/slick-carousel/slick', 'public/slick');
//
