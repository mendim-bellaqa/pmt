<?php

use Illuminate\Support\Facades\Route;

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/about-us', function () {
        return view('about-us');
    });


    Route::get('/contact', function () {
        return view('contact');
    });

    Route::post('/contact', function () {
        // Handle the contact form submission
    })->name('contact.submit');


    Auth::routes();

    Route::group(['middleware' => ['web']], function () {

    // Authentication routes
    Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
    Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

    // Registration routes
    Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
    // Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);

    // Admin routes
        Route::group(['middleware' => ['auth', 'role:admin'], 'prefix' => 'admin'], function () {
            Route::get('/dashboard', function () {
                return view('admin.dashboard');
            })->name('admin.dashboard');
        });

        // User routes
        Route::group(['middleware' => ['auth', 'role:user']], function () {
            Route::get('/dashboard', function () {
                return view('.dashboard');
            })->name('user.dashboard');
        });

    
});


