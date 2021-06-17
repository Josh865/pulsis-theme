@props(['href' => ''])

{{-- Mobile nav item --}}
<li class="md:pulsis-hidden">
  <a href="{{ $href }}" class="py-2 pulsis-block">
    <span class="pulsis-tracking-tight pulsis-text-gray-300 pulsis-uppercase {{ url()->current() === $href ? 'pulsis-font-bold pulsis-text-white' : 'pulsis-font-medium' }}">
      {{ $slot }}
    </span>
  </a>
</li>

{{-- Desktop nav item --}}
<li class="pulsis-hidden md:pulsis-block">
  <a href="{{ $href }}" class="pulsis-block pulsis-group">
    <span class="pulsis-font-medium pulsis-tracking-tight pulsis-text-gray-800 pulsis-uppercase group-hover:pulsis-text-gold-700">
      {{ $slot }}
    </span>

    {{-- Animated underline --}}
    <div class="pulsis-h-[2px] pulsis-w-full pulsis-bg-gold-700 pulsis-transform group-hover:pulsis-scale-100 pulsis-transition pulsis-duration-200 {{ url()->current() === $href ? 'pulsis-scale-100' : 'pulsis-scale-0' }}"></div>
  </a>
</li>
