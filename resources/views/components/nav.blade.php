{{-- Mobile nav --}}
<nav class="py-4 bg-gray-600 md:hidden" x-data="{ open: false }">
  <div class="container flex justify-between">
    <h1 class="text-4xl italic font-medium leading-none text-gray-100 uppercase font-extra-condensed">
      {{ config('app.name') }}
    </h1>
    <button type="button" @click="open = !open">
      <span class="sr-only">Menu</span>
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>
  <div class="relative">
    <ol
      x-show="open"
      class="container flex flex-col w-full mt-4 divide-y divide-gray-500"
    >
      {{ $slot }}
    </ol>
  </div>
</nav>

{{-- Desktop nav --}}
<nav class="hidden py-4 bg-white border-b shadow-inner md:block">
  <ol class="container flex flex-wrap items-center gap-x-6 gap-y-2">
    {{ $slot }}
  </ol>
</nav>
