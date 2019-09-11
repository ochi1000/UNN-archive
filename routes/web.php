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

/**Home Route */
Route::get('/', 'IndexController@show');
Route::get('/h', 'IndexController@home');

/**Search Route */
Route::get('/search', 'SearchController@search', 'search');
Route::get('autocomplete', 'SearchController@autocomplete');

/**Search Details Route */
Route::get('/papers/{id}', 'SearchController@showDetails');

/**Download File Route */
Route::get('/download/{id}', 'SearchController@download');

/**Admin Dashboard */
Route::get('/admin','Admin\DashboardController@show');

/**Admin CategoryController Routes */
Route::get('/admin/files/categories','Admin\CategoryController@show');
Route::post('/admin/files/categories', 'Admin\CategoryController@store');

/**Admin ProductController Routes */
/**Routes to get form and post data of products */
Route::post('/admin/files/create', 'Admin\FileController@store');
Route::get('/admin/files/create', 'Admin\FileController@showForm');

/**Routes to get products  */
Route::get('/admin/files', 'Admin\FileController@show');

/**Authentication Routes */
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

/**Authentication For Admin Before getting access to admin Routes */
Route::group(['middleware'=>'auth'], function(){
    // if(Auth::user()->role == 'user'){
        /**Admin Dashboard */
        Route::get('/admin','Admin\DashboardController@show');

        /**Admin CategoryController Routes */
        Route::get('/admin/files/categories','Admin\CategoryController@show');
        Route::post('/admin/files/categories', 'Admin\CategoryController@store');

        /**Admin ProductController Routes */
        /**Routes to get form and post data of products */
        Route::post('/admin/files/create', 'Admin\FileController@store');
        Route::get('/admin/files/create', 'Admin\FileController@showForm');

        /**Routes to get products  */
        Route::get('/admin/files', 'Admin\FileController@show');
    // }
});

Route::get('/home', 'HomeController@index')->name('home');
