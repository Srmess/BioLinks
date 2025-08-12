<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(
    function () {
        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::post('/login', [LoginController::class, 'login']);

        Route::get('/register', [RegisterController::class, 'index'])->name('register');
        Route::post('/register', [RegisterController::class, 'register']);
    }
);

Route::middleware('auth')->group(
    function () {
        Route::get('/dashboard', DashboardController::class)->name('dashboard');

        Route::get('/logout', LogoutController::class)->name('logout');

        Route::get('/links/create', [LinkController::class, 'create'])->name('links.create');
        Route::post('/links/create', [LinkController::class, 'store']);


        Route::middleware('can:update,link')->group(function () {
            Route::get('/links/{link}/edit', [LinkController::class, 'edit'])->name('links.edit');
            Route::put('/links/{link}/edit', [LinkController::class, 'update']);
            Route::delete('/links/{link}', [LinkController::class, 'destroy'])->name('links.delete');

            Route::patch('/links/{link}/up', [LinkController::class, 'up'])->name('links.up');
            Route::patch('/links/{link}/down', [LinkController::class, 'down'])->name('links.down');
        });

        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
            Route::put('/profile', [ProfileController::class, 'update']);
        });
    }
);
