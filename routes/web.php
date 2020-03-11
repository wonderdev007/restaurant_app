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

// Static Pages
Route::get('/', 'StaticPagesController@home');
Route::get('/menu', 'StaticPagesController@menu');
Route::get('/menu/{slug}', 'StaticPagesController@singleMenu');
Route::get('/about', 'StaticPagesController@about');
Route::get('/contact', 'StaticPagesController@contact');

Route::get('/reservations', 'StaticPagesController@reservations');
Route::post('/reservations', 'StaticPagesController@saveReservation');
Route::get('/reservations/thank-you', 'StaticPagesController@thankYou');

Route::get('/offers', 'StaticPagesController@offers');
Route::post('/offers', 'StaticPagesController@registerMember');
Route::get('/offers/thank-you', 'StaticPagesController@thankYou');

// Admin Dashboard
Route::get('/admin', 'admin\AdminController@dashboard');

// Admin Users
Route::get('/admin/users', 'admin\UsersController@index');
Route::get('/admin/users/create', 'admin\UsersController@create');
Route::post('/admin/users', 'admin\UsersController@store');
Route::get('/admin/users/{id}/edit', 'admin\UsersController@showEditData');
Route::put('/admin/users/{id}', 'admin\UsersController@update');
Route::get('/admin/users/{id}/delete', 'admin\UsersController@delete');

// Admin Members
Route::get('/admin/members', 'admin\MemberController@index');
Route::get('/admin/members/{id}/delete', 'admin\MemberController@delete');

// Admin Reservations
Route::get('/admin/reservations', 'admin\ReservationController@index');
Route::get('/admin/reservations/{id}/delete', 'admin\ReservationController@delete');

// Admin Settings
Route::get('/admin/settings/general', 'admin\SettingsController@general');
Route::put('/admin/settings/general', 'admin\SettingsController@saveGeneral');
Route::get('/admin/settings/seo', 'admin\SettingsController@seo');
Route::put('/admin/settings/seo', 'admin\SettingsController@saveSeo');
Route::get('/admin/settings/social', 'admin\SettingsController@socialAccounts');
Route::put('/admin/settings/social', 'admin\SettingsController@saveSocialAccounts');

// Admin Food Categories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');
Route::post('/admin/food-categories', 'admin\FoodCategoriesController@store');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@showEditCategories');
Route::put('/admin/food-categories/{id}', 'admin\FoodCategoriesController@update');
Route::get('/admin/food-categories/{id}/delete', 'admin\FoodCategoriesController@delete');


// Admin Food Items
Route::get('/admin/food-items', 'admin\FoodItemsController@index');
Route::get('/admin/food-items/create', 'admin\FoodItemsController@create');
Route::post('/admin/food-items/', 'admin\FoodItemsController@store');
Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@showEditItem');
Route::put('/admin/food-items/{id}', 'admin\FoodItemsController@update');
Route::get('/admin/food-items/{id}/delete', 'admin\FoodItemsController@delete');

// Admin Authentication
Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
