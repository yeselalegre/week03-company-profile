<header class="sticky top-0 z-50 border-b border-graphite/80 bg-obsidian/90 backdrop-blur">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
            <svg viewBox="0 0 100 100" class="h-8 w-8 shrink-0" aria-hidden="true">
                <polygon points="50,8 90,92 10,92" fill="#E8E5DF"/>
                <polygon points="50,40 74,92 26,92" fill="#C8FF00"/>
                <polygon points="50,74 60,92 40,92" fill="#0B0B0D"/>
            </svg>
            <span class="font-display text-xl font-bold tracking-widest2 text-offwhite group-hover:text-lime transition-colors">
                VANTA
            </span>
        </a>

        {{-- Desktop nav --}}
        <nav class="hidden md:flex items-center gap-10 font-body text-sm uppercase tracking-wider text-ash">
            <a href="{{ route('home') }}" class="hover:text-lime transition-colors {{ request()->routeIs('home') ? 'text-offwhite' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="hover:text-lime transition-colors {{ request()->routeIs('about') ? 'text-offwhite' : '' }}">About</a>
            <a href="{{ route('services') }}" class="hover:text-lime transition-colors {{ request()->routeIs('services') ? 'text-offwhite' : '' }}">Services</a>
            <a href="{{ route('contact') }}" class="rounded-full border border-lime px-4 py-2 text-lime hover:bg-lime hover:text-obsidian transition-colors {{ request()->routeIs('contact') ? 'bg-lime text-obsidian' : '' }}">Contact</a>
        </nav>

        {{-- Mobile toggle --}}
        <button id="menu-toggle" class="md:hidden text-offwhite" aria-label="Toggle menu" aria-expanded="false" aria-controls="mobile-menu">
            <svg id="icon-open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="icon-close" class="hidden h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    {{-- Mobile nav --}}
    <nav id="mobile-menu" class="hidden md:hidden border-t border-graphite px-6 py-4 flex flex-col gap-4 font-body text-sm uppercase tracking-wider text-ash">
        <a href="{{ route('home') }}" class="hover:text-lime transition-colors">Home</a>
        <a href="{{ route('about') }}" class="hover:text-lime transition-colors">About</a>
        <a href="{{ route('services') }}" class="hover:text-lime transition-colors">Services</a>
        <a href="{{ route('contact') }}" class="hover:text-lime transition-colors">Contact</a>
    </nav>
</header>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');

    menuToggle.addEventListener('click', () => {
        const isHidden = mobileMenu.classList.contains('hidden');
        mobileMenu.classList.toggle('hidden');
        iconOpen.classList.toggle('hidden');
        iconClose.classList.toggle('hidden');
        menuToggle.setAttribute('aria-expanded', isHidden ? 'true' : 'false');
    });
</script>
