<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\DeliveryPointController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RobotController;
use App\Models\Order;
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

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


Route::middleware('auth')->group(function () {
    Route::get('profile', function () {
        return view('user.profile');
    })->name('profile');
    Route::resource('robot', RobotController::class);
    Route::resource('product', ProductController::class);
    Route::resource('delivery', DeliveryPointController::class);
    Route::resource('order', OrderController::class);
});
