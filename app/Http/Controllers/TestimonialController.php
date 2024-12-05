<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the testimonials.
     */
    public function index()
    {
        $testimonials = Testimonial::with('user')->get();
        return response()->json($testimonials);
    }

    /**
     * Store a newly created testimonial in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'url' => 'required|url',
            'description' => 'required|string|max:500',
        ]);

        $testimonial = Testimonial::create($validatedData);

        return response()->json(['message' => 'Testimonial created successfully.', 'data' => $testimonial], 201);
    }

    /**
     * Display the specified testimonial.
     */
    public function show($id)
    {
        $testimonial = Testimonial::with('user')->find($id);

        if (!$testimonial) {
            return response()->json(['message' => 'Testimonial not found.'], 404);
        }

        return response()->json($testimonial);
    }

    /**
     * Update the specified testimonial in storage.
     */
    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);

        if (!$testimonial) {
            return response()->json(['message' => 'Testimonial not found.'], 404);
        }

        $validatedData = $request->validate([
            'url' => 'nullable|url',
            'description' => 'nullable|string|max:500',
        ]);

        $testimonial->update($validatedData);

        return response()->json(['message' => 'Testimonial updated successfully.', 'data' => $testimonial]);
    }

    /**
     * Remove the specified testimonial from storage.
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);

        if (!$testimonial) {
            return response()->json(['message' => 'Testimonial not found.'], 404);
        }

        $testimonial->delete();

        return response()->json(['message' => 'Testimonial deleted successfully.']);
    }
}

