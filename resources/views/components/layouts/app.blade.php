<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        
        <header>
        {{ $slot }}
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Tu pie de página aquí -->
    </footer>
    </body>
</html>
