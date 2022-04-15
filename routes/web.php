<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

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

//Login
Route::get('/login', [LoginController::class, 'getLogin'])->name('admin.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

//Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout.index');

Route::get('forgot-password', [ForgotPasswordController::class, 'getFormResetPassword'])->name('admin.forgotPassword');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendCodeResetPassword']);

Route::get('reset-password', [ResetPasswordController::class, 'getResetPassword'])->name('admin.resetPassword');
Route::post('reset-password', [ResetPasswordController::class, 'SaveResetPassword']);

Route::group(['middleware' => 'auth'], function () {
    //Dashboard
    Route::get('/', [HomeController::class, 'index'])->name('home.index');

    //User
    Route::get('/user/', [UserController::class, 'index'])->name('user.index');

    //Device
    Route::get('/device/', [DeviceController::class, 'index'])->name('device.index');
});
