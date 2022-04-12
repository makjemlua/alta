<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;

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
Auth::routes();


Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('admin.login');

Route::get('/forgot-password', [AdminAuthController::class, 'getForgotPassword'])->name('admin.forgotPassword');

Route::get('/reset-password', [AdminAuthController::class, 'getResetPassword'])->name('admin.resetPassword');

//Route::group(['middleware' => 'auth'], function () {

    //Home
Route::get('/', [AdminController::class, 'index'])->name('home');

//});
