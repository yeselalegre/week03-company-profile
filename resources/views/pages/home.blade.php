@extends('layouts.app')

@section('title', 'VANTA — Own the Dark.')
@section('description', 'VANTA is an independent creative studio building brand identity, web, and product experiences.')

@section('content')

    {{-- Hero Banner --}}
    <section class="relative overflow-hidden border-b border-graphite">
        <div class="absolute inset-0 bg-gradient-to-b from-graphite/40 via-obsidian to-obsidian"></div>
        <div class="relative mx-auto max-w-7xl px-6 py-28 md:py-40 text-center">
            <p class="font-display text-lime text-xs md:text-sm uppercase tracking-widest2 mb-6">Brand &middot; Web &middot; Product</p>
            <h1 class="font-display text-5xl md:text-7xl font-bold text-offwhite leading-tight">
                Own the <span class="text-lime">Dark.</span>
            </h1>
            <p class="mt-6 max-w-xl mx-auto text-ash text-base md:text-lg">
                VANTA is an independent creative studio. We build confident, minimal, unmistakable brand and digital experiences for companies who refuse to blend in.
            </p>
            <div class="mt-10 flex justify-center gap-4 flex-wrap">
                <a href="{{ route('contact') }}" class="rounded-full bg-lime px-8 py-3 font-display text-sm font-bold uppercase tracking-wider text-obsidian hover:bg-offwhite transition-colors">
                    Start a Project
                </a>
                <a href="{{ route('services') }}" class="rounded-full border border-graphite px-8 py-3 font-display text-sm font-bold uppercase tracking-wider text-bone hover:border-lime hover:text-lime transition-colors">
                    View Services
                </a>
            </div>
        </div>
    </section>

    {{-- Company Introduction --}}
    <section class="mx-auto max-w-5xl px-6 py-24 text-center">
        <h2 class="font-display text-2xl md:text-3xl font-bold text-offwhite mb-6">
            A studio built on precision, not noise.
        </h2>
        <p class="text-ash leading-relaxed">
            Founded by a small team of designers and engineers, VANTA exists for companies that want their brand
            to feel deliberate — every color, every line, every product code chosen on purpose. We work end to
            end: identity, interface, and the code that ships it.
        </p>
    </section>

    {{-- Featured Services --}}
    <section class="border-t border-graphite bg-graphite/30">
        <div class="mx-auto max-w-7xl px-6 py-20">
            <h2 class="font-display text-xs uppercase tracking-widest2 text-lime mb-10 text-center">Featured Services</h2>
            <div class="grid gap-6 md:grid-cols-3">
                @foreach ($featuredServices as $service)
                    <div class="rounded-2xl border border-graphite bg-obsidian p-8 hover:border-lime/60 transition-colors">
                        <div class="mb-5 flex h-11 w-11 items-center justify-center rounded-full bg-graphite text-lime">
                            <x-service-icon :name="$service['icon']" />
                        </div>
                        <h3 class="font-display text-lg font-semibold text-offwhite mb-2">{{ $service['title'] }}</h3>
                        <p class="text-sm text-ash leading-relaxed">{{ $service['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Call to Action --}}
    <section class="mx-auto max-w-4xl px-6 py-24 text-center">
        <h2 class="font-display text-3xl md:text-4xl font-bold text-offwhite mb-4">
            Ready to build something that <span class="text-lime">owns the room?</span>
        </h2>
        <p class="text-ash mb-8">Tell us about your project — we usually reply within one business day.</p>
        <a href="{{ route('contact') }}" class="inline-block rounded-full bg-lime px-10 py-4 font-display text-sm font-bold uppercase tracking-wider text-obsidian hover:bg-offwhite transition-colors">
            Get in Touch
        </a>
    </section>

@endsection
