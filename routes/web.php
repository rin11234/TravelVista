<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DestinationsController;
use App\Http\Controllers\Admin\postBlogController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Fe\DestinationNewController;
use App\Http\Controllers\Fe\HomeController;
use App\Http\Controllers\Fe\TourPakageController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\SearchController;
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
Route::get('post_Detail/{id}', [HomeController::class ,'post_Detail'])->name('post_Detail');
Route::get('/search', 'TourController@search')->name('tour.search');
Route::get('login.html', [UserController::class ,'login'])->name('login');
Route::post('postLogin', [UserController::class ,'postLogin'])->name('postLogin');
<<<<<<< HEAD
Route::get('register.html', [UserController::class ,'register'])->name('register');
=======
Route::get('logon', [AdminController::class ,'logon'])->name('logon');
Route::post('postLogon', [AdminController::class ,'postLogon'])->name('postLogon');
Route::get('register', [UserController::class ,'register'])->name('register');
Route::get('logOut',[AdminController::class , 'logOut'])->name('logOut');
>>>>>>> 8eb39afd97d61b10dc654fea27fb4c3e2cac823d
Route::post('postRegister', [UserController::class ,'postRegister'])->name('postRegister');
route::get('search',[SearchController::class ,'search'])->name('search');
route::get('Tour-pakage',[TourPakageController::class ,'tourPakage'])->name('tourPakage');
route::get('destinations-new',[DestinationNewController::class ,'destinationsNew'])->name('destinationsNew');
Route::post('/comments', [CommentController::class, 'store'])->name('comment.store');
Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('forgotPassword');
Route::post('/forgot-password1', [ForgotPasswordController::class, 'submitForgotPasswordForm'])->name('forgotPasswordSubmit');
Route::get('/reset-password2', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('resetPassword');
Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('resetPasswordSubmit');
Route::get('/verification1 ', [ForgotPasswordController::class, 'veriFication1'])->name('veriFicationEmmail1');

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('main', [AdminController::class, 'index'])->name('index');
    Route::resource('category', CategoryController::class);
    Route::resource('/user',UserController::class);
    Route::resource('destinations', DestinationsController::class);
    Route::resource('tours', TourController::class);
    Route::resource('booking',BookingController::class);
    Route::resource('post',PostController::class);
});


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
