<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\Home\HomepageController;
use App\Http\Controllers\Admin\Subscribers\SubscriberController;
use App\Http\Controllers\Admin\BusinessSetting\BusinessPagesController;
use App\Http\Controllers\Admin\BusinessSetting\ContactUsSubmission;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BusinessSetting\WebsiteSettingController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\AboutusController;
use App\Http\Controllers\Admin\CommentController ;

use App\Http\Controllers\Admin\PageBannerController;


// Public routes

Route::post('/blogs/{blog}/comments', [CommentController::class, 'store'])->name('comments.store');

Route::prefix('admin')->group(function () {
    Route::get('/login', function () {
        return view('admin.auth.login');
    })->name('admin.login');

    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');


    Route::middleware(['auth.admin'])->group(function () {

        // Route::get('/dashboard', function () {
        //     return view('dashboard');
        // })->name('admin.dashboard');

        Route::get('/dashboard', [AdminAuthController::class, 'dashboard_index'])->name('admin.dashboard');

        Route::middleware(['auth.admin'])->name('admin.')->group(function () {
            Route::get('/page_banners', [PageBannerController::class, 'index'])->name('page_banner.index');
            Route::get('/page_banners/{id}/edit', [PageBannerController::class, 'edit'])->name('page_banner.edit');
            Route::put('/page_banners/{id}', [PageBannerController::class, 'update'])->name('page_banner.update');
            // Blogs routes
            Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
            Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
            Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
            Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
            Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
            Route::delete('/blogs/{id}', [BlogController::class, 'destroy_blog'])->name('blogs.destroy');
            Route::post('/blog/toggle-visibility', [BlogController::class, 'toggleVisibility'])->name('blog.toggleVisibility');

            // Blog categories routes
            Route::get('/blog-categories', [BlogController::class, 'index_category'])->name('blog-categories.index');
            Route::get('/blog-categories/create', [BlogController::class, 'create_category'])->name('blog-categories.create');
            Route::post('/blog-categories', [BlogController::class, 'store_category'])->name('blog-categories.store');
            Route::get('/blog-categories/{blogCategory}/edit', [BlogController::class, 'edit_category'])->name('blog-categories.edit');
            Route::put('/blog-categories/{blogCategory}', [BlogController::class, 'update_category'])->name('blog-categories.update');
            Route::delete('/blog-categories/{blogCategory}', [BlogController::class, 'destroy'])->name('blog-categories.destroy');
        });
        Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

        // Route::controller(HomepageController::class)->group(function () {
        //     Route::get('/homepage', 'index_banner')->name('admin.banners.index');
        //     Route::get('/banners/create', 'create_banner')->name('admin.banners.create');
        //     Route::post('/banners/store', 'store_banner')->name('admin.banners.store');
        //     Route::get('/banners/edit/{banner}', 'edit_banner')->name('admin.banners.edit');
        //     Route::post('/banners/update/{banner}', 'update_banner')->name('admin.banners.update');
        //     Route::delete('/banners/delete/{banner}', 'destroy_banner')->name('admin.banners.destroy');
        // });

        Route::controller(SubscriberController::class)->group(function () {
            Route::get('subscribers', 'subscribers')->name('admin.subscribers');
        });

        Route::get('/comments', [CommentController::class, 'index'])->name('admin.comments.index');
        Route::patch('/comments/{id}/approve', [CommentController::class, 'approve'])->name('admin.comments.approve');
        Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('admin.comments.destroy');

        Route::controller(ContactUsSubmission::class)->group(function () {
            Route::get('contact-list', 'contactList')->name('admin.contact-list');
            Route::delete('/contacts/{id}', 'destroy')->name('admin.contacts.destroy');
            Route::get('contact-info/edit', 'edit')->name('admin.contact-info.edit');
            Route::get('contact-info', 'contactinfoview')->name('admin.contact-info.view');
            Route::put('contact-info/update', 'update')->name('admin.contact-info.update');
            Route::get('replies/{id}', 'replyView')->name('admin.replyView');
            Route::post('reply/{id}', 'reply')->name('admin.reply');
            Route::post('contacts/{id}/reply', 'reply_user')->name('admin.contacts.reply');
        });


        Route::prefix('business-setting')->name('admin.business-setting.')->group(function () {
            Route::controller(BusinessPagesController::class)->group(function () {
                Route::get('about-us', 'aboutUs')->name('about-us');
                Route::post('about-us', 'aboutUsStore')->name('about-us-store');
                Route::get('terms-conditions', 'termsConditions')->name('terms-conditions');
                Route::post('terms-conditions', 'termsConditionsStore')->name('terms-conditions-store');
                Route::get('privacy-policy', 'privacyPolicy')->name('privacy-policy');
                Route::post('privacy-policy', 'privacyPolicyStore')->name('privacy-policy-store');
                Route::get('refund-policy', 'refundPolicy')->name('refund-policy');
                Route::post('refund-policy', 'refundPolicyStore')->name('refund-policy-store');
                Route::get('why-choose-us', 'whyChooseUs')->name('why-choose-us');
                Route::post('why-choose-us', 'whyChooseUsStore')->name('why-choose-us-store');
                Route::post('why-choose-us-img-delete', 'deleteWhyChooseUsImages')->name('why-choose-us-img-delete');
                Route::get('social-links', 'socialLinks')->name('social-links');
                Route::post('social-links', 'socialLinksStore')->name('social-links-store');
                Route::post('social-link/status/{id}', 'statusSocialLink')->name('social-links-status');
                Route::get('social-link/edit/{id}', 'editView')->name('social-links-edit');
                Route::post('social-link/editStore/{id}', 'editSocialLink')->name('social-links-edit-store');
                Route::get('gallary', 'imageGallary')->name('imageGallary');
                Route::post('gallary', 'gallaryStore')->name('imageGallaryStore');
                Route::post('delete-image', 'deleteImage')->name('deleteImage');
            });
        });

        Route::prefix('website-setting')->name('admin.website-setting.')->group(function () {
            Route::controller(WebsiteSettingController::class)->group(function () {
                Route::get('index', 'index')->name('index');
                Route::post('index', 'store')->name('store');
                Route::get('banners', 'banners')->name('banners');
                Route::post('banners', 'bannerStore')->name('bannerStore');
                Route::post('banner-status/{id}', 'bannerStatus')->name('bannerStatus');
                Route::get('banner-delete/{id}', 'bannerDelete')->name('bannerDelete');
            });
        });


        Route::get('/banners', [BannerController::class, 'index'])->name('admin.banners.index');
        Route::get('/banners/create', [BannerController::class, 'create'])->name('admin.banners.create');
        Route::post('/banners/store', [BannerController::class, 'store'])->name('admin.banners.store');
        Route::get('/banners/edit/{banner}', [BannerController::class, 'edit'])->name('admin.banners.edit');
        Route::post('/banners/update/{banner}', [BannerController::class, 'update'])->name('admin.banners.update');
        Route::delete('/banners/delete/{banner}', [BannerController::class, 'destroy'])->name('admin.banners.destroy');



        Route::get('/about-us', [AboutusController::class, 'index'])->name('admin.about.index');
        Route::post('/about-us', [AboutusController::class, 'update'])->name('admin.about.update');
        Route::get('why-choose-us', [AboutusController::class, 'section_index'])->name('admin.why_choose_us.index');
        Route::get('why-choose-us/create', [AboutusController::class, 'section_create'])->name('admin.why_choose_us.create');
        Route::post('why-choose-us', [AboutusController::class, 'section_store'])->name('admin.why_choose_us.store');
        Route::get('why-choose-us/{id}/edit', [AboutusController::class, 'section_edit'])->name('admin.why_choose_us.edit');
        Route::put('why-choose-us/{id}', [AboutusController::class, 'section_update'])->name('admin.why_choose_us.update');
        Route::delete('why-choose-us/{id}', [AboutusController::class, 'section_destroy'])->name('admin.why_choose_us.destroy');

        Route::get('/choose-us', [AboutusController::class, 'choose_us_index'])->name('admin.choose_us.index');
        Route::get('/choose-us/create', [AboutusController::class, 'choose_us_create'])->name('admin.choose_us.create');
        Route::post('/choose-us', [AboutusController::class, 'choose_us_store'])->name('admin.choose_us.store');
        Route::get('/choose-us/{whyChooseUs}/edit', [AboutusController::class, 'choose_us_edit'])->name('admin.choose_us.edit');
        Route::put('/choose-us/{whyChooseUs}', [AboutusController::class, 'choose_us_update'])->name('admin.choose_us.update');
        Route::delete('/choose-us/{whyChooseUs}', [AboutusController::class, 'choose_us_destroy'])->name('admin.choose_us.destroy');
    });
});
