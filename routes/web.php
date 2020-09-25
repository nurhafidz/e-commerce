<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Publik\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail', [HomeController::class, 'show']);
Route::get('/keranjang', function () {
    return view('publik.orderlist');
});
Route::get('/checkout', function () {
    return view('publik.checkout');
});
Route::get('/shop', function () {
    return view('publik.shop');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
