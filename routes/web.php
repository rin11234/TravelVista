<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DestinationsController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Fe\HomeController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class ,'index'])->name('home');
Route::get('detail/{id}', [HomeController::class ,'detail'])->name('detail');
Route::get('login', [UserController::class ,'login'])->name('login');
Route::post('postLogin', [UserController::class ,'postLogin'])->name('postLogin');
Route::get('register', [UserController::class ,'register'])->name('register');
Route::post('postRegister', [UserController::class ,'postRegister'])->name('postRegister');
route::get('booking',[HomeController::class,'booking'])->name('booking');
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('main', [AdminController::class, 'index'])->name('index');
    Route::resource('category', CategoryController::class);
    Route::resource('destinations', DestinationsController::class);
    Route::resource('tours', TourController::class);
});

