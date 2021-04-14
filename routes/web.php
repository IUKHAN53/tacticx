<?php

use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('dashboard'));
});
Route::prefix('/')->middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::resource('posts', PostController::class);
    Route::get('/user/profile', [UserProfileController::class, 'show'])
        ->name('profile.show');
});
