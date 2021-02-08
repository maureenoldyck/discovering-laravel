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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return 'Hello World! 
    <div class="links">
        <a href="/test?name=maureen">Test</a>
        <a href="/">Home</a>
    </div>';
});

Route::get('/test', function () {

    $name = request('name');
    return view('test', [
        'name' => $name
    ]);
});


Route::get('/posts{post}', 'PostsController@show');