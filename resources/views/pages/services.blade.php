@extends('layouts.app')

@section('title', 'Services — VANTA')
@section('description', 'Brand identity, web development, UI/UX, motion, strategy, and packaging design.')

@section('content')

    <section class="border-b border-graphite bg-graphite/30">
        <div class="mx-auto max-w-5xl px-6 py-20 text-center">
            <p class="font-display text-lime text-xs uppercase tracking-widest2 mb-4">What We Do</p>
            <h1 class="font-display text-4xl md:text-5xl font-bold text-offwhite">Services</h1>
            <p class="mt-4 text-ash max-w-xl mx-auto">
                Six disciplines, one studio. Work with us on a single deliverable or the full build.
            </p>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-6 py-20">
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($services as $service)
                <div class="rounded-2xl border border-graphite p-8 hover:border-lime/60 transition-colors">
                    <div class="mb-5 flex h-11 w-11 items-center justify-center rounded-full bg-graphite text-lime">
                        <x-service-icon :name="$service['icon']" />
                    </div>
                    <h2 class="font-display text-lg font-semibold text-offwhite mb-2">{{ $service['title'] }}</h2>
                    <p class="text-sm text-ash leading-relaxed">{{ $service['description'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <section class="border-t border-graphite bg-graphite/30">
        <div class="mx-auto max-w-3xl px-6 py-20 text-center">
            <h2 class="font-display text-2xl md:text-3xl font-bold text-offwhite mb-4">Not sure where to start?</h2>
            <p class="text-ash mb-8">Tell us what you're building — we'll recommend the right scope.</p>
            <a href="{{ route('contact') }}" class="inline-block rounded-full bg-lime px-8 py-3 font-display text-sm font-bold uppercase tracking-wider text-obsidian hover:bg-offwhite transition-colors">
                Talk to Us
            </a>
        </div>
    </section>

@endsection
