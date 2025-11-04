<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
        'email' => 'required|email|max:255|unique:subscriptions,email',
        ]);

        Subscription::create($validated);

        return redirect()->back()->with('success', 'Subscription successful');
    }
}
