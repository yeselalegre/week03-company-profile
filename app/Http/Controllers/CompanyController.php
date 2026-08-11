<?php

namespace App\Http\Controllers;

class CompanyController extends Controller
{
    /**
     * Home page — hero, intro, featured services, CTA.
     */
    public function home()
    {
        $featuredServices = [
            [
                'icon'  => 'identity',
                'title' => 'Brand Identity',
                'description' => 'Logos, systems, and visual languages built to hold their own in the dark.',
            ],
            [
                'icon'  => 'code',
                'title' => 'Web Development',
                'description' => 'Fast, accessible, framework-driven builds — from marketing sites to full products.',
            ],
            [
                'icon'  => 'ux',
                'title' => 'UI/UX Design',
                'description' => 'Interfaces that are confident, minimal, and unmistakably yours.',
            ],
        ];

        return view('pages.home', compact('featuredServices'));
    }

    /**
     * About page — history, mission, vision, values, team.
     */
    public function about()
    {
        $coreValues = [
            ['title' => 'Confidence',   'description' => 'We commit to decisions instead of hedging on them.'],
            ['title' => 'Minimalism',   'description' => 'Every element earns its place — nothing more, nothing less.'],
            ['title' => 'Independence', 'description' => 'We build original work, not templated trends.'],
            ['title' => 'Craft',        'description' => 'Details are the difference between good and unforgettable.'],
        ];

        $team = [
            ['name' => 'Mara Solis',   'role' => 'Founder & Creative Director'],
            ['name' => 'Devon Cruz',   'role' => 'Lead Engineer'],
            ['name' => 'Priya Nandan', 'role' => 'Head of Product Design'],
            ['name' => 'Elias Ford',   'role' => 'Motion & Art Direction'],
        ];

        return view('pages.about', compact('coreValues', 'team'));
    }

    /**
     * Services page — full offering list.
     */
    public function services()
    {
        $services = [
            [
                'icon'  => 'identity',
                'title' => 'Brand Identity & Logo Design',
                'description' => 'Naming, logo systems, monograms, and brand guidelines that define how a company looks, speaks, and feels.',
            ],
            [
                'icon'  => 'code',
                'title' => 'Web Development',
                'description' => 'Laravel and modern front-end builds — responsive, performant, and built on clean architecture.',
            ],
            [
                'icon'  => 'ux',
                'title' => 'UI/UX Design',
                'description' => 'Wireframes, prototypes, and interface design rooted in usability research, not guesswork.',
            ],
            [
                'icon'  => 'motion',
                'title' => 'Motion & Art Direction',
                'description' => 'Photography direction, video, and motion design that keep a brand consistent across every frame.',
            ],
            [
                'icon'  => 'strategy',
                'title' => 'Digital Strategy',
                'description' => 'Positioning, content strategy, and go-to-market plans grounded in audience and data.',
            ],
            [
                'icon'  => 'package',
                'title' => 'Packaging & Print Design',
                'description' => 'Packaging systems, lookbooks, and print collateral designed to extend the brand off-screen.',
            ],
        ];

        return view('pages.services', compact('services'));
    }

    /**
     * Contact page — form (UI only), address, socials.
     */
    public function contact()
    {
        return view('pages.contact');
    }
}
