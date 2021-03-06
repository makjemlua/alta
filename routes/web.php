<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\LogUserController;
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

//Not logged in
Route::get('/user', [UserController::class, 'number'])->name('user.number');
Route::post('/user', [UserController::class, 'numberStore']);

Route::group(['middleware' => 'auth'], function () {
    //Dashboard
    Route::group(['middleware' => ['role:Administrator|Quản lý|Kế toán|User']], function () {
        Route::get('/', [HomeController::class, 'index'])->name('home.index');
        Route::get('/home', [HomeController::class, 'index'])->name('home.index');
        Route::get('/home/day', [HomeController::class, 'chartDay'])->name('home.index.day');
        Route::get('/home/month', [HomeController::class, 'chartMonth'])->name('home.index.month');
        Route::get('/home/week', [HomeController::class, 'chartWeek'])->name('home.index.week');
    });

    //User
    Route::group(['middleware' => ['role:Administrator|Quản lý|Kế toán']], function () {
        Route::get('/info', [UserController::class, 'index'])->name('user.index');
        Route::post('/info', [UserController::class, 'uploadAvatar']);
    });

    //Device
    Route::group(['middleware' => ['role:Administrator|Quản lý|Kế toán']], function () {
        Route::get('/device', [DeviceController::class, 'index'])->name('device.index');
        Route::get('/device/create', [DeviceController::class, 'create'])->name('device.create');
        Route::post('/device/create', [DeviceController::class, 'store']);
        Route::get('/device/edit/{id}', [DeviceController::class, 'edit'])->name('device.update');
        Route::post('/device/edit/{id}', [DeviceController::class, 'update']);
        Route::get('/device/detail/{id}', [DeviceController::class, 'show'])->name('device.detail');
        Route::get('/device/{action}/{id}', [DeviceController::class, 'action'])->name('device.action');
    });

    //Service
    Route::group(['middleware' => ['role:Administrator|Quản lý|Kế toán']], function () {
        Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
        Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
        Route::post('/service/create', [ServiceController::class, 'store']);
        Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('service.update');
        Route::post('/service/edit/{id}', [ServiceController::class, 'update']);
        Route::get('/service/detail/{id}', [ServiceController::class, 'show'])->name('service.detail');
        Route::get('/service/{action}/{id}', [ServiceController::class, 'action'])->name('service.action');
    });

    //Number
    Route::group(['middleware' => ['role:Administrator|Quản lý|Kế toán']], function () {
        Route::get('/number', [NumberController::class, 'index'])->name('number.index');
        Route::get('/number/create', [NumberController::class, 'create'])->name('number.create');
        Route::post('/number/create', [NumberController::class, 'store']);
        Route::get('/number/detail/{id}', [NumberController::class, 'show'])->name('number.detail');
        Route::get('/number/{action}/{id}', [NumberController::class, 'action'])->name('number.action');
    });

    //Report
    Route::group(['middleware' => ['role:Administrator|Quản lý|Kế toán']], function () {
        Route::get('/report', [ReportController::class, 'index'])->name('report.index');
        Route::get('report/export/', [ReportController::class, 'export'])->name('report.export');
    });

    //Role
    Route::group(['middleware' => ['role:Administrator']], function () {
        Route::get('/role', [RoleController::class, 'index'])->name('role.index');
        Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
        Route::get('/role/created', [RoleController::class, 'store'])->name('role.created');
        Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('role.update');
        Route::post('/role/edit/{id}', [RoleController::class, 'update']);
    });

    //Account
    Route::group(['middleware' => ['role:Administrator']], function () {
        Route::get('/account', [UserController::class, 'listUser'])->name('account.index');
        Route::get('/account/create', [UserController::class, 'create'])->name('account.create');
        Route::post('/account/create', [UserController::class, 'store']);
        Route::get('/account/edit/{id}', [UserController::class, 'edit'])->name('account.update');
        Route::post('/account/edit/{id}', [UserController::class, 'update']);
    });

    //Log User
    Route::group(['middleware' => ['role:Administrator|Quản lý|Kế toán']], function () {
        Route::get('/log-user', [LogUserController::class, 'index'])->name('log.index');
    });
});
