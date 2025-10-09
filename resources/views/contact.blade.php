<x-layout>
   <section class="py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
            <!-- Left Column - Contact Info -->
            <div class="flex flex-col">
                <h2 class="text-black text-4xl lg:text-5xl font-bold mb-8 text-left">Contact Us</h2>
                <div class="space-y-6 text-left">
                    <h4 class="text-2xl font-semibold">Let's <span class="text-greycode-mid-blue">chat</span></h4>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        We promise, your message won't disappear into the abyss. We're standing by and ready to help with any questions, comments, or thoughts you may have.
                    </p>
                </div>
            </div>

            <!-- Right Column - Contact Form -->
            <div class="flex flex-col w-full">
                <div class="w-full bg-black rounded-2xl shadow-xl p-8">
                    <h2 class="text-2xl font-bold text-gray-200 mb-6">Send us a <span class="text-greycode-light-blue">message</span></h2>

                    <form class="flex flex-col space-y-6">
                        <!-- Name Field -->
                        <div>
                            <label class="block mb-2 text-gray-200 font-medium text-left" for="name">Name</label>
                            <input 
                                placeholder="Jane Doe" 
                                class="w-full bg-gray-700 text-gray-200 border-0 rounded-lg p-3 focus:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition ease-in-out duration-150" 
                                type="text"
                            >
                        </div>

                        <!-- Email Field -->
                        <div>
                            <label class="block mb-2 text-gray-200 font-medium text-left" for="email">Email</label>
                            <input 
                                placeholder="jane@greycode.co.za" 
                                class="w-full bg-gray-700 text-gray-200 border-0 rounded-lg p-3 focus:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition ease-in-out duration-150" 
                                type="email"
                            >
                        </div>

                        <!-- Service Selection -->
                        <div>
                            <label class="block mb-2 text-gray-200 font-medium text-left" for="product">What service are you looking for:</label>
                            <select 
                                class="w-full bg-gray-700 text-gray-200 border-0 rounded-lg p-3 focus:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition ease-in-out duration-150" 
                                id="product"
                            >
                                <option value="product-1">IoT Solutions</option>
                                <option value="product-2">Product Development</option>
                                <option value="product-3">Education</option>
                            </select>
                        </div>

                        <!-- Message Field -->
                        <div>
                            <label class="block mb-2 text-gray-200 font-medium text-left" for="message">Message</label>
                            <textarea 
                                placeholder="Your message..." 
                                rows="4"
                                class="w-full bg-gray-700 text-gray-200 border-0 rounded-lg p-3 focus:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition ease-in-out duration-150" 
                                name="feedback"
                            ></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-4">
                            <button 
                                type="submit" 
                                class="w-full bg-gradient-to-r from-greycode-light-blue to-greycode-mid-blue text-white font-bold py-4 px-8 rounded-lg transition-all duration-500 ease-in-out hover:brightness-110 hover:scale-105 transform shadow-lg"
                            >
                                Submit Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</x-layout>