<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PsswRecoveryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check()) {
        return view('dashboard');
    }
    return view('auth.login');
})->name('login');

Route::get('/newUser', function () {
    return view('auth.register');
});

Route::get('/passwordRecovery', function () {
    return view('auth.password-recovery');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


// Route::get('/dashboard', function () {
//     // Auth::logout();
    
// })->name('dash');

Route::get('/createThread', function () {
    if (!Auth::check()) {
        return view('auth.login');
    }
    return view('create-thread');
});


Route::resource('/user', UserController::class); 

// Route::resource('post', PostController::class); 
Route::post('/post', [PostController::class, 'store'])->name('post.store'); 

Route::post('/custom-login', [UserController::class, 'sesion'])->name('login.sesion'); 

Route::get('/logout', function () {
    Auth::logout();
    return view('auth.login');
});

// Route::get('/', [SessionController::class, 'create'])->name('login.index');


// Route::get('/newUser', [RegisterController::class, 'create'])->name('register.index');

// Route::post('/newUser', [RegisterController::class, 'store'])->name('register.store');

// Route::get('/passwordRecovery', [PsswRecoveryController::class, 'create'])->name('recovery.index');

