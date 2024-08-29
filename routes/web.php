<?php

use App\Http\Controllers\AideSocialeController;
use App\Http\Controllers\DonateurController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParticiperController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', [HomeController::class, 'index'])->name('root');

Route::group(['prefix' => 'donators'], function () {
    Route::get('/', [DonateurController::class, 'index']);
    Route::post('/', [DonateurController::class, 'store']);
    Route::get('/create/{numaid}', [DonateurController::class, 'create'])->name('create_donator');
});

Route::group(['prefix' => 'users'], function () {
    Route::resource('/', UserController::class);
});

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::group(['prefix' => 'profile'], function () {
    Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
})->middleware('auth');

Route::post('/assignRoles/{role}/{user}', [RoleController::class, 'assignRoles'])->name('assign_role');

Route::post('/participers', [ParticiperController::class, 'store']);

require __DIR__ . '/auth.php';
