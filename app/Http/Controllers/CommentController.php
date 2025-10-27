<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required|string|max:1000',
            'guest_name' => 'required_if:user_id,null|string|max:255',
            'guest_email' => 'required_if:user_id,null|email|max:255',
            'commentable_id' => 'required|integer',
            'commentable_type' => 'required|string',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        $comment = Comment::create([
            'user_id' => Auth::id(),
            'guest_name' => Auth::check() ? null : $validated['guest_name'],
            'guest_email' => Auth::check() ? null : $validated['guest_email'],
            'content' => $validated['content'],
            'commentable_id' => $validated['commentable_id'],
            'commentable_type' => $validated['commentable_type'],
            'parent_id' => $validated['parent_id'] ?? null,
        ]);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'comment' => $comment->load('user', 'replies'),
                'message' => 'Comment added successfully!'
            ]);
        }

        return back()->with('success', 'Comment added successfully!');
    }

    public function vote(Request $request, Comment $comment)
    {
        $request->validate([
            'type' => 'required|in:upvote,downvote'
        ]);

        if ($request->type === 'upvote') {
            $comment->increment('upvotes');
        } else {
            $comment->increment('downvotes');
        }

        return response()->json([
            'success' => true,
            'upvotes' => $comment->upvotes,
            'downvotes' => $comment->downvotes
        ]);
    }

    public function destroy(Comment $comment)
    {
        // Add authorization check here if needed
        $comment->delete();

        return response()->json(['success' => true]);
    }
}