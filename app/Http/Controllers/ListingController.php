<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\List_;

class ListingController extends Controller
{
    public function listings()
    {
        $listings = Listing::all();
        return view('pages.listings', compact('listings'));
    }

    public function index()
    {
        $listings = Listing::latest()->get();

        return view('d_pages.view-houses', compact('listings'));
    }

    public function add()
    {
        return view('d_pages.listings');
    }

    public function store(Request $request)
    {
        // for vaidation
    $request->validate([
            'name' => 'required',
            'type' => 'required',
            'status' => 'required',
            'price' => 'required',
            'location' => 'required',
            'rooms' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);

        // to insert into database
        $listing = Listing::create([
            'name' => $request->name,
            'type' => $request->type,
            'status' => $request->status,
            'price' => $request->price,
            'location' => $request->location,
            'rooms' => $request->rooms,
            'image' => $request->image
        ]);

        $file = $request->file('image'); // gets the file from the input field named image and stores it in the variable $file
        $ext = $file->getClientOriginalExtension(); // gets the image extension (.png, .jpg, .jpeg)
        $filename = \Str::slug($request->name).'_'.time() .'.'. $ext; // sets the file name as a url friendly name
        $file->storePubliclyAs('public/images', $filename); // uploads the image to a folder called public/images

        $listing->image = $filename;
        $listing->save();

        return back()->with(['status' => 'Houses Listed']);
    }

    public function edit(Listing $listing)
    {
        return view('d_pages.edit-listing', compact('listing'));
    }

    public function update(Request $request,Listing $listing)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'status' => 'required',
            'price' => 'required',
            'location' => 'required',
            'rooms' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);

        $listing->name = $request->name;
        $listing->type = $request->type;
        $listing->status = $request->status;
        $listing->price = $request->price;
        $listing->location = $request->location;
        $listing->rooms = $request->rooms;
        $listing->image = $request->image;

        $file = $request->file('image'); // gets the file from the input field named image and stores it in the variable $file
        $ext = $file->getClientOriginalExtension(); // gets the image extension (.png, .jpg, .jpeg)
        $filename = \Str::slug($request->name).'_'.time() .'.'. $ext; // sets the file name as a url friendly name
        $file->storePubliclyAs('public/images', $filename); // uploads the image to a folder called public/images

        $listing->image = $filename;

        $listing->save();

        return redirect()->route('d_houses');
    }

    public function destroy(Request $request, Listing $listing)
    {
        
        $listing->delete();
    }
}
