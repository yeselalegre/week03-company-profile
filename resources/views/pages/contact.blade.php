@extends('layouts.app')

@section('title', 'Contact — VANTA')
@section('description', 'Get in touch with VANTA. Address, email, phone, and project inquiry form.')

@section('content')

    <section class="border-b border-graphite bg-graphite/30">
        <div class="mx-auto max-w-5xl px-6 py-20 text-center">
            <p class="font-display text-lime text-xs uppercase tracking-widest2 mb-4">Get In Touch</p>
            <h1 class="font-display text-4xl md:text-5xl font-bold text-offwhite">Let's talk.</h1>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-6 py-20 grid gap-16 lg:grid-cols-5">

        {{-- Contact form (UI only, no backend action) --}}
        <div class="lg:col-span-3">
            <h2 class="font-display text-xs uppercase tracking-widest2 text-lime mb-6">Project Inquiry</h2>

            <form class="space-y-5" onsubmit="return false;">
                <div class="grid gap-5 sm:grid-cols-2">
                    <div>
                        <label for="name" class="block text-xs uppercase tracking-wider text-ash mb-2">Full Name</label>
                        <input type="text" id="name" name="name" required
                            class="w-full rounded-lg border border-graphite bg-obsidian px-4 py-3 text-sm text-bone placeholder-ash focus:border-lime focus:outline-none focus:ring-0"
                            placeholder="Jane Dela Cruz">
                    </div>
                    <div>
                        <label for="email" class="block text-xs uppercase tracking-wider text-ash mb-2">Email</label>
                        <input type="email" id="email" name="email" required
                            class="w-full rounded-lg border border-graphite bg-obsidian px-4 py-3 text-sm text-bone placeholder-ash focus:border-lime focus:outline-none focus:ring-0"
                            placeholder="jane@company.com">
                    </div>
                </div>

                <div>
                    <label for="subject" class="block text-xs uppercase tracking-wider text-ash mb-2">Subject</label>
                    <input type="text" id="subject" name="subject"
                        class="w-full rounded-lg border border-graphite bg-obsidian px-4 py-3 text-sm text-bone placeholder-ash focus:border-lime focus:outline-none focus:ring-0"
                        placeholder="New brand identity project">
                </div>

                <div>
                    <label for="message" class="block text-xs uppercase tracking-wider text-ash mb-2">Message</label>
                    <textarea id="message" name="message" rows="5" required
                        class="w-full rounded-lg border border-graphite bg-obsidian px-4 py-3 text-sm text-bone placeholder-ash focus:border-lime focus:outline-none focus:ring-0"
                        placeholder="Tell us a bit about your project..."></textarea>
                </div>

                <button type="submit"
                    class="w-full sm:w-auto rounded-full bg-lime px-8 py-3 font-display text-sm font-bold uppercase tracking-wider text-obsidian hover:bg-offwhite transition-colors">
                    Send Message
                </button>
                <p class="text-xs text-ash">UI only — hook this up to a Controller/Mail action to make it live.</p>
            </form>
        </div>

        {{-- Contact details --}}
        <div class="lg:col-span-2 space-y-8">
            <div>
                <h2 class="font-display text-xs uppercase tracking-widest2 text-lime mb-4">Studio Address</h2>
                <p class="text-ash leading-relaxed">128 Foundry Street, Unit 4B<br>Makati City, Philippines 1200</p>
            </div>
            <div>
                <h2 class="font-display text-xs uppercase tracking-widest2 text-lime mb-4">Email</h2>
                <a href="mailto:hello@vanta.studio" class="text-bone hover:text-lime transition-colors">hello@vanta.studio</a>
            </div>
            <div>
                <h2 class="font-display text-xs uppercase tracking-widest2 text-lime mb-4">Phone</h2>
                <a href="tel:+639171234567" class="text-bone hover:text-lime transition-colors">+63 917 123 4567</a>
            </div>
            <div>
                <h2 class="font-display text-xs uppercase tracking-widest2 text-lime mb-4">Social</h2>
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
    </section>

    {{-- Embedded Google Map (optional) --}}
    <section class="border-t border-graphite">
        <div class="h-80 w-full grayscale opacity-80">
            <iframe
                src="https://www.google.com/maps?q=Makati%20City%2C%20Philippines&output=embed"
                class="h-full w-full border-0"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="VANTA studio location map">
            </iframe>
        </div>
    </section>

@endsection
