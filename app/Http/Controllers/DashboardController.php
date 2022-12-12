<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $listings = Listing::all();
        $rents = Listing::where('status', '=', 'rent');
        $sales = Listing::where('status', '=', 'sale');
        return view('admin.dashboard', compact('listings', 'rents', 'sales'));
    }

    public function invoice()
    {
        return view('d_pages.invoice');
    }

    public function inbox()
    {
        return view('d_pages.inbox');
    }

    public function read()
    {
        return view('d_pages.inbox-read');
    }

    public function profile()
    {
        return view('d_pages.profile');
    }

 
}
