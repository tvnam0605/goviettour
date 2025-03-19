<?php

use App\Http\Controllers\admin\AdminManagementController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LoginAdminController;
use App\Http\Controllers\admin\ToursManagementController;
use App\Http\Controllers\admin\UserManagementController;
use App\Http\Controllers\clients\AboutController;
use App\Http\Controllers\clients\BlogController;
use App\Http\Controllers\clients\BlogDetailController;
use App\Http\Controllers\clients\BookingController;
use App\Http\Controllers\clients\ContactController;
use App\Http\Controllers\clients\DestinationController;
use App\Http\Controllers\clients\UserProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\clients\LoginController;
use App\Http\Controllers\clients\LoginGoogleController;
use App\Http\Controllers\clients\SearchController;
use App\Http\Controllers\clients\TestimonialController;
use App\Http\Controllers\clients\TourDetailController;
use App\Http\Controllers\clients\ToursController;
use App\Http\Controllers\clients\TravelGuidesController;
use App\Http\Controllers\LoginGoogleController as ControllersLoginGoogleController;

// Route::get('/', function () {
//     return view('home');
// });
//Route::get(uri:'/', action:[HomeController::class,'index'])->name(name:'home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name(('about'));
Route::get('/tours', [ToursController::class, 'index'])->name(('tours'));
Route::get('/travel-guides', [TravelGuidesController::class, 'index'])->name(('team'));
Route::get('/destination', [DestinationController::class, 'index'])->name('destination');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/tour-detail/{id} ', [TourDetailController::class, 'index'])->name('tour-detail');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog-details', [BlogDetailController::class, 'index'])->name('blog-details');
Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('user-login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/activate-account/{token}', [LoginController::class, 'activateAccount'])->name('activate.account');


//login with google
Route::get('auth/google', [LoginGoogleController::class, 'redirectToGoogle'])->name('login-google');
Route::get('auth/google/callback', [LoginGoogleController::class, 'handleGoogleCallback']);

//Handle GEt tours, filter Tours
Route::get('/tours', [ToursController::class, 'index'])->name('tours');
Route::get('/filter-tours', [ToursController::class, 'filterTours'])->name('filter-tours');

Route::fallback(function () {
    return view('clients.errors.404');
});

//thongtincanhan
Route::get('/user-profile', [UserProfileController::class, 'index'])->name('user-profile');
Route::post('/user-profile', [UserProfileController::class, 'update'])->name('update-user-profile');
Route::post('/change-password-profile', [UserProfileController::class, 'changePassword'])->name('change-password');
Route::post('/change-avatar-profile', [UserProfileController::class, 'changeAvatar'])->name('change-avatar');







//ADMIN
//route without middleware
Route::prefix('admin')->group(function () {
    Route::get('/login', [LoginAdminController::class, 'index'])->name('admin.login');
    Route::post('/login-account', [LoginAdminController::class, 'loginAdmin'])->name('admin.login-account');
    Route::get('/logout', [LoginAdminController::class, 'logout'])->name('admin.logout');
});
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    //Handler management user
    Route::get('/users', [UserManagementController::class, 'index'])->name('admin.users');
    Route::post('/active-user', [UserManagementController::class, 'activeUser'])->name('admin.active-user');
    Route::post('/status-user', [UserManagementController::class, 'changeStatus'])->name('admin.status-user');

    //Management admin
    Route::get('/admin', [AdminManagementController::class, 'index'])->name('admin.admin');
    Route::post('/update-admin', [AdminManagementController::class, 'updateAdmin'])->name('admin.update-admin');
    Route::post('/update-avatar', [AdminManagementController::class, 'updateAvatar'])->name('admin.update-avatar');

    //Management Tours
    Route::get('/tours', [ToursManagementController::class, 'index'])->name('admin.tours');
    Route::get('/page-add-tours', [ToursManagementController::class, 'pageAddTours'])->name('admin.page-add-tours');
    Route::post('/add-tours', [ToursManagementController::class, 'addTours'])->name('admin.add-tours');
    Route::post('/add-images-tours', [ToursManagementController::class, 'addImagesTours'])->name('admin.add-images-tours');
    Route::post('/add-timeline', [ToursManagementController::class, 'addTimeline'])->name('admin.add-timeline');

    Route::post('/delete-tour', [ToursManagementController::class, 'deleteTour'])->name('admin.delete-tour');

    Route::get('/tour-edit', [ToursManagementController::class, 'getTourEdit'])->name('admin.tour-edit');
    Route::post('/edit-tour', [ToursManagementController::class, 'updateTour'])->name('admin.edit-tour');
    Route::post('/add-temp-images', [ToursManagementController::class, 'uploadTempImagesTours'])->name('admin.add-temp-images');

});

//Hanlde checkout 
Route::post('/booking/{id?}',[BookingController::class, 'index'])->name('booking');
Route::post('/submit-booking}',[BookingController::class, 'createBooking'])->name('create-booking');
