<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/policies', function () {
    return view('static/policies');
});

Route::get('/qrcodes', function () {
    return view('static/QRcode');
});

Route::get('/checkout', [App\Http\Controllers\HomeController::class, "checkout"])->name('checkout');

Route::get('/profile', [App\Http\Controllers\HomeController::class, "profile"])->name('profile');

Route::get('/store', [App\Http\Controllers\HomeController::class, "store"])->name('store');

Route::get('/productdetail/{id}', [App\Http\Controllers\HomeController::class, "productDetail"])->name('productDetail');

Route::post('/productdetail/submit', [App\Http\Controllers\HomeController::class, "addReview"])->name('addReview');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/createproduct', [App\Http\Controllers\AdminController::class, "createProduct"])->name('createProduct');

Route::get('/createcategory', [App\Http\Controllers\AdminController::class, "createProductCategory"])->name('createProductCategory');

Route::get('/editproduct/{id}', [App\Http\Controllers\AdminController::class, "editProduct"])->name('editProduct');

Route::get('/editcategory/{id}', [App\Http\Controllers\AdminController::class, "editCategory"])->name('editCategory');

Route::get('/categorydetail/{id}', [App\Http\Controllers\AdminController::class, "categoryDetail"])->name('categoryDetail');

Route::get('/deleteproduct/{id}', [App\Http\Controllers\AdminController::class, "deleteProduct"])->name('deleteProduct');

Route::get('/deletecategory/{id}', [App\Http\Controllers\AdminController::class, "deleteCategory"])->name('deleteCategory');

Route::post('/editproduct/save/{id}', [App\Http\Controllers\AdminController::class, "saveEditedProduct"])->name('saveEditedProduct');

Route::post('/editcategory/save/{id}', [App\Http\Controllers\AdminController::class, "saveEditedCategory"])->name('saveEditedCategory');

Route::get('/products', [App\Http\Controllers\AdminController::class, "products"])->name('products');

Route::get('/category', [App\Http\Controllers\AdminController::class, "category"])->name('category');

Route::get('/admin', [App\Http\Controllers\AdminController::class, "admin"])->name('admin');

Route::get('/dashboard', [App\Http\Controllers\AdminController::class, "admin"])->name('admin');

Route::post('/createproduct/save', [App\Http\Controllers\AdminController::class, "addProduct"])->name('save');

Route::post('/createcategory/save', [App\Http\Controllers\AdminController::class, "addCategory"])->name('addCategory');

});
Auth::routes();
