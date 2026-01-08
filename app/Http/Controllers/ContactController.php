<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactInfo;
use App\Notifications\ContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function index()
    {
        $contactInfo = ContactInfo::first();
        return view('contact.index', compact('contactInfo'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'in:project,partnership,career,other'],
            'message' => ['required', 'string', 'min:10'],
        ]);

        $contact = Contact::create($validated);

        // Send notification to admin email (configured in .env)
        $adminEmail = config('mail.from.address', env('MAIL_FROM_ADDRESS', 'info@sparextech.com'));
        
        try {
            Notification::route('mail', $adminEmail)
                ->notify(new ContactNotification($contact));
        } catch (\Exception $e) {
            // Log error but don't fail the request
            \Log::error('Failed to send contact notification: ' . $e->getMessage());
        }

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'message' => 'Thank you for your message! We will get back to you soon.',
                'success' => true,
            ]);
        }

        return redirect()->route('contact')
            ->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
