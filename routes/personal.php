<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Personal\DashboardController;
use App\Http\Controllers\Personal\Auth\MyAccountController;
use App\Http\Controllers\Personal\Auth\ChangePasswordController;
use App\Http\Controllers\Personal\EnquiresController;

/*
|--------------------------------------------------------------------------
| Personal User Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'personal', 'as' => 'personal.'], function () {

    /*
|--------------------------------------------------------------------------
| Dashboard Route
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => ['active']], function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

     /*
    |--------------------------------------------------------------------------
    |Received Receipts Route
    |--------------------------------------------------------------------------
    */

    Route::resource('enquiries', EnquiresController::class);

    Route::get('download-file/{id}', [EnquiresController::class, 'downloadFile'])->name('download.file');

    Route::delete('delete-file/{id}', [EnquiresController::class, 'deleteFile'])->name('delete.file');

});
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

    Route::get('change-password', [ChangePasswordController::class, 'changePasswordForm'])->name('password.form');

    Route::post('change-password', [ChangePasswordController::class, 'changePassword'])->name('change-password');
});
