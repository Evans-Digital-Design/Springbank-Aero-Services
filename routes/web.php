<?php

use App\Mail\ConfirmationMailE;
use App\Http\Livewire\ShowBooking;
use App\Http\Livewire\CreateBooking;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CartProductController;
use App\Http\Controllers\ProductShowController;

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

Route::get('/products', ProductController::class)->name('products');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route:: get('/bookings/create', CreateBooking::class);
Route:: get('/bookings/list', \App\Http\Livewire\BookingList::class);
Route:: get('/bookings/{appointment:uuid}', ShowBooking::class)->name('bookings.show');

Route::get('products/{product:title}', [ProductShowController::class, 'show'])->name('products.show');

Route::post('/cart/products/', [CartProductController::class, 'store'])->name('cart.products.store');
Route::delete('/cart/products/{product:title}', [CartProductController::class, 'destroy'])->name('cart.products.destroy');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
// Route::get('/index2', [CartController::class, 'index2'])->name('cart.index');


require __DIR__.'/auth.php';

