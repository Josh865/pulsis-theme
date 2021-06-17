{{-- Mobile nav --}}
<nav class="pulsis-py-4 pulsis-bg-gray-600 md:pulsis-hidden">
  <div class="pulsis-container pulsis-flex pulsis-justify-between">
    <h1 class="pulsis-text-4xl pulsis-italic pulsis-font-medium pulsis-leading-none pulsis-text-gray-100 pulsis-uppercase pulsis-font-extra-condensed">
      {{ config('app.name') }}
    </h1>
    <button id="mobileNavToggleButton" type="button">
      <span class="pulsis-sr-only">Menu</span>
      <svg xmlns="http://www.w3.org/2000/svg" class="pulsis-w-6 pulsis-h-6 pulsis-text-gray-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>
  <div class="pulsis-relative">
    <ol id="mobileNavMenu" class="pulsis-container pulsis-flex pulsis-flex-col pulsis-hidden pulsis-w-full pulsis-mt-4 pulsis-divide-y pulsis-divide-gray-500">
      {{ $slot }}
    </ol>
  </div>
</nav>

{{-- Desktop nav --}}
<nav class="pulsis-hidden pulsis-py-4 pulsis-bg-white pulsis-border-b pulsis-shadow-inner md:pulsis-block">
  <ol class="pulsis-container pulsis-flex pulsis-flex-wrap pulsis-items-center pulsis-gap-x-6 pulsis-gap-y-2">
    {{ $slot }}
  </ol>
</nav>
