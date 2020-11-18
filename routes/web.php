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

// Route::get('/', function () {
//     return view('welcome');
// });


// PagesController Routs
Route::get('/','PagesController@index')->name('home');
Route::get('/home','PagesController@index')->name('home');
Route::get('/404','PagesController@eror')->name('eror');
Route::get('/about_us','PagesController@about_us')->name('about-us');
Route::get('/blog_home','PagesController@blog_home')->name('blog-home');
Route::get('/blog_single','PagesController@blog_single')->name('blog-single');
Route::get('/change_password','PagesController@change_password')->name('change-password');
Route::get('/contact','PagesController@contact')->name('contact');
Route::get('/favourite_products','PagesController@favourite_products')->name('favourite-products');
Route::get('/manage_products','PagesController@manage_products')->name('manage-products');
Route::get('/privacy_policy','PagesController@privacy_policy')->name('privacy-policy');
Route::get('/product_listing','PagesController@product_listing')->name('product-listing');
Route::get('/product_listing_detail','PagesController@product_listing_detail')->name('product-listing-detail');
Route::get('/messages','PagesController@messages')->name('messages');
Route::get('/notifications','PagesController@notifications')->name('notifications');
Route::get('/search','PagesController@search')->name('search');
Route::get('/sell_product','PagesController@sell_product')->name('sell-product');
Route::get('/services','PagesController@services')->name('services');
Route::get('/shopping_cart','PagesController@shopping_cart')->name('shopping-cart');
Route::get('/sign_in','PagesController@sign_in')->name('sign-in');
Route::get('/sign_up','PagesController@sign_up')->name('sign-up');
Route::get('/terms_and_conditions','PagesController@terms_and_conditions')->name('terms-and-conditions');
Route::get('/upload_products','PagesController@upload_products')->name('upload-products');
Route::get('/user_profile','PagesController@user_profile')->name('user-profile');
Route::get('/withdraw','PagesController@withdraw')->name('withdraw');



Auth::routes();

Route::get('/login', 'HomeController@index')->name('login');


// CountryController
Route::get('/origin_country/add','CountryController@add')->name('add-origincountry');
Route::post('/origin_country/store','CountryController@store')->name('store-origincountry');



// OwnerController Routs
Route::get('/owner/add','OwnerController@add')->name('add-owner');
Route::post('/owner/store','OwnerController@store')->name('store-owner');



