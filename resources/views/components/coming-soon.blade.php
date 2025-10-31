<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>{{ $title ?? 'Greycode' }}</title>
    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
</head>
<body style="background-image: url('{{ asset('images/under-contruction.jpg') }}');" class="bg-cover bg-center min-h-screen flex items-center justify-center bg-greycode-light-blue bg-blend-overlay">
    <div class="w-full  px-6 sm:px-8 lg:px-12 py-16 sm:py-24 backdrop-blur-sm/0">
        <div class="container lg:p-20 justify-center-safe mt-40 text-center space-y-8 text-white mx-auto">
            <h1 class="text-4xl sm:text-6xl md:text-7xl lg:text-8xl xl:text-9xl  mix-blend-brighten sm:font-extrabold">Coming Soon</h1>
            <p class="text-base sm:text-lg md:text-2xl lg:text-4xl font-semibold mix-blend-brighten leading sm:font-semibold">This page is under construction. Stay tuned!</p>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    <script type="module" src="/resources/js/app.js"></script>
    <!-- AOS JS -->
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

     <!-- Initialize AOS -->
    <script>
    AOS.init();
    </script>
</body>
</html>