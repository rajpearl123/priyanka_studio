<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Web\HomeController;



Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home');
    Route::get('/about-us', 'about_us')->name('about_us');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog-detail', 'blogDetails')->name('blogDetails');

    // Route::get('/blogs/category/{category?}', 'blog')->name('blogs');
    // Route::get('/blogdetail/{slug}', 'blogdetail')->name('blogdetail');

    Route::get('/videos', 'video')->name('videos');
    Route::get('/services-wedding', 'servicesWedding')->name('servicesWedding');
    Route::get('/service/{slug}', 'services')->name('services');
    Route::get('/albums/{slug}', 'services')->name('albums.show');
    Route::get('/package', 'package')->name('package.index');
    Route::post('/custom-packages', 'custom_package_store')->name('package.custom-packages');
    Route::get('/package-video', 'videoPackage')->name('package.videoPackage');
    Route::get('/package-offer', 'offerPackage')->name('package.offerPackage');
    Route::post('/book-appointment', 'storeAppointment')->name('appointment.store');
    Route::get('/portfolio-new', 'portfolio')->name('portfolio_new');
    Route::get('/terms-conditions', 'termsConditions')->name('termsConditions');
    Route::get('/privacy-policy', 'privacyPolicy')->name('privacyPolicy');
    Route::get('/refund-policy', 'refundPolicy')->name('refund-policy');
    Route::get('/contact-us', 'contactUs')->name('contactUs');
    Route::post('/contact-us', 'contactUsStore')->name('contactUs-store');
    Route::post('/subscribe', 'subscribeStore')->name('subscribe');



});
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/login', function () {
//     return view('admin.auth.login');
// })->name('login');

// Route::post('/admin/login', [LoginController::class, 'submit'])->name('admin.login.submit');

// Route::prefix('admin')->group(function () {
//     Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

//     Route::middleware('auth:sanctum')->group(function () {
//         Route::post('/logout', [AdminAuthController::class, 'logout']);
//         // More admin routes here
//     });
// });

// Route::get('/admin/dashboard', function () {
//     return view("dashboard");
// })->name('dashboard');





// require __DIR__.'/admin.php';