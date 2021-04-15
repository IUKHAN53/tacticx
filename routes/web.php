<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Posts\ShowPost;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;
use App\Http\Livewire\Posts\CreatePost;

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
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/user/profile', [UserProfileController::class, 'show'])->name('profile.show');
    Route::prefix('/post')->group(function (){
        Route::get('/create', CreatePost::class)->name('create-post');
        Route::get('/{post_id}', ShowPost::class)->name('show-post');
    });
});
