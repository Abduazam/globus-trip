<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PackageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

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

Route::get('/', static function () {
    return view('site/index');
});
Route::get('about/', static function () {
    return view('site/about');
});
Route::get('contact/', static function () {
    return view('site/contact');
});
Route::get('booking/', static function () {
    return view('site/booking');
});
Route::get('package/', static function () {
    return view('site/package');
});

Auth::routes();

Route::middleware(['role:admin'])->prefix('dashboard')->group(static function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::resource('category', CategoryController::class);
    Route::resource('package', PackageController::class);
});
