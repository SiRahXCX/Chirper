<!DOCTYPE html>
<html lang="en" data-theme="lofi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ isset($pagetitle) ? $pagetitle . ' - Chirper' : 'Chirper'}}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="flex justify-between p-4">
            <h1 class="text-4xl font-bold">🐦Chirper</h1>
            <nav>
                <button class="btn" type="button">Sign in</button>
                <button class="btn" type="button">Sign out</button>
            </nav>
        </header>

        <main class="flex-1 container mx-auto">
            {{ $slot }}
        </main>

        <footer class="footer footer-center p-5 bg-base-300 text-xs">
            ©️ 2026 Chirper - Build with laravel
        </footer>
    </body>
</html>