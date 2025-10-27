@props([
    'model' => null,
    'comments' => collect(),
    'commentableId' => null,
    'commentableType' => null,
])

{{-- Comment Section Component --}}
<div class="bg-white dark:bg-gray-800">
    <section class="w-full max-w-4xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-sm p-12"
             id="comment-section">
    
        {{-- Comment Form --}}
        <div class="mb-12" data-aos="fade-up" data-aos-duration="600">
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Leave a Comment</h3>
    
            @if($model || ($commentableId && $commentableType))
                <form id="comment-form" class="space-y-6">
                    @csrf
                    <input type="hidden" name="commentable_id" value="{{ $model ? $model->id : $commentableId }}">
                    <input type="hidden" name="commentable_type" value="{{ $model ? get_class($model) : $commentableType }}">
    
                    @guest
                        {{-- Name and Email for guests --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="guest_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Name *</label>
                                <input
                                    type="text"
                                    id="guest_name"
                                    name="guest_name"
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white transition-colors duration-200"
                                    placeholder="Enter your name"
                                >
                            </div>
                            <div>
                                <label for="guest_email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email *</label>
                                <input
                                    type="email"
                                    id="guest_email"
                                    name="guest_email"
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white transition-colors duration-200"
                                    placeholder="Enter your email"
                                >
                            </div>
                        </div>
                    @else
                        <div class="flex items-center gap-3 p-4 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
                            <div class="flex-shrink-0 w-10 h-10 bg-blue-100 dark:bg-blue-800 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <span class="text-blue-700 dark:text-blue-300 font-medium">Commenting as {{ Auth::user()->name }}</span>
                        </div>
                    @endguest
    
                    {{-- Comment Textarea --}}
                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Comment *</label>
                        <textarea
                            id="content"
                            name="content"
                            rows="5"
                            required
                            class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white transition-colors duration-200 resize-vertical"
                            placeholder="Share your thoughts..."
                        ></textarea>
                    </div>
    
                    {{-- Submit Button --}}
                    <div class="flex justify-end">
                        <button
                            type="submit"
                            id="submit-comment"
                            class="px-8 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors duration-200 disabled:opacity-50 disabled:cursor-not-allowed"
                        >
                            <span id="submit-text">Post Comment</span>
                            <div id="submit-loading" class="hidden">
                                <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                            </div>
                        </button>
                    </div>
                </form>
            @else
                <div class="text-center py-8 bg-yellow-50 dark:bg-yellow-900/20 rounded-lg">
                    <svg class="w-12 h-12 text-yellow-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                    </svg>
                    <p class="text-yellow-700 dark:text-yellow-300">Commenting is not available for this post.</p>
                </div>
            @endif
        </div>
    
        {{-- Comments List --}}
        <div class="space-y-2 mb-6">
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Comments ({{ $comments->count() }})</h3>
            <p class="text-gray-600 dark:text-gray-400">Join the discussion</p>
        </div>
    
        <div id="comments-list" class="w-full flex flex-col items-start gap-8">
            @foreach($comments->where('parent_id', null) as $comment)
                @include('components.comment-item', ['comment' => $comment])
            @endforeach
    
            @if($comments->isEmpty())
                <div class="text-center py-12" data-aos="fade-up">
                    <div class="w-16 h-16 mx-auto bg-gray-100 dark:bg-gray-700 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400">No comments yet. Be the first to share your thoughts!</p>
                </div>
            @endif
        </div>
    </section>
</div>

@if($model || ($commentableId && $commentableType))
<script>
document.addEventListener('DOMContentLoaded', function() {
    const commentForm = document.getElementById('comment-form');
    const commentsList = document.getElementById('comments-list');
    const submitBtn = document.getElementById('submit-comment');
    const submitText = document.getElementById('submit-text');
    const submitLoading = document.getElementById('submit-loading');

    // Handle comment form submission
    commentForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        submitBtn.disabled = true;
        submitText.classList.add('hidden');
        submitLoading.classList.remove('hidden');

        try {
            const response = await fetch('{{ route("comments.store") }}', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: formData
            });

            const result = await response.json();

            if (result.success) {
                // Add new comment to the list
                const newComment = createCommentElement(result.comment);
                const commentsContainer = document.getElementById('comments-list');
                
                // Remove "no comments" message if it exists
                const noCommentsMsg = commentsContainer.querySelector('.text-center.py-12');
                if (noCommentsMsg) {
                    noCommentsMsg.remove();
                }
                
                commentsContainer.insertBefore(newComment, commentsContainer.firstChild);
                
                // Update comment count
                updateCommentCount(1);
                
                // Reset form
                commentForm.reset();
                
                // Show success message
                showAlert('Comment posted successfully!', 'success');
            } else {
                throw new Error(result.message || 'Failed to post comment');
            }
        } catch (error) {
            console.error('Error:', error);
            showAlert('Error posting comment. Please try again.', 'error');
        } finally {
            submitBtn.disabled = false;
            submitText.classList.remove('hidden');
            submitLoading.classList.add('hidden');
        }
    });

    // Function to create comment element
    function createCommentElement(comment) {
        const commentDiv = document.createElement('div');
        commentDiv.className = 'w-full relative';
        commentDiv.setAttribute('data-aos', 'fade-up');
        commentDiv.setAttribute('data-aos-duration', '600');
        commentDiv.innerHTML = `
            <div class="w-full flex gap-4">
                <div class="flex-shrink-0 w-12 h-12 bg-gray-200 dark:bg-gray-700 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <div class="flex-1 flex flex-col gap-3">
                    <div class="w-full flex items-center gap-3">
                        <h4 class="font-semibold text-gray-900 dark:text-white capitalize">${comment.user_name || comment.guest_name}</h4>
                        <span class="text-gray-500 dark:text-gray-400 text-sm">Just now</span>
                    </div>
                    <div class="w-full">
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">${comment.content}</p>
                    </div>
                    <div class="w-full flex items-center gap-4">
                        <div class="flex items-center gap-3">
                            <div class="flex items-center gap-1">
                                <button onclick="voteComment(${comment.id}, 'upvote')" class="p-1 hover:bg-gray-100 dark:hover:bg-gray-700 rounded transition-colors duration-200">
                                    <svg class="w-4 h-4 text-gray-600 dark:text-gray-400 hover:text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                    </svg>
                                </button>
                                <span id="upvotes-${comment.id}" class="font-semibold text-gray-700 dark:text-gray-300 min-w-4 text-center">0</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <button onclick="voteComment(${comment.id}, 'downvote')" class="p-1 hover:bg-gray-100 dark:hover:bg-gray-700 rounded transition-colors duration-200">
                                    <svg class="w-4 h-4 text-gray-600 dark:text-gray-400 hover:text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <span id="downvotes-${comment.id}" class="font-semibold text-gray-700 dark:text-gray-300 min-w-4 text-center">0</span>
                            </div>
                        </div>
                        <button class="text-gray-700 dark:text-gray-300 font-normal hover:text-blue-600 transition-colors duration-200">
                            Reply
                        </button>
                        <button class="text-gray-700 dark:text-gray-300 font-normal hover:text-red-600 transition-colors duration-200">
                            Report
                        </button>
                    </div>
                </div>
            </div>
        `;
        return commentDiv;
    }

    // Function to update comment count
    function updateCommentCount(increment = 0) {
        const commentHeader = document.querySelector('h3.text-2xl.font-bold');
        if (commentHeader) {
            const currentText = commentHeader.textContent;
            const currentCount = parseInt(currentText.match(/\d+/)) || 0;
            const newCount = currentCount + increment;
            commentHeader.textContent = `Comments (${newCount})`;
        }
    }

    // Function to show alerts
    function showAlert(message, type) {
        const alertDiv = document.createElement('div');
        alertDiv.className = `fixed top-4 right-4 p-4 rounded-lg z-50 transform transition-all duration-300 ${
            type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
        }`;
        alertDiv.textContent = message;
        document.body.appendChild(alertDiv);

        setTimeout(() => {
            alertDiv.style.opacity = '0';
            alertDiv.style.transform = 'translateX(100%)';
            setTimeout(() => {
                alertDiv.remove();
            }, 300);
        }, 3000);
    }
});

// Global function for voting
async function voteComment(commentId, type) {
    try {
        const response = await fetch(`/comments/${commentId}/vote`, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ type })
        });

        const result = await response.json();

        if (result.success) {
            // Update vote counts in UI
            const upvoteElement = document.getElementById(`upvotes-${commentId}`);
            const downvoteElement = document.getElementById(`downvotes-${commentId}`);
            
            if (upvoteElement) upvoteElement.textContent = result.upvotes;
            if (downvoteElement) downvoteElement.textContent = result.downvotes;
        }
    } catch (error) {
        console.error('Error voting:', error);
        showAlert('Error voting. Please try again.', 'error');
    }
}
</script>
@endif