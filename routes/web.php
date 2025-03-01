<?php

use Illuminate\Support\Facades\Route;
use JordenPowleyWebDev\LaravelAdminSettings\Http\Controllers\SettingController;

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

Route::middleware(['logged_in'])->group(function () {
    Route::resource('setting', SettingController::class);
});
