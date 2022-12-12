<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $listings = Listing::orderby('id', 'asc')->take(6)->get();
        $residentials = Listing::where('type', '=','residential')->latest()->get();
        $commercials = Listing::where('type', '=','commercial')->latest()->get();
        return view('welcome', compact(['listings', 'residentials', 'commercials']));
    }

    public function customer()
    {
        $users = User::where('role', '=', 'user')->orderby('id', 'asc')->get();
        return view('d_pages.customer', compact('users'));
    }

    public function review()
    {
        return view('d_pages.review');
    }

    public function details($id)
    {
        $listing = Listing::find($id);
        $listings = $listing->listings;

        // $user = User::find(Auth::user()->id);
        // $users = $user->users;
        return view('pages.listing-details', compact('listing', 'listings'));
    }

    public function error()
    {
        return view('pages.404-page');
    }
    public function about()
    {
        return view('pages.about-us');
    }

    public function agents()
    {
        return view('pages.agents');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function contact()
    {
        return view('pages.contact-us');
    }

    public function faq()
    {
        return view('pages.faq');
    }
    public function how()
    {
        return view('pages.how-it-works');
    }

    public function privacy()
    {
        return view('pages.privacy');
    }

    public function service()
    {
        return view('pages.service');
    }

    public function testimonials()
    {
        return view('pages.testimonials');
    }
}
