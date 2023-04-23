<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CreateProjectController;

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/about-us', function () {
        return view('about-us');
    });


    Route::get('/contact', function () {
        return view('contact');
    });

    Route::group(['namespace' => 'App\Http\Controllers\admin\projects'], function () {
        Route::get('/projects/create', 'CreateProjectController@create')->name('projects.create');
        Route::post('/projects', 'CreateProjectController@store')->name('projects.store');
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

    Route::group(['middleware' => ['auth', 'role:admin'], 'prefix' => 'admin'], function () {
        Route::get('/dashboard', function () {
            // Get all projects and pass them to the view
            $projects = \App\Models\Project::all();
            return view('admin.dashboard', ['projects' => $projects]);
        })->name('admin.dashboard');
    
        Route::get('/projects', function () {
            // Get all projects and pass them to the view
            $projects = \App\Models\Project::all();
            return view('admin.projects.index', ['projects' => $projects]);
        })->name('admin.projects.index');
    });
    
  // Admin routes
        Route::group(['middleware' => ['auth', 'role:admin'], 'prefix' => 'admin'], function () {
            Route::get('/dashboard', [App\Http\Controllers\Admin\Projects\EditProjectController::class, 'index'])->name('admin.dashboard');

            // Project routes
            Route::get('/projects', [App\Http\Controllers\Admin\Projects\ProjectController::class, 'index'])->name('projects.index');
            Route::get('/projects/create', [App\Http\Controllers\Admin\Projects\ProjectController::class, 'create'])->name('projects.create');
            Route::post('/projects', [App\Http\Controllers\Admin\Projects\ProjectController::class, 'store'])->name('projects.store');
            Route::get('/projects/{id}/edit', [App\Http\Controllers\Admin\Projects\EditProjectController::class, 'edit'])->name('projects.edit');
            Route::put('/projects/{id}', [App\Http\Controllers\Admin\Projects\EditProjectController::class, 'update'])->name('projects.update');
            Route::delete('/projects/{project}', [App\Http\Controllers\Admin\Projects\DestroyProjectController::class, 'destroy'])->name('projects.destroy');

            Route::post('/projects', [App\Http\Controllers\Admin\Projects\CreateProjectController::class, 'store'])->name('projects.store');
            Route::delete('/projects/{project}', [App\Http\Controllers\Admin\Projects\DestroyProjectController::class, 'destroy'])->name('projects.destroy');

        });

    
    
});


