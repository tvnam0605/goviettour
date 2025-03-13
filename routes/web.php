<?php

use App\Http\Controllers\clients\AboutController;
use App\Http\Controllers\clients\BlogController;
use App\Http\Controllers\clients\BlogDetailController;
use App\Http\Controllers\clients\BookingController;
use App\Http\Controllers\clients\ContactController;
use App\Http\Controllers\clients\DestinationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\clients\LoginController;
use App\Http\Controllers\clients\TestimonialController;
use App\Http\Controllers\clients\TourDetailController;
use App\Http\Controllers\clients\ToursController;
use App\Http\Controllers\clients\TravelGuidesController;

// Route::get('/', function () {
//     return view('home');
// });
//Route::get(uri:'/', action:[HomeController::class,'index'])->name(name:'home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about',[AboutController::class, 'index'])->name(('about'));
Route::get('/tours',[ToursController::class, 'index'])->name(('tours'));
Route::get('/travel-guides',[TravelGuidesController::class, 'index'])->name(('team'));
Route::get('/destination', [DestinationController::class, 'index'])->name('destination');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/tour-detail/{id} ', [TourDetailController::class, 'index'])->name('tour-detail');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog-details', [BlogDetailController::class, 'index'])->name('blog-details');
Route::get('/login', [LoginController::class, 'index'])->name('login');

//Handle GEt tours, filter Tours
Route::get('/tours',[ToursController::class, 'index'])->name(('tours'));
Route::get('/filter-tours',[ToursController::class, 'filterTours'])->name(('filter-tours'));

Route::fallback(function () {
    return view('clients.errors.404');
});