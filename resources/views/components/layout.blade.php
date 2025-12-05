{{-- // resources/views/componentts/layout.blade.php
// A reusable layout component for the application --}}
<!DOCTYPE html>
<html lang="en-ZA">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    {{-- Font Awesome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>{{ $title ?? 'Greycode' }}</title>
    <meta name="description" content="{{ $meta_description ?? 'Greycode - Innovative IoT Solutions' }}">
    <meta name="keywords" content="{{ $meta_keywords ?? 'IoT, Internet of Things, Greycode, Innovative Solutions' }}">
    <meta name="author" content="{{ $meta_author ?? 'Greycode' }}">
    <meta name="robots" content="{{ $meta_robots ?? 'index, follow' }}">
    <link rel="canonical" href="{{ $meta_canonical ?? request()->url() }}">
    <meta property="og:title" content="{{ $title ?? 'Greycode' }}">
    <meta property="og:description" content="{{ $meta_description ?? 'Greycode - Innovative IoT Solutions' }}">
    <meta property="og:image" content="{{ $meta_image ?? asset('images/og-image.png') }}">
    <meta property="og:url" content="{{ $meta_canonical ?? request()->url() }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'Greycode' }}">
    <meta name="twitter:description" content="{{ $meta_description ?? 'Greycode - Innovative IoT Solutions' }}">
    <meta name="twitter:image" content="{{ $meta_image ?? asset('images/twitter-image.png') }}">
    <meta name="twitter:url" content="{{ $meta_canonical ?? request()->url() }}">
    <meta name="twitter:site" content="@Greycode">
    <meta name="twitter:creator" content="@Greycode">
    
    

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="/images/favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    {{-- Scrolling Aninmation --}}
    <style>
      @keyframes appear {
          from {
            opacity: 0;
            clip-path: inset(100% 100% 0 0);
          }
          to {
            opacity: 1;
            clip-path: inset(0 0 0 0);
          }
        }
        .brick {
          animation: appear linear;
          animation-timeline: view();
          animation-range: entry 0% cover 40%;}
  
    </style>
</head>
<body>
  <x-preloader />
  <x-navbar />
  <main class=" bg-greycode-light-gray dark:bg-gray-800">
    {{ $slot }}
  </main>
  <x-footer />
 {{--  <script src="{{ asset('resources/js/app.js') }}"></script> --}}
  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

  <!-- Initialize AOS -->
  <script>
    AOS.init();
  </script>

  <!-- GSAP Animation Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/split-type"></script>
  <script src="https://unpkg.com/lenis@1.3.15/dist/lenis.min.js"></script> 
</body>
</html>