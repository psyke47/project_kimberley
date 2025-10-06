{{-- // resources/views/componentts/layout.blade.php
// A reusable layout component for the application --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>{{ $title ?? 'Grey Code' }}</title>
    <style>
    /* Toggle mobile menu visibility */
    #mobile-menu-toggle:checked ~ div {
        display: block;
    }

    /* Toggle between hamburger and close icons */
    #mobile-menu-toggle:checked ~ label .fa-bars {
        display: none;
    }
    
    #mobile-menu-toggle:checked ~ label .fa-xmark {
        display: block;
    }
    </style>
</head>
<body>
  <x-navbar />
  <main class="py-8">
    {{ $slot }}
  </main>
  <x-footer />
</body>
</html>