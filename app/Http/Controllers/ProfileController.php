<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function profile_edit(User $user)
    {
        return view('d_pages.edit-profile', compact('user'));
    }

    public function image_update(Request $request, User $user)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'image' => 'nullable|mimes:png,jpg,jpeg'
        // ]);

        // Auth::user()->name = "Dainel";
        // Auth::user()->email = "Cool";

        // because image is saved as nullable:
        if ($request->has('image')) {
            $file = $request->file('image'); // gets the file from the input field named image and stores it in the variable $file
            $ext = $file->getClientOriginalExtension(); // gets the image extension (.png, .jpg, .jpeg)
            $filename = \Str::slug(Auth::user()->name) . '_' . time() . '.' . $ext; // sets the file name as a url friendly name
            $file->storePubliclyAs('public/images', $filename); // uploads the image to a folder called public/images

            Auth::user()->image = $filename;
            Auth::user()->save();
        }

        // Auth::user()->save();

        return redirect()->route('profile_page');
    }
}
