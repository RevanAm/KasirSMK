<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact-us');
    }

    public function submit(Request $request)
    {
        // Simulating email sending process for demo purposes
        // Instead of sending an actual email, we'll log the email content
        $emailContent = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message')
        ];
        ContactUs::create($request->all());
        // Log email content
        Log::info('Email content:', $emailContent);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Your message has been submitted. We will get back to you soon!');
    }
}