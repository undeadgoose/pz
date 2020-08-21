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
/* Pages */
Route::get('/', 'PagesController@index');
Route::get('/talents', 'PagesController@talents');
Route::get('/partners', 'PagesController@partners');

/* Contact */
Route::get('/contact', 'ContactUSController@contactUS');
Route::post('/contact', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);

/* Newsletter */
Route::get('/newsletter', 'PagesController@newsletter');
Route::post('/newsletter', 'PagesController@newsletterSubmit');

/* Auth */
Auth::routes();
/* News */
Route::resource('news', 'NewsController');
/* Blog */
Route::get('/dashboard', 'DashboardController@index');
Route::resource('blog', 'PostsController');
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();


});