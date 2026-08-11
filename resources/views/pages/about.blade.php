@extends('layouts.app')

@section('title', 'About — VANTA')
@section('description', 'The history, mission, vision, and people behind VANTA.')

@section('content')

    {{-- Page header --}}
    <section class="border-b border-graphite bg-graphite/30">
        <div class="mx-auto max-w-5xl px-6 py-20 text-center">
            <p class="font-display text-lime text-xs uppercase tracking-widest2 mb-4">About Us</p>
            <h1 class="font-display text-4xl md:text-5xl font-bold text-offwhite">Built in the dark, on purpose.</h1>
        </div>
    </section>

    {{-- Company History --}}
    <section class="mx-auto max-w-4xl px-6 py-20">
        <h2 class="font-display text-xs uppercase tracking-widest2 text-lime mb-4">Our History</h2>
        <p class="text-ash leading-relaxed">
            VANTA started as a two-person studio taking on brand and web projects nights and weekends. What began
            as freelance work grew into a full creative practice once a handful of early clients asked us to
            handle everything — identity, product, and code — under one roof. Today we're a small, intentionally
            un-bloated team that still turns down more work than we take, because the fit has to be right.
        </p>
    </section>

    {{-- Mission & Vision --}}
    <section class="border-y border-graphite bg-graphite/30">
        <div class="mx-auto max-w-5xl px-6 py-16 grid gap-10 md:grid-cols-2">
            <div>
                <h2 class="font-display text-xs uppercase tracking-widest2 text-lime mb-4">Mission</h2>
                <p class="text-ash leading-relaxed">
                    To give ambitious, independent companies a visual and digital identity as confident as the
                    work they do — without the noise, trends, or template-driven design that fades into the
                    background.
                </p>
            </div>
            <div>
                <h2 class="font-display text-xs uppercase tracking-widest2 text-lime mb-4">Vision</h2>
                <p class="text-ash leading-relaxed">
                    A creative industry where independent brands compete on craft, not budget — where a small
                    studio and a small client can produce work that stands beside anyone's.
                </p>
            </div>
        </div>
    </section>

    {{-- Core Values --}}
    <section class="mx-auto max-w-6xl px-6 py-20">
        <h2 class="font-display text-xs uppercase tracking-widest2 text-lime mb-10 text-center">Core Values</h2>
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($coreValues as $value)
                <div class="rounded-2xl border border-graphite p-6 hover:border-lime/60 transition-colors">
                    <h3 class="font-display text-base font-semibold text-offwhite mb-2">{{ $value['title'] }}</h3>
                    <p class="text-sm text-ash leading-relaxed">{{ $value['description'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Team Introduction --}}
    <section class="border-t border-graphite bg-graphite/30">
        <div class="mx-auto max-w-6xl px-6 py-20">
            <h2 class="font-display text-xs uppercase tracking-widest2 text-lime mb-10 text-center">The Team</h2>
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($team as $member)
                    <div class="text-center">
                        <div class="mx-auto mb-4 h-24 w-24 rounded-full bg-obsidian border border-graphite flex items-center justify-center">
                            <span class="font-display text-lime text-lg">
                                {{ collect(explode(' ', $member['name']))->map(fn($p) => $p[0])->implode('') }}
                            </span>
                        </div>
                        <h3 class="font-display text-sm font-semibold text-offwhite">{{ $member['name'] }}</h3>
                        <p class="text-xs text-ash mt-1">{{ $member['role'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
