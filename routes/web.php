<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CompanyAboutController;
use App\Http\Controllers\CompanyKeypointController;
use App\Http\Controllers\CompanyStatisticController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectClientController;
use App\Http\Controllers\TestimonialController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class,'index'])->name('front.index') ;
Route::get('/team', [FrontController::class,'team'])->name('front.team') ;
Route::get('/about', [FrontController::class,'about'])->name('front.about') ;
Route::get('/contact', [FrontController::class,'contact'])->name('front.contact') ;
Route::get('/service', [FrontController::class,'service'])->name('front.service') ;
Route::get('/project', [FrontController::class,'portofolio'])->name('front.portofolio') ;
    
    

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        
        Route::middleware('can:manage statistics')->group(function () {
            Route::resource('statistics', CompanyStatisticController::class);
        });
      

        Route::middleware('can:manage products')->group(function () {
            Route::resource('products', ProductController::class);
        });

        Route::middleware('can:manage testimonials')->group(function () {
            Route::resource('testimonials', TestimonialController::class);
        });

        Route::middleware('can:manage clients')->group(function () {
            Route::resource('clients', ProjectClientController::class);
        });

        Route::middleware('can:manage teams')->group(function () {
            Route::resource('teams', OurTeamController::class);
        });

        Route::middleware('can:manage abouts')->group(function () {
            Route::resource('abouts', CompanyAboutController::class);
        });

        Route::middleware('can:manage contacts')->group(function () {
            Route::resource('contacts', ContactController::class);
        });

        Route::middleware('can:manage hero sections')->group(function () {
            Route::resource('hero_sections', HeroSectionController::class);
        });

        Route::middleware('can:manage key points')->group(function () {
            Route::resource('key points', CompanyKeypointController::class);
        });
        
    });
});

require __DIR__.'/auth.php';
