@props(['name'])

@php
    $icons = [
        'identity' => '<path d="M12 3l7 18H5L12 3z" stroke-width="1.6" />',
        'code'     => '<path d="M8 9l-4 4 4 4M16 9l4 4-4 4M13 5l-2 14" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />',
        'ux'       => '<rect x="4" y="4" width="16" height="16" rx="2" stroke-width="1.6" /><path d="M4 9h16" stroke-width="1.6" />',
        'motion'   => '<circle cx="12" cy="12" r="8" stroke-width="1.6" /><path d="M12 8v4l3 2" stroke-width="1.6" stroke-linecap="round" />',
        'strategy' => '<path d="M4 19h16M6 19V9m6 10V5m6 14v-7" stroke-width="1.6" stroke-linecap="round" />',
        'package'  => '<path d="M21 8l-9-5-9 5 9 5 9-5zM3 8v8l9 5 9-5V8M12 13v8" stroke-width="1.6" stroke-linejoin="round" />',
    ];
    $path = $icons[$name] ?? $icons['identity'];
@endphp

<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
    {!! $path !!}
</svg>
