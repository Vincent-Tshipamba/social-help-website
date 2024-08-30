<?php

use App\Http\Controllers\AideSocialeController;
use App\Http\Controllers\DonateurController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParticiperController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

// Root Route
Route::get('/', [HomeController::class, 'index'])->name('root');

// Donators Routes
Route::group(['prefix' => 'donators'], function () {
    // Donators Index
    Route::get('/', [DonateurController::class, 'index'])->middleware(['auth', 'verified'])->name('donators.index');
    // Create Donator
    Route::post('/', [DonateurController::class, 'store']);
    // Create Donator with numaid
    Route::get('/create/{numaid}', [DonateurController::class, 'create'])->name('create_donator');
});

// Participers Routes
Route::group(['prefix' => 'participers'], function () {
    // Store Participer
    Route::post('/', [ParticiperController::class, 'store']);
});

// AideSociales Routes
Route::group(['prefix' => 'socialhelps'], function () {
    // SocialHelp index
    Route::get('/', [AideSocialeController::class, 'index'])->name('socialhelps')->middleware(['auth', 'verified']);
    Route::get('/{numaid}', [AideSocialeController::class, 'show'])->middleware(['auth', 'verified'])->name('socialhelps.show');
});

// Users Routes
Route::group(['prefix' => 'users'], function () {
    // Users Index
    Route::get('/', [UserController::class, 'index'])->name('users');
    // Show User
    Route::get('/{id}', [UserController::class, 'show'])->name('users.show');
    // Get Users
    Route::get('/getusers', [UserController::class, 'getUsers'])->name('getusers');
    // Store User
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    // Update User
    Route::post('/{id}', [UserController::class, 'update'])->name('users.update');
})->middleware(['auth', 'verified']);

// Authentication Routes
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/admin', [HomeController::class,  'admin'])->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes
Route::group(['prefix' => 'profile'], function () {
    // Edit Profile
    Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
    // Update Profile
    Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
    // Delete Profile
    Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
})->middleware(['auth', 'verified']);

// Assign Roles Route
Route::post('/assignRoles/{role}/{user}', [RoleController::class, 'assignRoles'])->name('assign_role');

require __DIR__ . '/auth.php';
