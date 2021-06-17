<header class="pulsis-py-6 pulsis-bg-black md:pulsis-py-8">
  <div class="pulsis-container pulsis-flex pulsis-flex-col pulsis-items-center pulsis-justify-center pulsis-w-full pulsis-mx-auto md:pulsis-flex-row md:pulsis-justify-between">
    <div class="pulsis-flex pulsis-items-center pulsis-justify-center pulsis-space-x-2 md:pulsis-space-x-5 md:pulsis-justify-start md:pulsis-flex-row md:pulsis-text-left">
      <a href="https://www.purdue.edu">
        <span class="pulsis-sr-only">Purdue University</span>
        <x-pulsis-theme::purdue-logo class="pulsis-w-auto pulsis-h-6 md:pulsis-h-10"></x-pulsis-theme::purdue-logo>
      </a>
      <div class="pulsis-h-10 md:pulsis-h-16 pulsis-w-[2px] pulsis-bg-gray-400"></div>
      <a
        href="https://lib.purdue.edu"
        class="pulsis-text-base pulsis-font-semibold pulsis-leading-none pulsis-text-white pulsis-whitespace-nowrap md:pulsis-text-2xl md:pulsis-leading-none pulsis-font-condensed"
      >
        Libraries and School
        <br />
        of Information Studies
      </a>
    </div>
    <h1 class="pulsis-hidden pulsis-text-3xl pulsis-italic pulsis-leading-none pulsis-text-right pulsis-text-white pulsis-uppercase md:pulsis-inline-block md:pulsis-mt-0 md:pulsis-text-5xl pulsis-font-extra-condensed">
      <a href="{{ config('app.url') }}">
        {{ config('app.name') }}
      </a>
    </h1>
  </div>
</header>
