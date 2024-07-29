<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserOrderController;


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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/welcome', function () {
//     return view('welcome');
// });
// Route::get('/hello', function () {
//     return view('hello');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/About', [AboutController::class, 'About'])->name('About');
Route::get('/Contact', [ContactController::class, 'Contact'])->name('Contact');
 Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/user', [UserController::class, 'user'])->name('user');
// Route::get('/login', [LoginController::class, 'login'])->name('login');
// Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::get('/Product', [ProductController::class, 'index'])->name('products.index');
Route::get('/Product/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/search', [ProductController::class, 'search'])->name('products.search');
Route::get('/bill', [CartController::class, 'showBill'])->name('bill');
Route::post('/bill', [CartController::class, 'submitBill'])->name('bill.submit');
Route::get('/bill/success', [CartController::class, 'buy'])->name('home');



Auth::routes();
Route::middleware(['Admin'])->name('Admin.')->group(function () {
    Route::get('/Admin', [AdminController::class, 'Admin'])->name('admin.index');
    Route::get('/Admin/products', [ProductController::class, 'indexAd'])->name('products.indexAd');
    Route::get('/Admin/products/a', [ProductController::class, 'sss']);
    Route::post('/Admin/products', [ProductController::class, 'store'])->name('products.store');
    // Route::get('/Admin/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::get('/admin/products/{id}/edit', [AdminController::class, 'edit']);
    Route::put('/admin/products/{id}', [AdminController::class, 'update']);
    Route::delete('/admin/products/{id}', [AdminController::class, 'destroy']);


    Route::put('/Admin/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::get('/Admin/User', [AdminController::class, 'User'])->name('User');
    Route::put('/Admin/User/{id}', [UserController::class, 'updateAD'])->name('users.updateAD');
    Route::delete('/Admin/User/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::delete('/Admin/User/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('Admin/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('Admin/orders/{id}/details', [OrderController::class, 'getOrderDetails'])->name('orders.details');
});
    



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/account', [App\Http\Controllers\UserController::class, 'index'])->name('account');
Route::get('/account/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('account.update');
Route::get('account/', [UserOrderController::class, 'index'])->name('account');
Route::get('history/{id}', [UserOrderController::class, 'show'])->name('history');


Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart/count', [CartController::class, 'getCartCount'])->name('cart.count');
Route::get('/cart/destroy/{id}', [CartController::class, 'destroy'])->name('cart.destroy');