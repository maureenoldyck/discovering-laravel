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

use App\Http\Controllers\WelcomeController;


Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', [WelcomeController::class, 'show']);
//Route::get('/welcome', 'WelcomeController@show');


Route::get('/test', function () {

    $name = request('name');
    return view('test', [
        'name' => $name
    ]);
});


Route::get('/posts/{post}', 'PostsController@show');

Route::post('/contact', 'FormController@store');
Route::get('/contact', 'FormController@create');
Route::get('/questions', 'FormController@show');

