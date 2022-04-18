<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ServiceController;
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
    Route::get('/user', [UserController::class, 'index'])->name('user.index');

    //Device
    Route::get('/device', [DeviceController::class, 'index'])->name('device.index');
    Route::get('/device/create', [DeviceController::class, 'create'])->name('device.create');
    Route::post('/device/create', [DeviceController::class, 'store']);
    Route::get('/device/edit/{id}', [DeviceController::class, 'edit'])->name('device.update');
    Route::post('/device/edit/{id}', [DeviceController::class, 'update']);
    Route::get('/device/detail/{id}', [DeviceController::class, 'show'])->name('device.detail');
    Route::get('/device/delete/{id}', [DeviceController::class, 'destroy'])->name('device.destroy');

    //Service
    Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
    Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/service/create', [ServiceController::class, 'store']);
    Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('service.update');
    Route::post('/service/edit/{id}', [ServiceController::class, 'update']);
    Route::get('/service/detail/{id}', [ServiceController::class, 'show'])->name('service.detail');
    Route::get('/service/delete/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
});
