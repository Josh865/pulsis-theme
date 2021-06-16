<header class="py-6 bg-black md:py-8">
  <div class="container flex flex-col items-center justify-center w-full mx-auto md:flex-row md:justify-between">
    <div class="flex items-center justify-center space-x-2 md:space-x-5 md:justify-start md:flex-row md:text-left">
      <a href="https://www.purdue.edu">
        <span class="sr-only">Purdue University</span>
        <x-pulsis-theme::purdue-logo class="w-auto h-6 md:h-10"></x-pulsis-theme::purdue-logo>
      </a>
      <div class="h-10 md:h-16 w-[2px] bg-gray-400"></div>
      <a
        href="https://lib.purdue.edu"
        class="text-base font-semibold leading-none text-white whitespace-nowrap md:text-2xl md:leading-none font-condensed"
      >
        Libraries and School
        <br />
        of Information Studies
      </a>
    </div>
    <h1 class="hidden text-3xl italic leading-none text-right text-white uppercase md:inline-block md:mt-0 md:text-5xl font-extra-condensed">
      <a href="{{ route('index') }}">
        {{ config('app.name') }}
      </a>
    </h1>
  </div>
</header>
