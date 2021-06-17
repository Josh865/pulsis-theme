<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>{{ config('app.name') }} - Purdue University Libraries and School of Information Studies</title>

  <link rel='dns-prefetch' href='//use.typekit.net' />

  {{-- Brand fonts: Acumin Pro, Source Serif, and United Sans --}}
  <link href="https://use.typekit.net/ghc8hdz.css" rel="stylesheet" />
  <link href="https://www.purdue.edu/purdue/fonts/united-sans/united-sans.css" rel="stylesheet" />

  {{-- Theme assets. DO NOT MODIFY. --}}
  <link href="{{ asset('theme/css/theme.css') }}" rel="stylesheet" />
  <script src="{{ asset('theme/js/theme.js') }}" defer></script>

  {{-- Application assets. Feel free to modify. --}}
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
  <script src="{{ asset('js/app.js') }}" defer></script>

  {{-- Favicons and app icons --}}
  <link href="https://www.purdue.edu/purdue/images/favicon.ico" rel="shortcut icon">
  <link href="https://www.purdue.edu/purdue/images/icon-iphone.png" rel="apple-touch-icon" sizes="76x76">
  <link href="https://www.purdue.edu/purdue/images/icon-ipad.png" rel="apple-touch-icon" sizes="76x76">
  <link href="https://www.purdue.edu/purdue/images/icon-iphone-retina.png" rel="apple-touch-icon" sizes="120x120">
  <link href="https://www.purdue.edu/purdue/images/icon-ipad-retina.png" rel="apple-touch-icon" sizes="152x152">
</head>
  <body class="pulsis-font-sans pulsis-antialiased pulsis-text-gray-800 pulsis-bg-gray-100">
    <div id="app" class="pulsis-flex pulsis-flex-col pulsis-min-h-screen">
      <x-pulsis-theme::header></x-pulsis-theme::header>

      <x-pulsis-theme::nav>
        <x-pulsis-theme::nav-item href="{{ config('app.url') }}">Home</x-pulsis-theme::nav-item>
        {{-- Add your nav links here --}}
      </x-pulsis-theme::nav>

      <main class="pulsis-flex-1 pulsis-h-0">
        @yield('content')
      </main>

      <x-pulsis-theme::footer></x-pulsis-theme::footer>
    </div>
  </body>
</html>
