@props(['href' => ''])

{{-- Mobile nav item --}}
<li class="md:hidden">
  <a href="{{ $href }}" class="block py-2">
    <span class="tracking-tight text-gray-300 uppercase {{ url()->current() === $href ? 'font-bold text-white' : 'font-medium' }}">
      {{ $slot }}
    </span>
  </a>
</li>

{{-- Desktop nav item --}}
<li class="hidden md:block">
  <a href="{{ $href }}" class="block group">
    <span class="font-medium tracking-tight text-gray-800 uppercase group-hover:text-gold-700">
      {{ $slot }}
    </span>

    {{-- Animated underline --}}
    <div class="h-[2px] w-full bg-gold-700 transform group-hover:scale-100 transition duration-200 {{ url()->current() === $href ? 'scale-100' : 'scale-0' }}"></div>
  </a>
</li>
