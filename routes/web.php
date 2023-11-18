<?php

use App\Mail\ConfirmationMailE;
use App\Http\Livewire\ShowBooking;
use App\Http\Livewire\CreateBooking;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

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

// Route:: post('admin-products-add', [ProductController::class, 'insert']);







require __DIR__.'/auth.php';

