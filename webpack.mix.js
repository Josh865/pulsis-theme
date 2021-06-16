const mix = require('laravel-mix');

mix
  .js('src/resources/js/theme.js', 'resources/js')
  .postCss('src/resources/css/theme.css', 'resources/css', [
    require('tailwindcss'),
  ])
  .options({
    // processCssUrls: false,
  });
