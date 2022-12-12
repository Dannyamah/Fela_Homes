<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function review()
    {
        $reviews = Review::get();

        // $user = User::where('user_id', '=', 'id');

        return view('d_pages.review', compact('reviews'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'review' => 'required'
        ]);

        $request = Review::create([
            'user_id' => $request->user_id,
            'review' => $request->review
        ]);

        return back();
    }
}
