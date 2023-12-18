<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\ProductsController;
use App\Http\Controllers\Backend\SalesController;
use Illuminate\Support\Facades\Route;

Route::controller(LoginController::class)->prefix('/adminpanel')->group(function(){

    Route::get('/', 'index')->name('login.index');
    Route::post('/login-check', 'loginCheck')->name('super_admin.login.check');
    Route::post('/logout', 'superAdminLogout')->name('super_admin.logout');

});


Route::group(['prefix' => '/superadmindashboard', 'middleware' =>['super_admin']], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
 
    Route::controller(PostController::class)->group(function(){
        Route::get('/all-post',  'index')->name('post.all');
        Route::get('/posts-create',  'create')->name('post.create.page');
        Route::post('/posts-create',  'store')->name('post.store');
        Route::get('/posts-edit/{id}',  'edit')->name('post.edit');
        Route::post('/posts-update/{id}',  'update')->name('post.update');
        Route::post('/posts-update/{id}',  'update')->name('post.update');
        Route::get('/posts-delete/{id}',  'delete')->name('post.delete');
        Route::get('/search',  'search')->name('post.search');
    });

    Route::controller(ProductsController::class)->group(function(){
        Route::get('/all-products',  'index')->name('products.all');
        Route::get('/products-create',  'create')->name('products.create.page');
        Route::post('/products-create',  'store')->name('products.store');
        Route::get('/products-edit/{id}',  'edit')->name('products.edit');
        Route::post('/products-update/{id}',  'update')->name('products.update');
        Route::post('/products-update/{id}',  'update')->name('products.update');
        Route::get('/products-delete/{id}',  'delete')->name('products.delete');
        Route::get('/search',  'search')->name('products.search');
    });

    Route::controller(SalesController::class)->group(function(){
        Route::get('/all-sales',  'index')->name('sales.all');
        Route::get('/sales-create',  'create')->name('sales.create.page');
        Route::post('/sales-create',  'store')->name('sales.store');
        Route::get('/sales-edit/{id}',  'edit')->name('sales.edit');
        Route::post('/sales-update/{id}',  'update')->name('sales.update');
        
        Route::get('/sales-search',  'salesSearch')->name('sales.search');



        Route::get('/search',  'getProductStock')->name('check.product.stock');
        Route::get('/get-unit-price',  'getUnitPrice')->name('get.unit.price');
    });

}); 





?> 