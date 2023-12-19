<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\client;
use App\Http\Controllers\server;
use App\Http\Kernel;

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

/** 
 *  Main page
*/
Route::get('/', [client\c_Home::class, 'index'])->name('index');

/** 
 *  Auth page
*/
Route::prefix('auth')->group(function () {
    Route::get('/signin', [client\c_Auth::class, 'signin'])->middleware('alreadyLoggedIn')->name('signin');
    Route::get('/signup', [client\c_Auth::class, 'signup'])->middleware('alreadyLoggedIn')->name('signup');

    Route::get('/profile', [client\c_Auth::class, 'profile'])->middleware('isLoggedIn')->name('profile');

    Route::post('/login', [client\c_Auth::class, 'login'])->name('login');
    Route::post('/register', [client\c_Auth::class, 'register'])->name('register');
    Route::post('/logout', [client\c_Auth::class, 'logout'])->name('logout');
});

/** 
 *  Category page
*/
Route::prefix('category')->group(function () {
    Route::get('/{id}', [client\c_Category::class, 'show']);
    Route::get('/{id}/pagination', [client\c_Category::class, 'pagination']);
});

/** 
 *  Product page
*/
Route::prefix('product')->group(function () {
    Route::get('/detail/{id}', [client\c_Product::class, 'show']);

    Route::get('/', [client\c_Product::class, 'list']);     //  !view

    Route::post('/detail/{id}', [client\c_Product::class, 'postComment'])->name('productDetail');
});

/** 
 *  Cart page
*/
Route::prefix('cart')->middleware('isLoggedIn')->group(function () {
    Route::get('/', [client\c_Cart::class, 'index'])->name('cart');
    Route::get('/add/{id}', [client\c_Cart::class, 'add'])->name('addToCart');
    Route::get('/delete/{rowId}', [client\c_Cart::class, 'delete'])->name('removeFromCart');
    Route::get('/destroy', [client\c_Cart::class, 'destroy'])->name('deleteCart');
    Route::get('/update/{rowId}/{act}', [client\c_Cart::class, 'update'])->name('updateFromCart');
});

/** 
 *  Check out page
*/
Route::prefix('checkout')->middleware('cartCheck')->group(function () {
    Route::get('/', [client\c_CheckOut::class, 'index'])->name('checkOut');

    Route::post('/', [client\c_CheckOut::class, 'addOrder'])->name('addOrder');
});

/** 
 *  Cart page
*/
Route::prefix('administrator')->middleware('isAdmin')->group(function () {
    Route::get('/', [server\s_Dashboard::class, 'index']);

    Route::prefix('/categories')->group(function () {
        Route::get('/', [server\s_Category::class, 'index']);
        Route::get('/view', [server\s_Category::class, 'view']);

        Route::get('/create', [server\s_Category::class, 'create'])->name('category_create');
        Route::post('/insert', [server\s_Category::class, 'insert'])->name('category_insert');
        Route::get('/edit/{id}', [server\s_Category::class, 'edit'])->name('category_edit');
        Route::post('/update/{id}', [server\s_Category::class, 'update'])->name('category_update');
        Route::get('/delete/{id}', [server\s_Category::class, 'delete']);
    });

    Route::prefix('/orders')->group(function () {
        Route::get('/', [server\s_Order::class, 'index']);
    });
});
