{{-- Comment Section Component --}}
<section class="w-full max-w-4xl mx-auto bg-white rounded-lg shadow-sm p-8 my-8">
    <ul class="w-full flex flex-col items-start gap-8">
        <li class="w-full relative">
            <div class="w-full flex gap-4">
                {{-- Comment Image --}}
                <div class="flex-shrink-0 w-12 h-12">
                    <img src="https://rvs-comment-module.vercel.app/Assets/User%20Avatar.png" 
                         alt="User avatar" 
                         class="w-12 h-12 rounded-full object-cover">
                </div>

                {{-- Comment Content --}}
                <div class="flex-1 flex flex-col gap-3">
                    {{-- Comment Details --}}
                    <div class="w-full flex items-center gap-3">
                        <h4 class="font-semibold text-gray-900 capitalize">Victor</h4>
                        <span class="text-gray-500 text-sm">20 hours ago</span>
                    </div>

                    {{-- Comment Description --}}
                    <div class="w-full">
                        <p class="text-gray-700 leading-relaxed">
                            This is a very informative article. I learned a lot about IoT and its applications in the energy sector. The examples provided were very helpful in understanding the concepts discussed.
                        </p>
                    </div>

                    {{-- Comment Actions --}}
                    <div class="w-full flex items-center gap-4">
                        {{-- Likes --}}
                        <div class="flex items-center gap-3">
                            {{-- Upvotes --}}
                            <div class="flex items-center gap-1">
                                <img src="https://rvs-comment-module.vercel.app/Assets/Up.svg" 
                                     alt="Upvote" 
                                     class="w-4 h-4 cursor-pointer">
                                <span class="font-semibold text-gray-700">2</span>
                            </div>
                            
                            {{-- Downvotes --}}
                            <div class="flex items-center gap-1">
                                <img src="https://rvs-comment-module.vercel.app/Assets/Down.svg" 
                                     alt="Downvote" 
                                     class="w-4 h-4 cursor-pointer">
                                <span class="font-semibold text-gray-700"></span>
                            </div>
                        </div>

                        {{-- Reply --}}
                        <div class="flex items-center">
                            <a href="#" class="text-gray-700 font-normal hover:text-blue-600 transition-colors duration-200">
                                Reply
                            </a>
                        </div>

                        {{-- Report --}}
                        <div class="flex items-center">
                            <a href="#" class="text-gray-700 font-normal hover:text-red-600 transition-colors duration-200">
                                Report
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Vertical line for nested comments (if needed) --}}
            <div class="absolute top-14 left-6 -translate-x-1/2 w-0.5 h-[calc(100%-56px)] bg-gray-300"></div>
        </li>
    </ul>
</section>