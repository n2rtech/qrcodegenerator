<?php

use App\Http\Controllers\Admin\Auth\MyAccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\Auth\ChangePasswordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PersonalUserController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {


/*
|--------------------------------------------------------------------------
| Authentication Routes | LOGIN | REGISTER
|--------------------------------------------------------------------------
*/

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.submit');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register.submit');

/*
|--------------------------------------------------------------------------
| Dashboard Route
|--------------------------------------------------------------------------
*/

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Personal Users Route
|--------------------------------------------------------------------------
*/
Route::resource('personal-users', PersonalUserController::class);

Route::get('verified-users', [PersonalUserController::class, 'verified'])->name('verified-users');

Route::get('unverified-users', [PersonalUserController::class, 'unverified'])->name('unverified-users');

Route::post('verify-user', [PersonalUserController::class, 'verifyUser'])->name('verify-user');






/*
|--------------------------------------------------------------------------
| Settings > My Account Route
|--------------------------------------------------------------------------
*/
Route::resource('my-account', MyAccountController::class);

/*
|--------------------------------------------------------------------------
| Settings > Change Password Route
|--------------------------------------------------------------------------
*/
Route::get('change-password', [ChangePasswordController::class,'changePasswordForm'])->name('password.form');

Route::post('change-password', [ChangePasswordController::class,'changePassword'])->name('change-password');

});
