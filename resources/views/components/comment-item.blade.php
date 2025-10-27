@props(['comment'])

<li class="w-full relative" data-aos="fade-up" data-aos-duration="600">
    <div class="w-full flex gap-4">
        {{-- Generic User Icon --}}
        <div class="flex-shrink-0 w-12 h-12 bg-gray-200 dark:bg-gray-700 rounded-full flex items-center justify-center">
            <svg class="w-6 h-6 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
        </div>

        {{-- Comment Content --}}
        <div class="flex-1 flex flex-col gap-3">
            {{-- Comment Details --}}
            <div class="w-full flex items-center gap-3">
                <h4 class="font-semibold text-gray-900 dark:text-white capitalize">{{ $comment->getUserName() }}</h4>
                <span class="text-gray-500 dark:text-gray-400 text-sm">{{ $comment->getTimeAgo() }}</span>
            </div>

            {{-- Comment Description --}}
            <div class="w-full">
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed">{{ $comment->content }}</p>
            </div>

            {{-- Comment Actions --}}
            <div class="w-full flex items-center gap-4">
                {{-- Likes --}}
                <div class="flex items-center gap-3">
                    {{-- Upvotes --}}
                    <div class="flex items-center gap-1">
                        <button onclick="voteComment({{ $comment->id }}, 'upvote')" class="p-1 hover:bg-gray-100 dark:hover:bg-gray-700 rounded transition-colors duration-200">
                            <svg class="w-4 h-4 text-gray-600 dark:text-gray-400 hover:text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                            </svg>
                        </button>
                        <span class="font-semibold text-gray-700 dark:text-gray-300 min-w-4 text-center">{{ $comment->upvotes }}</span>
                    </div>
                    
                    {{-- Downvotes --}}
                    <div class="flex items-center gap-1">
                        <button onclick="voteComment({{ $comment->id }}, 'downvote')" class="p-1 hover:bg-gray-100 dark:hover:bg-gray-700 rounded transition-colors duration-200">
                            <svg class="w-4 h-4 text-gray-600 dark:text-gray-400 hover:text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <span class="font-semibold text-gray-700 dark:text-gray-300 min-w-4 text-center">{{ $comment->downvotes }}</span>
                    </div>
                </div>

                {{-- Reply --}}
                <div class="flex items-center">
                    <button class="text-gray-700 dark:text-gray-300 font-normal hover:text-blue-600 transition-colors duration-200">
                        Reply
                    </button>
                </div>

                {{-- Report --}}
                <div class="flex items-center">
                    <button class="text-gray-700 dark:text-gray-300 font-normal hover:text-red-600 transition-colors duration-200">
                        Report
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Nested Replies --}}
    @if($comment->replies->count() > 0)
        <div class="ml-12 mt-4 space-y-4 border-l-2 border-gray-200 dark:border-gray-700 pl-6">
            @foreach($comment->replies as $reply)
                <x-comment-item :comment="$reply" />
            @endforeach
        </div>
    @endif
</li>