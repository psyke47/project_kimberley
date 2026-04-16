{{-- // resources/views/components/layout.blade.php
// A reusable layout component for the application --}}
<!DOCTYPE html>
<html lang="en-ZA" class="scroll-smooth">
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
    <link rel="canonical" href="{{ $canonical_url ?? request()->url() }}">
    
    {{-- Open Graph / Social Media --}}
    <meta property="og:title" content="{{ $title ?? 'Greycode' }}">
    <meta property="og:description" content="{{ $meta_description ?? 'Greycode - Innovative IoT Solutions' }}">
    <meta property="og:image" content="{{ $meta_image ?? asset('images/og-image.png') }}">
    <meta property="og:url" content="{{ $canonical_url ?? request()->url() }}">
    <meta property="og:type" content="website">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'Greycode' }}">
    <meta name="twitter:description" content="{{ $meta_description ?? 'Greycode - Innovative IoT Solutions' }}">
    <meta name="twitter:image" content="{{ $meta_image ?? asset('images/twitter-image.png') }}">
    
    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="/images/favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    
    {{-- Scroll Animation Styles --}}
    <style>
        /* Modern scroll-driven animation (works in Chrome 115+) */
        @supports (animation-timeline: view()) {
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
                animation-range: entry 0% cover 40%;
            }
        }
        
        /* Fallback for browsers that don't support animation-timeline */
        @supports not (animation-timeline: view()) {
            .brick {
                opacity: 1;
                clip-path: inset(0 0 0 0);
                transition: opacity 0.6s ease-out, clip-path 0.6s ease-out;
            }
            
            .brick.animate {
                opacity: 1;
                clip-path: inset(0 0 0 0);
            }
        }
        
        /* Smooth theme transitions */
        * {
            transition-property: background-color, border-color, color, fill, stroke;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }
        
        /* Prevent transition on page load */
        .preload * {
            transition: none !important;
        }
    </style>
</head>
<body class="preload">
    <x-preloader />
    <x-navbar />
    
    {{-- Main content with dynamic background --}}
    <main class="min-h-screen bg-white dark:bg-neutral-900 transition-colors duration-300">
        {{ $slot }}
    </main>
    
    <x-footer />
    
    {{-- Scripts --}}
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Alpine JS -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    
    <!-- GSAP Animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- SplitType for text animations -->
    <script src="https://unpkg.com/split-type"></script>
    
    <!-- Lenis Smooth Scroll -->
    <script src="https://unpkg.com/lenis@1.3.15/dist/lenis.min.js"></script>
    
    <!-- Initialize AOS -->
    <script>
        AOS.init({
            duration: 600,
            once: true,
            offset: 100
        });
    </script>
    
    <!-- Remove preload class after page load to enable transitions -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                document.body.classList.remove('preload');
            }, 100);
        });
    </script>
    
    <!-- Fallback for brick animation on non-supporting browsers -->
    <script>
        if (!CSS.supports('animation-timeline', 'view()')) {
            document.addEventListener('DOMContentLoaded', function() {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('animate');
                        }
                    });
                }, { threshold: 0.4 });
                
                document.querySelectorAll('.brick').forEach(el => observer.observe(el));
            });
        }
    </script>
</body>
</html>