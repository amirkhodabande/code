<?php

use App\Comment;
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

Route::get('/', 'FrontController@index');
Route::get('/home', 'FrontController@index');

// Magic paginator
Route::get('/series', 'FrontController@series');
Route::get('/blogs', 'FrontController@blogs');
// End

Route::get('/series/{series}', 'SeriesController@show');
Route::get('/{lesson}/lesson', 'SeriesController@lessonShow')->name('lesson-show');

Route::get('/lesson/{lesson}/comments', 'CommentController@index');
Route::get('/comments/{comment}/replies', 'CommentController@show');
Route::get('/source/{source}', 'SourceController@show')->name('source-show');

Route::middleware(['auth'])->group(function () {
    Route::post('/votes/{id}/{type}', 'VoteController@vote');
    Route::post('/comments/{lesson}', 'CommentController@store');

    Route::resource('/panel', 'UserController');
    // Route::post('/blog/edit/{blog}', 'UserController@blogUpdate')->name('pedit-blog');
    Route::resource('/panel_blog', 'BlogController');
});


Route::get('register/confirm', 'ConfirmEmailController@index')->name('confirm-email');
Auth::routes();
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
