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
Route::get('/', function () {
    return view('home');
});

// Route::get('/', function () {
//     return redirect('about');
// });
Route::get('/blog/{name}', function ($name) {
    return view('blog',['name'=>$name]);
});
Route::view("home","/home");
Route::view("blog","/blog");
Route::view("about","/about");
Route::view("contact","/contact");