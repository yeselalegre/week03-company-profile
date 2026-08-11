# VANTA — Company Profile Website

A responsive, multi-page Laravel company profile site for **VANTA**, an independent creative
studio ("Own the Dark."). Built with Laravel's MVC architecture, Blade layouts/components,
and Tailwind CSS, using VANTA's brand kit (colors, typography, monogram, voice).

## Tech

- Laravel (routes → controller → Blade views)
- Blade layouts & components (`layouts/app.blade.php`, `components/navbar.blade.php`, `components/footer.blade.php`, `components/service-icon.blade.php`)
- Tailwind CSS via CDN, extended with VANTA's design tokens (colors + fonts) in `layouts/app.blade.php`
- Google Fonts: Space Grotesk (display) + Inter (body)

## Brand tokens used

| Token | Hex | Use |
|---|---|---|
| Obsidian | `#0B0B0D` | Primary background |
| Graphite | `#18181B` | Cards, borders, panels |
| Ash | `#71717A` | Secondary text |
| Bone | `#E8E5DF` | Body text on dark |
| Off-white | `#FAFAFA` | Headings |
| Electric Lime | `#C8FF00` | Accent only — CTAs, links, highlights |

## Pages & routes

| Route | Controller method | View |
|---|---|---|
| `/` | `home()` | `pages/home.blade.php` |
| `/about` | `about()` | `pages/about.blade.php` |
| `/services` | `services()` | `pages/services.blade.php` |
| `/contact` | `contact()` | `pages/contact.blade.php` |

## Setup

These are the **app-level files** for a fresh Laravel installation (routes, controller, views,
and public CSS). To run the project:

```bash
composer create-project laravel/laravel week03-company-profile
cd week03-company-profile
```

Then copy the contents of this package into the newly created project, overwriting:

- `routes/web.php`
- `app/Http/Controllers/CompanyController.php`
- `app/Http/Controllers/Controller.php`
- `resources/views/` (layouts, components, pages)
- `public/css/app.css`

Finally:

```bash
php artisan serve
```

Visit `http://127.0.0.1:8000`.

## Notes

- The contact form is UI-only per the assignment spec (`onsubmit="return false;"`). To make it
  functional, add a `POST /contact` route, a `store()` method on `CompanyController`, and a
  Mailable or database write.
- The Google Map embed on the Contact page uses a generic query string — swap the `src` in
  `pages/contact.blade.php` for a real embed URL/API key for production use.
- Service content (icons, titles, descriptions) is passed from `CompanyController` into the
  views rather than hardcoded in Blade, per MVC separation of concerns.
- `screenshots/` and `documentation/` are included per the required folder structure —
  add screenshots and any write-up there before submission.
