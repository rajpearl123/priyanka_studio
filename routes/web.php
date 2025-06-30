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