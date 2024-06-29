<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all(); // Ambil semua data review dari model Review
        return view('welcome', compact('reviews')); // Kirimkan variabel $reviews ke view 'welcome'
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'star_rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
        ]);

        Review::create($validatedData);

        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
}

