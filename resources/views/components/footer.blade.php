<footer class="border-t border-graphite bg-obsidian">
    <div class="mx-auto max-w-7xl px-6 py-14 grid gap-10 md:grid-cols-3">

        {{-- Brand --}}
        <div>
            <div class="flex items-center gap-3 mb-4">
                <svg viewBox="0 0 100 100" class="h-7 w-7" aria-hidden="true">
                    <polygon points="50,8 90,92 10,92" fill="#E8E5DF"/>
                    <polygon points="50,40 74,92 26,92" fill="#C8FF00"/>
                    <polygon points="50,74 60,92 40,92" fill="#0B0B0D"/>
                </svg>
                <span class="font-display text-lg font-bold tracking-widest2 text-offwhite">VANTA</span>
            </div>
            <p class="text-sm text-ash max-w-xs">Own the dark. An independent creative studio building brand, web, and product experiences.</p>
        </div>

        {{-- Contact --}}
        <div>
            <h3 class="font-display text-xs uppercase tracking-widest2 text-bone mb-4">Contact</h3>
            <ul class="space-y-2 text-sm text-ash">
                <li>128 Foundry Street, Unit 4B<br>Makati City, Philippines</li>
                <li><a href="mailto:hello@vanta.studio" class="hover:text-lime transition-colors">hello@vanta.studio</a></li>
                <li><a href="tel:+639171234567" class="hover:text-lime transition-colors">+63 917 123 4567</a></li>
            </ul>
        </div>

        {{-- Social --}}
        <div>
            <h3 class="font-display text-xs uppercase tracking-widest2 text-bone mb-4">Follow</h3>
            <div class="flex gap-4">
                <a href="#" aria-label="Instagram" class="text-ash hover:text-lime transition-colors">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="5" stroke-width="1.6"/><circle cx="12" cy="12" r="4" stroke-width="1.6"/><circle cx="17.2" cy="6.8" r="1"/></svg>
                </a>
                <a href="#" aria-label="X / Twitter" class="text-ash hover:text-lime transition-colors">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.9 2H22l-7.6 8.7L23 22h-6.9l-5.4-6.9L4.5 22H1.4l8.1-9.3L1 2h7l4.9 6.3L18.9 2Zm-1.2 18h1.9L7.4 4H5.4l12.3 16Z"/></svg>
                </a>
                <a href="#" aria-label="TikTok" class="text-ash hover:text-lime transition-colors">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M14 2h3.1a5.4 5.4 0 0 0 3.9 4v3.1a8.5 8.5 0 0 1-3.9-1v6.8A6.1 6.1 0 1 1 11 8.9v3.3a3 3 0 1 0 2.1 2.9V2Z"/></svg>
                </a>
            </div>
        </div>
    </div>

    <div class="border-t border-graphite">
        <div class="mx-auto max-w-7xl px-6 py-5 text-xs text-ash flex flex-col md:flex-row justify-between gap-2">
            <span>&copy; {{ date('Y') }} VANTA Studio. All rights reserved.</span>
            <span class="uppercase tracking-widest2">Own the dark.</span>
        </div>
    </div>
</footer>
