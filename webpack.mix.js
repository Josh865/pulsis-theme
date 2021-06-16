const mix = require('laravel-mix');

mix
  .js('resources/js/theme.js', 'public/js')
  .postCss('resources/css/theme.css', 'public/css', [require('tailwindcss')])
  .options({
    // processCssUrls: false,
  });
