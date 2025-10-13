<footer class="text-black py-8 text-center bg-gray-500">
    <div class="container mx-auto">
        <div class="flex justify-center space-x-9">
            {{-- Social Media Icons --}}
            {{-- Change the hover color to logo themes --}}
            <div class="flex flex-col items-center space-y-2">
                <a href="#" class="inline-flex items-center justify-center w-10 h-10 bg-white rounded-full hover:bg-black hover:text-white transition-colors duration-300 hover:scale-120">
                    <i class="fa-brands fa-tiktok text-2xl text-gray-800 hover:text-white"></i>         
                </a>
                <p class="text-white hover:text-greycode-mid-blue text-[12px]">TikTok</p>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <a href="#" class="inline-flex items-center justify-center w-10 h-10 bg-white rounded-full hover:bg-blue-900 transition-colors duration-300 hover:scale-120">
                    <i class="fa-brands fa-linkedin-in text-2xl hover:text-white text-gray-800"></i>
                </a>
                <p class="text-white text-[12px]">LinkedIn</p>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <a href="#" class="inline-flex items-center justify-center w-10 h-10 bg-white rounded-full hover:text-pink-600 transition-colors duration-300 hover:scale-120">
                    <i class="fa-brands fa-instagram text-2xl text-gray-800 hover:text-pink-600"></i>
                </a>
                <p class="text-white text-[12px]">Instagram</p>
            </div>  
            <div class="flex flex-col items-center space-y-2">
                <a href="#" class="inline-flex items-center justify-center w-10 h-10 bg-white rounded-full hover:bg-blue-700 transition-colors duration-300 hover:scale-120">
                    <i class="fa-brands fa-facebook-f text-2xl text-gray-800 hover:text-white"></i>
                </a>
                <p class="text-white text-[12px]">Facebook</p>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <a href="#" class="inline-flex items-center justify-center w-10 h-10 bg-white rounded-full hover:bg-black hover:text-white transition-colors duration-300 hover:scale-120">
                    <i class="fa-brands fa-x-twitter text-2xl text-gray-800 hover:text-white"></i>
                </a>
                <p class="text-white text-[12px]">X</p>
            </div>
            <div class="flex flex-col items-center space-y-2">
                <a href="#" class="inline-flex items-center justify-center w-10 h-10 bg-white rounded-full hover:bg-gray-200 transition-colors duration-300 hover:scale-120">
                    <i class="fa-brands fa-youtube text-2xl text-gray-800 hover:text-red-600"></i>
                </a>
                <p class="text-white text-[12px]">YouTube</p>
            </div>
        </div>
        <div>
            <p class="text-center text-white mt-4">We are based in this 13 Stamvrug St, Val De Grace, Pretoria, 0184</p>
        </div>
        <div class="form">
            <form action="#" method="POST" class="flex flex-col items-center mt-4 space-y-4 text-white">
                <h4 class="text-lg font-semibold">Subscribe to our Newsletter</h4>
                <input type="email" name="email" placeholder="Enter your email" class="px-4 py-2 rounded-md focus:outline-none text-gray-800 bg-white" required>
                <div class="bg-gradient-to-r from-black to-greycode-light-blue rounded-full p-[1px] inline-block transform transition-all duration-500 ease-in-out hover:scale-110 shadow-lg shadow-white cursor-pointer">
                    <button type="submit" class="bg-gray-500 hover:bg-gray-950 text-white font-bold py-3 px-6 rounded-full w-full transition-all duration-500 ease-in-out hover:brightness-110 hover:animate-pulse active:animate-bounce">Subscribe</button>
                </div>
        </form>
        </div>
        <div class="flex justify-center text-white mt-6 space-x-6">
            <p><a>info@Greycode.co.za</a></p>
            <p><a>+27 12 481 3515</a></p>
            <p><a>13 Stamvrug St, Val de Grace, Pretoria</a></p>

        </div>
        <div class="text-center text-white mt-4">
            <p>&copy; {{ date('Y') }} Greycode. All rights reserved.</p>
        </div>
    </div>
</footer>