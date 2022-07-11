<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostBlogController;
use App\Http\Controllers\TrashedBlogsController;

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


// Route::get('/comment/azmy/{id}',[
//     'uses' => 'CommentsController@azmy',
//     'as' => 'comment/azmy'
// ]);



Route::put('store/{id}','UserController@store')->name('usersetting.store');

Route::get('/', function () {
    return view('dashboard');
});


Route::get('/dashboard', function () {
    return view('layouts.website.user.dashboard');

})->middleware(['auth'])->name('dashboard');

Route::resource('/postcomment', PostBlogController::class);
Route::get('/blogs/user' , [BlogsController::class , 'userBlogs']);
Route::resource('/blogs', BlogsController::class);
Route::resource('/Tblogs', TrashedBlogsController::class);
Route::resource('/category', CatController::class);
Route::resource('/usersetting', UserController::class);


Route::namespace('Admin')->prefix('admin')->name('comments')->group(function () {
    Route::resource('/comments', CommentsController::class);
});



require __DIR__.'/auth.php';


