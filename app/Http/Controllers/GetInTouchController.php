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
            'name' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'is_testimonial' => 'required|in:question,testimonial',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('get_in_touch_images', 'public');
        }

        $isTestimonial = $request->input('is_testimonial') === 'testimonial';
    
        $getInTouch = GetInTouch::create([
            'name' => $validatedData['name'],
            'occupation' => $validatedData['occupation'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
            'image' => $imagePath,
            'is_testimonial' => $isTestimonial,
        ]);

        if (!$isTestimonial) {
            Mail::to($validatedData['email'])->send(new \App\Mail\GetInTouchResponse($getInTouch));
        }

        if ($isTestimonial) {
            $successMessage = "Hi, {$validatedData['name']}. Your testimonial has been saved successfully. Thank you!";
        } else {
            $successMessage = "Hi, {$validatedData['name']}. Your question has been sent successfully. Thank you!";
        }
        
        // return back()->with('success', $successMessage);
        return response()->json(['success' => $successMessage]);
    }

}
