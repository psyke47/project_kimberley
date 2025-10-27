<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'guest_name',
        'guest_email',
        'content',
        'commentable_id',
        'commentable_type',
        'parent_id',
        'upvotes',
        'downvotes',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    public function replies(): HasMany
    {
        return $this->hasMany(Comment::class, 'parent_id')->orderBy('created_at', 'asc');
    }

    public function getUserName(): string
    {
        return $this->user ? $this->user->name : $this->guest_name;
    }

    public function getUserEmail(): string
    {
        return $this->user ? $this->user->email : $this->guest_email;
    }

    public function getTimeAgo(): string
    {
        return $this->created_at->diffForHumans();
    }
}