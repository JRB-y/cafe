<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', function () {
    return view('back.index');
});

// admi
Route::get('/admin', 'Auth\LoginController@showLoginForm');

// categories
Route::resource('/categories', 'CategoryController');
Route::get('/cat-delete/{id}', 'CategoryController@delete')->name('categories.del');


// products
Route::resource('/products', 'ProductController');
Route::get('/prod-delete/{id}', 'ProductController@delete')->name('products.del');

// Front Categorie 
Route::get('/category-list/{id}', 'PageController@category_list');
// Front Product detailt
Route::get('/product-details/{id}', 'PageController@product_details');


// Add to cart
Route::post('/add-to-cart', 'CartController@addToCart');

// login
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
