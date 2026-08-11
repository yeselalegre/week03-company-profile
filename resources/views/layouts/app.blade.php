<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'VANTA — Own the Dark.')</title>
    <meta name="description" content="@yield('description', 'VANTA is an independent creative studio building brand identity, web, and product experiences.')">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        obsidian: '#0B0B0D',
                        graphite: '#18181B',
                        ash: '#71717A',
                        bone: '#E8E5DF',
                        offwhite: '#FAFAFA',
                        lime: '#C8FF00',
                    },
                    fontFamily: {
                        display: ['"Space Grotesk"', 'sans-serif'],
                        body: ['Inter', 'sans-serif'],
                    },
                    letterSpacing: {
                        widest2: '.25em',
                    },
                },
            },
        };
    </script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-obsidian text-bone font-body antialiased selection:bg-lime selection:text-obsidian">

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
