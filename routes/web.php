<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/listing-details/{id}', [HomeController::class, 'details'])->name('listing-details');
Route::get('/404-error-page', [HomeController::class, 'error'])->name('error-page');
Route::get('/about-us', [HomeController::class, 'about'])->name('about-us');
Route::get('/agents', [HomeController::class, 'agents'])->name('agents');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact-us');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/how-it-works', [HomeController::class, 'how'])->name('how-it-works');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/services', [HomeController::class, 'service'])->name('service');
Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonial');

                    // VIEW HOMEPAGE HOUSES
Route::get('/listings', [ListingController::class, 'listings'])->name('listings');
                    // VIEW DASHBOARD HOUSES ROUTE
Route::get('/view-listings', [ListingController::class, 'index'])->name('d_houses');
                    // ADD HOUSES ROUTE
Route::get('/add-listings', [ListingController::class, 'add'])->name('add_houses');
                    // STORE LISTINGS ROUTE
Route::post('/store-listing', [ListingController::class, 'store'])->name('list-house');



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/invoice', [DashboardController::class, 'invoice'])->name('invoice');
    Route::get('/inbox', [DashboardController::class, 'inbox'])->name('inbox');
    Route::get('/inbox-read', [DashboardController::class, 'read'])->name('read_message');
    Route::get('/profile-page', [DashboardController::class, 'profile'])->name('profile_page');

    Route::get('/customers', [HomeController::class, 'customer'])->name('customers');

    Route::get('/reviews', [ReviewController::class, 'review'])->name('reviews');
    Route::post('/add-reviews', [ReviewController::class, 'store'])->name('add-review');


    Route::get('/edit-profile', [ProfileController::class, 'profile_edit'])->name('edit_profile');
    Route::post('/save-image', [ProfileController::class, 'image_update'])->name('image_update');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/edit-listing/{listing}', [ListingController::class, 'edit'])->name('edit-listing');
    Route::post('/update-listing/{listing}', [ListingController::class, 'update'])->name('update-listing');
});

require __DIR__.'/auth.php';
