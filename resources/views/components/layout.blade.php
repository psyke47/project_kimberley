{{-- // resources/views/componentts/layout.blade.php
// A reusable layout component for the application --}}
<!DOCTYPE html>
<html lang="en-ZA">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>{{ $title ?? 'Grey Code' }}</title>

    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
</head>
<body>
  <x-preloader />
  <x-navbar />
  <main class=" bg-greycode-light-gray dark:bg-gray-800">
    {{ $slot }}
  </main>
  <x-footer />
  <script type="module" src="/resources/js/app.js"></script>
</body>
</html>