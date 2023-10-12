<?php

use App\Http\Controllers\CategoryController;
use App\Models\Banner;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\HomeController@index' ) -> name('home.index');
Route::get('/home', 'App\Http\Controllers\HomeController@index' ) -> name('home.index');
Route::get('/product', 'App\Http\Controllers\HomeController@product' ) -> name('home.product');
Route::get('/about', 'App\Http\Controllers\HomeController@about' ) -> name('home.about');
Route::get('/news', 'App\Http\Controllers\HomeController@news' ) -> name('home.news');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact' ) -> name('home.contact');
Route::get('/product_detail/{id}', 'App\Http\Controllers\HomeController@view' ) -> name('home.view');
Route::get('/login', 'App\Http\Controllers\HomeController@login') -> name('home.login');
Route::post('/login', 'App\Http\Controllers\HomeController@post_login') -> name('home.login');
Route::get('/logout', 'App\Http\Controllers\HomeController@logout') -> name('home.logout');
Route::get('/cart', 'App\Http\Controllers\CartController@view') -> name('cart');



Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin' ,'middleware' => 'auth'], function(){
    Route::get('/', 'App\Http\Controllers\Admin\AdminController@dashboard') -> name('admin.dashboard');
    Route::get('/logout', 'App\Http\Controllers\Admin\AdminController@logout') -> name('logout');

    Route::resources([
        'user' => 'App\Http\Controllers\Admin\UserController',
        'category' => 'App\Http\Controllers\Admin\CategoryController',
        'product' => 'App\Http\Controllers\Admin\ProductController',
        'blog' => 'App\Http\Controllers\Admin\BlogController',
        'order' => 'App\Http\Controllers\Admin\OrderController'
    ]);
});

Route::get('category', 'App\Http\Controllers\Admin\CategoryController@index') -> name('index');
Route::get('admin/login', 'App\Http\Controllers\Admin\AdminController@login') -> name('login');
Route::post('admin/login', 'App\Http\Controllers\Admin\AdminController@post_login') -> name('login');
Route::post('/{id}', 'App\Http\Controllers\HomeController@view') -> name('view');

Route::group(['prefix' => 'cart'], function() {
    Route::get('view', 'App\Http\Controllers\CartController@view')->name('cart.view');
    Route::get('add/{id}', 'App\Http\Controllers\CartController@add')->name('cart.add');
    Route::get('remove/{id}', 'App\Http\Controllers\CartController@remove')->name('cart.remove');
    Route::get('update/{id}', 'App\Http\Controllers\CartController@update')->name('cart.update');
    Route::get('clear', 'App\Http\Controllers\CartController@clear')->name('cart.clear');
});





