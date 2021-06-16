<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ config('app.name') }} - Purdue University Libraries and School of Information Studies</title>

  <link rel='dns-prefetch' href='//use.typekit.net' />

  {{-- <link rel="preload" href="{{ asset('fonts/UnitedSansRgMd.woff2') }}" as="font" type="font/woff2" crossorigin="anonymous"> --}}

  {{-- Acumin Pro and Source Serif Pro brand fonts. --}}
  <link href="https://use.typekit.net/ghc8hdz.css" rel="stylesheet" />

  {{-- Application CSS --}}
  <link href="{{ asset('theme/css/theme.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

  {{-- Application JS --}}
  <script src="{{ asset('theme/js/theme.js') }}" defer></script>
  <script src="{{ asset('js/app.js') }}" defer></script>

  {{-- Favicons and app icons --}}
  <link href="https://www.purdue.edu/purdue/images/favicon.ico" rel="shortcut icon">
  <link href="https://www.purdue.edu/purdue/images/icon-iphone.png" rel="apple-touch-icon" sizes="76x76">
  <link href="https://www.purdue.edu/purdue/images/icon-ipad.png" rel="apple-touch-icon" sizes="76x76">
  <link href="https://www.purdue.edu/purdue/images/icon-iphone-retina.png" rel="apple-touch-icon" sizes="120x120">
  <link href="https://www.purdue.edu/purdue/images/icon-ipad-retina.png" rel="apple-touch-icon" sizes="152x152">

  {{-- Alpine.js --}}
  <script src="https://unpkg.com/alpinejs@3.0.5/dist/cdn.min.js" defer></script>
</head>
  <body class="font-sans text-base antialiased text-gray-800 bg-gray-100">
    <div id="app" class="flex flex-col min-h-screen">
      <x-pulsis-theme::header></x-pulsis-theme::header>

      <x-pulsis-theme::nav>
        <x-pulsis-theme::nav-item href="{{ route('index') }}">Home</x-pulsis-theme::nav-item>
      </x-pulsis-theme::nav>

      <main class="flex-pulsis-theme::1 h-0">
        @yield('content')
      </main>

      <x-pulsis-theme::footer></x-pulsis-theme::footer>
    </div>
  </body>
</html>
