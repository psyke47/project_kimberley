{{-- Preloader Component --}}
<div id="preloader" class="fixed inset-0 z-50 flex items-center justify-center bg-white transition-opacity duration-500">
    <div class="text-center">
        {{-- Preloader Image Container --}}
        <div class="mb-4">
            <div class="w-20 h-20 mx-auto bg-gray-200 rounded-full animate-pulse flex items-center justify-center">
                <img src="{{ asset('images/G-logo-black.png') }}" alt="Loading..." class="w-12 h-12 animate-pulse"> {{-- Optional spin animation --}}
            </div>
        </div>
        
        {{-- Optional Loading Text --}}
        <div class="flex items-center justify-center space-x-2">
            <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce"></div>
            <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.1s"></div>
            <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const preloader = document.getElementById('preloader');
    
    // Hide preloader when page is fully loaded
    window.addEventListener('load', function() {
        setTimeout(function() {
            preloader.style.opacity = '0';
            setTimeout(function() {
                preloader.style.display = 'none';
            }, 500);
        }, 500); // Minimum display time
    });
    
    // Fallback: hide preloader after 3 seconds max
    setTimeout(function() {
        if (preloader.style.display !== 'none') {
            preloader.style.opacity = '0';
            setTimeout(function() {
                preloader.style.display = 'none';
            }, 500);
        }
    }, 3000);
});
</script>