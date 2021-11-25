<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CoursesController;
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

Route::get('/', function () {
    return view('welcome');
})->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::resource('abouts',AboutController::class);
Route::get('/about',function(){
    return view('about.aboutus');
})->name('about');

route::resource('blogs',BlogsController::class);
Route::get('/blog',function(){
    return view('blog.list');
})->name('blog');
Route::get('/blog-details',function(){
    return view('blog.details');
})->name('blog-details');

route::resource('courses',CoursesController::class);
Route::get('/course',function(){
    return view('course.list');
})->name('course');
Route::get('/course-details',function(){
    return view('course.details');
})->name('course-details');

route::resource('contacts',ContactsController::class);
Route::get('/contact',function(){
    return view('contact.view');
})->name('contact');

Route::get('/register_login',function(){
    return view('register_login');
})->name('register_login');

Route::get('/profile',function(){
    return view('profile');
})->name('profile');

