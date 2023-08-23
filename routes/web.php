<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WorkController;
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
    return view('index');
})->name('index');;

Route::get('/work',function(){
    return view('work');
})->name('work');

Route::get('/work-detail',function(){
    return view('work-detail');
})->name('work-detail');

Route::get('/service',function(){
    return view('service');
})->name('service');

Route::get('/portfolio-animation',function(){
    return view('portfolio-animation');
})->name('portfolio-animation');

Route::get('/portfolio-stills',function(){
    return view('portfolio-stills');
})->name('portfolio-stills');

Route::get('/portfolio-vr',function(){
    return view('portfolio-vr');
})->name('portfolio-vr');

Route::get('/about',function(){
    return view('about');
})->name('about');

Route::get('/blog',function(){
    return view('blog');
})->name('blog');

Route::get('/blog-section',function(){
    return view('blog-section');
})->name('blog-section');

Route::get('/contact',function(){
    return view('contact');
})->name('contact');

Route::get('/together',function(){
    return view('together');
})->name('together');


Route::get('/vr-view',function(){
    return view('vr-view');
})->name('vr-view');

// Route::resource('work', WorkController::class);
// Route::resource('services', ServiceController::class);
// Route::resource('about', AboutController::class);
// Route::resource('blog', BlogController::class);
// Route::resource('contact', ContactController::class);

