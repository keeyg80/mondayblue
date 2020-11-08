<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/cards', 'PagesController@cards');
Route::get('/carouselsitem', 'PagesController@carouselsitem');
Route::get('/category/{Category_id}','CategoriesController@show');
Route::resource('posts','PostsController');

// Auth::routes();
Auth::routes(['verify' => true]);

//normal user routes
Route::get('/dashboard', 'DashboardController@index');
Route::get('/myprofile/{User_id}','ProfileController@edit');
Route::put('/myprofile/{User_id}','ProfileController@update');

Route::post('/posts','ReviewsController@store');

//administrator routes
Route::get('/administrator/categories','CategoriesController@categoriesmanage');
Route::get('/administrator/users','CategoriesController@usersmanage');
Route::get('/categorycreate','CategoriesController@categorycreate');
Route::post('/categorycreate','CategoriesController@categorystore');
Route::DELETE('/categorycreate/{id}','CategoriesController@categorydestroy');

Route::get('/categoryedit/{id}','CategoriesController@categoryedit');
Route::put('/categoryedit/{id}','CategoriesController@categoryupdate');

Route::get('/useredit/{id}','CategoriesController@useredit');
Route::put('/useredit/{id}','CategoriesController@userupdate');
