<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'services' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        try {
            // Save to database
            ContactMessage::create($validated);
            
            // Send email notification
            Mail::to('sales@greycode.co.za')
                ->send(new ContactFormSubmitted($validated));
            
            // Log success
            Log::info('Contact form submitted successfully', [
                'name' => $validated['name'],
                'email' => $validated['email']
            ]);
            
            // Handle JSON response (for Alpine.js)
            if ($request->wantsJson() || $request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Thank you! Your message has been sent successfully.'
                ]);
            }
            
            // Handle regular form submission
            return redirect()->back()->with('success', 'Thank you! Your message has been sent successfully.');
            
        } catch (\Exception $e) {
            // Log error
            Log::error('Contact form submission failed: ' . $e->getMessage(), [
                'name' => $validated['name'] ?? 'unknown',
                'email' => $validated['email'] ?? 'unknown',
                'error' => $e->getMessage()
            ]);
            
            // Handle JSON response
            if ($request->wantsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Sorry, there was an error sending your message. Please try again or email us directly at sales@greycode.co.za.'
                ], 500);
            }
            
            // Handle regular form submission
            return redirect()->back()
                ->with('error', 'Sorry, there was an error sending your message. Please try again or email us directly at sales@greycode.co.za.')
                ->withInput();
        }
    }
}