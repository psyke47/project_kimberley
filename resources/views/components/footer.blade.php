<footer class="text-black py-8 bg-gradient-to-t from-gray-500 from-95% to-transparent-5% dark:bg-gray-900">
    <div class="container mx-auto px-4 max-w-7xl">
        <!-- Social icons: responsive flex-wrap so it adapts to all screen sizes -->
        <div class="flex flex-wrap justify-center items-center gap-6 sm:gap-8 md:gap-9">
            <!-- TikTok -->
            <div class="flex flex-col items-center space-y-2">
                <a href="#" aria-label="TikTok" class="group inline-flex items-center justify-center w-10 h-10 bg-white hover:bg-black rounded-full transform transition-all duration-300 hover:scale-110">
                    <i class="fa-brands fa-tiktok text-2xl text-gray-800 hover:text-white transition-colors duration-300"></i>
                </a>
                <p class="text-white text-xs sm:text-[12px]">TikTok</p>
            </div>

            <!-- LinkedIn -->
            <div class="flex flex-col items-center space-y-2">
                <a href="#" aria-label="LinkedIn" class="group inline-flex items-center justify-center w-10 h-10 bg-white hover:bg-blue-900 rounded-full transform transition-all duration-300 hover:scale-110">
                    <i class="fa-brands fa-linkedin-in text-2xl text-gray-800 group-hover:text-white transition-colors duration-300"></i>
                </a>
                <p class="text-white text-xs sm:text-[12px]">LinkedIn</p>
            </div>

            <!-- Instagram -->
            <div class="flex flex-col items-center space-y-2">
                <a href="#" aria-label="Instagram" class="group inline-flex items-center justify-center w-10 h-10 bg-white rounded-full transform transition-all duration-300 hover:scale-110">
                    <i class="fa-brands fa-instagram text-2xl text-gray-800 group-hover:text-pink-600 transition-colors duration-300"></i>
                </a>
                <p class="text-white text-xs sm:text-[12px]">Instagram</p>
            </div>

            <!-- Facebook -->
            <div class="flex flex-col items-center space-y-2">
                <a href="#" aria-label="Facebook" class="group inline-flex items-center justify-center w-10 h-10 bg-white hover:bg-blue-700 rounded-full transform transition-all duration-300 hover:scale-110">
                    <i class="fa-brands fa-facebook-f text-2xl text-gray-800 group-hover:text-white transition-colors duration-300"></i>
                </a>
                <p class="text-white text-xs sm:text-[12px]">Facebook</p>
            </div>

            <!-- X / Twitter -->
            <div class="flex flex-col items-center space-y-2">
                <a href="#" aria-label="X" class="group inline-flex items-center justify-center w-10 h-10 bg-white hover:bg-black hover:text-white rounded-full transform transition-all duration-300 hover:scale-110">
                    <i class="fa-brands fa-x-twitter text-2xl text-gray-800 group-hover:text-white transition-colors duration-300"></i>
                </a>
                <p class="text-white text-xs sm:text-[12px]">X</p>
            </div>

            <!-- YouTube -->
            <div class="flex flex-col items-center space-y-2">
                <a href="#" aria-label="YouTube" class="group inline-flex items-center justify-center w-10 h-10 bg-white rounded-full transform transition-all duration-300 hover:scale-110">
                    <i class="fa-brands fa-youtube text-2xl text-gray-800 group-hover:text-red-600 transition-colors duration-300"></i>
                </a>
                <p class="text-white text-xs sm:text-[12px]">YouTube</p>
            </div>
        </div>

        <!-- Address -->
        <div class="mt-4">
            <p class="text-center text-white text-sm md:text-base">We are based in 13 Stamvrug St, Val De Grace, Pretoria, 0184</p>
        </div>

        <!-- Newsletter form: stacked on small screens, inline on md+ -->
        <div x-data="newsletterForm" class="form mt-6">
            <form @submit.prevent="submitForm" action="{{ route('subscribe') }}" method="POST" class="flex flex-col md:flex-row items-center md:justify-center md:space-x-4 space-y-4 md:space-y-0 w-full max-w-3xl mx-auto px-2">
                @csrf
                <h4 class="text-lg font-semibold text-white md:mr-4">Subscribe to our Newsletter</h4>

                <input
                    type="email"
                    name="email"
                    x-model="email"
                    placeholder="Enter your email"
                    class="px-4 py-2 rounded-md focus:outline-none text-gray-800 bg-white w-full md:w-80"
                    required
                />

                <div class="rounded-full p-[1px] inline-block transform transition-all duration-500 ease-in-out hover:scale-105 shadow-lg shadow-white cursor-pointer bg-gradient-to-r from-black to-gray-400">
                    <button type="submit" class="bg-gray-500 hover:bg-gray-950 text-white font-bold py-3 px-6 rounded-full w-full md:w-auto transition-all duration-300">
                        Subscribe
                    </button>
                </div>
            </form>
        </div>

        <!-- Contact details -->
        <div class="flex flex-col sm:flex-row justify-center text-white mt-6 space-y-2 sm:space-y-0 sm:space-x-6 text-center px-2">
            <p><a href="mailto:skillsprogram@greycode.co.za" class="hover:underline">skillsprogram@greycode.co.za</a></p>
            <p><a href="tel:+27124813515" class="hover:underline">+27 12 481 3515</a></p>
            <p><a href="#" class="hover:underline">13 Stamvrug St, Val de Grace, Pretoria</a></p>
        </div>

        <!-- Copyright -->
        <div class="text-center text-white mt-4 text-sm">
            <p>&copy; {{ date('Y') }} Greycode. All rights reserved.</p>
        </div>
    </div>
</footer>
<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('newsletterForm', () => ({
        email: '',
        async submitForm() {
            try {
                await fetch("{{ route('subscribe') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({ email: this.email })
                });
                alert("Subscribed successfully!");
                this.email = '';
            } catch (error) {
                alert("Subscription failed.");
            }
        }
    }));
});
</script>