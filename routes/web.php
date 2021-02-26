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

use App\Http\Controllers\WelcomeController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/welcome', [WelcomeController::class, 'show']);
//Route::get('/welcome', 'WelcomeController@show');

Route::get('/test', [App\Http\Controllers\SelfcareTipsController::class, 'show']);

Route::get('/posts/{post}', [App\Http\Controllers\PostsController::class, 'show']);

Route::post('/contact', [App\Http\Controllers\FormController::class, 'store']);
Route::get('/contact', [App\Http\Controllers\FormController::class, 'create']);
Route::post('/questions/{id}', [App\Http\Controllers\FormController::class, 'update']);
Route::get('/questions', [App\Http\Controllers\FormController::class, 'show']);


Route::get('/about', [App\Http\Controllers\AboutController::class, 'show']);


Auth::routes();


Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index']);
Route::get('/login', [App\Http\Controllers\ProfileController::class, 'login']);
Route::get('/register', [App\Http\Controllers\ProfileController::class, 'register']);
Route::post('/profile/update', [App\Http\Controllers\ProfileController::class, 'updateProfile'])->name('profile.update');
Route::post('/profile/post', [App\Http\Controllers\ProfileController::class, 'newPost'])->name('profile.post');


Auth::routes();

