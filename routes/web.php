<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/commerce', function () {
    return view('commerce.index');
});
Route::get('/cart', function () {
    return view('commerce.cart');
});
Route::get('/checkout', function () {
    return view('commerce.checkout');
});
Route::get('/product', function () {
    return view('commerce.product_layout');
});
Route::get('/wishlist', function () {
    return view('commerce.wishlist');
});
Route::get('/register', function () {
    return view('commerce.register');
});
Route::get('/login', function () {
    return view('commerce.login');
});
Route::get('/shop', function () {
    return view('commerce.shop');
});

Route::get('/form', [StudentController::class, 'index'])->name('index');
Route::get('/form/create',[StudentController::class, 'create'])->name('create');
Route::post('/form/create',[StudentController::class, 'store'])->name('store');
Route::get('/form/{id}/edit',[StudentController::class, 'edit'])->name('edit');
Route::put('/form/{id}',[StudentController::class, 'update'])->name('update');
Route::get('/form/{id}/show',[StudentController::class, 'show'])->name('show');
Route::delete('/form/{id}',[StudentController::class, 'destroy'])->name('destroy');

// Route::get('/student',[StudentController::class, 'index'])->name('student.index');
// Route::get('/student/create',[StudentController::class, 'create'])->name('student.create');
// Route::post('/student/create',[StudentController::class, 'store'])->name('student.store');
// Route::get('/student/{id}/edit',[StudentController::class, 'edit'])->name('student.edit');
// Route::put('/student/{id}',[StudentController::class, 'update'])->name('student.update');
// Route::delete('/student/{id}',[StudentController::class, 'destroy'])->name('student.destroy');
