<?php get_header(); ?>
<section
  class="py-10 sm:py-20 bg-linear-to-r from-(--color-bg) from-10% via-(--color-bg) via-50% to-(--color-secondary) to-50%">
  <button id="theme-toggle"
    class="p-2 rounded-lg bg-(--color-primary) text-white hover:bg-(--color-secondary) transition-colors ml-5 cursor-pointer"
    aria-label="Dark and Light Mode Toggle">
    <svg class="w-5 h-5" id="moon-icon" fill="currentColor" viewBox="0 0 20 20">
      <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
    </svg>
    <svg class="w-5 h-5 hidden" id="sun-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <circle cx="12" cy="12" r="5"></circle>
      <line x1="12" y1="1" x2="12" y2="3"></line>
      <line x1="12" y1="21" x2="12" y2="23"></line>
      <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
      <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
      <line x1="1" y1="12" x2="3" y2="12"></line>
      <line x1="21" y1="12" x2="23" y2="12"></line>
      <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
      <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
    </svg>
  </button>
  <div
    class="px-2 sm:px-5 mt-5 bg-linear-to-r from-(--color-bg) from-10% via-(--color-bg) via-50% to-(--color-success) to-50%">
    <div class="grid grid-cols-[100px_1fr] sm:grid-cols-[300px_1fr] max-w-5xl mx-auto">
      <div class="bg-linear-to-r from-(--color-bg) from-10% via-(--color-bg) via-50% to-(--color-success) to-50%">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/liabuelow.png' ?>"
          class="rounded-full border-8 border-(--color-success)" alt="A picture of me, Lia Buelow!">
      </div>
      <div class="bg-(--color-success) content-center p-3 sm:p-10">
        <span class="text-2x1 font-bold  md:text-3xl lg:text-4xl">Hi! I'm</span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold uppercase my-0 sm:my-4">Lia
          Buelow
        </h1>
        <span class="text-2x1 font-bold  md:text-3xl lg:text-4xl">& I want to work for LLC University!</span>
      </div>
    </div>
  </div>
</section>
<section
  class="pb-50 px-5 bg-linear-to-r from-(--color-bg) from-10% via-(--color-bg) via-50% to-(--color-secondary) to-50%">
  <div class="grid grid-cols-2 grid-rows-[repeat(3,auto)] max-w-5xl mx-auto gap-x-10 sm:gap-x-25 gap-y-0">
    <div class="box row-span-3">
      <h2>Is this simple? Maybe.</h2>
      <p>But I can show how dedicated I am, how fast I can work, and prove I know the tech stack you need.</p>
      <p>Node, Tailwind 4.0, WordPress, CLI, styling with utility classes, plugins, interactions, responsive, mobile
        first, dark mode,
        themes, components, flex, grid, accessibitily...It's buzzword soup but I've got it all, baby.</p>
    </div>
    <div class="box-white">
      <h2>I know styles.</h2>
      <p>I love CSS. No joke. I consider myself an expert and with CSS I believe all things are possible 🙏</p>
      <p>Want to see some of the goofy CSS stuff I do in my spare time? Check out my <a
          href="https://codepen.io/collection/Qbdajj" target="_blank"
          class="text-white hover:text-neutral-900">Codepen</a>.</p>
    </div>
    <div class="box-white col-span-1 col-end-3">
      <h2>The video!</h2>
      <p>The video and other supporting documents are in this <a
          href="https://drive.google.com/drive/folders/1RZQrxR_MGrUdWqNyAdhQ8tsenN7xbSgu?usp=sharing" target="_blank"
          class="text-white hover:text-neutral-900">Google Drive folder</a>.</p>
    </div>
    <div class="box-white col-span-1 col-end-3">
      <h2>The links.</h2>
      <p>Here is the stuff I talked about in my video:</p>
      <ul>
        <li class="text-white">This site's code in <a href="https://github.com/lolitslia/ilovellcu" target="_blank"
            class="text-white hover:text-neutral-900">GitHub</a></li>
        <li><a href="https://intention.ly/" target="_blank" class="text-white hover:text-neutral-900">Intention.ly</a>
        </li>
        <li><a
            href="https://www.bobbibrowncosmetics.com/product/2330/24845/makeup/eyes/eyeshadow/long-wear-cream-shadow-stick#/family/all"
            target="_blank" class="text-white hover:text-neutral-900">Bobbi Brown Cosmetics Long-wear Cream Shadow
            Stick</a></li>
      </ul>

    </div>

  </div>
</section>
<?php get_footer(); ?>