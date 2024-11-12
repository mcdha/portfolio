<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GetInTouch;
use App\Mail\GetInTouchResponse;
use Illuminate\Support\Facades\Mail;

class GetInTouchController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'occupation' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email|max:255',
            'message' => [
                'required',
                'string',
                'min:10',
                'max:1000',
                'regex:/^[^<>=;{}]*$/',  // Disallows <, >, =, ;, and {} characters
            ],
            'image' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'is_testimonial' => 'required|in:question,testimonial',
        ]);

        // Sanitize input
        $validatedData['email'] = filter_var($validatedData['email'], FILTER_SANITIZE_EMAIL);
        $validatedData['message'] = strip_tags($validatedData['message']);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('get_in_touch_images', 'public');
        }

        $isTestimonial = $validatedData['is_testimonial'] === 'testimonial';

        $getInTouch = GetInTouch::create([
            'name' => $validatedData['name'],
            'occupation' => $validatedData['occupation'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
            'image' => $imagePath,
            'is_testimonial' => $isTestimonial,
        ]);

        if (!$isTestimonial) {
            Mail::to($validatedData['email'])->send(new GetInTouchResponse($getInTouch));
        }

        $successMessage = $isTestimonial
            ? "Hi, {$validatedData['name']}. Your testimonial has been saved successfully. Thank you!"
            : "Hi, {$validatedData['name']}. Your question has been sent successfully. Thank you!";

        return response()->json(['success' => $successMessage]);
    }
}
