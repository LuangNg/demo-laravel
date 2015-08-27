<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get', 'post'], '/start', function () {
    return "<h1>Hello Laravel</h1>";
});

Route::get('/welcome/{uid?}', function ($uid='luang') {
    return "<h1>Hi,". $uid . "</h1>";
});

Route::get('/user/profile', ['as' => 'profile', function () {
    return 'This is profile page';
}]);

Route::get('/signin', function () {
    return view('default/signin');
});

Route::post('auth/register', 'Authority\AuthController@register');

Route::post('auth/signIn', 'Authority\AuthController@signIn');

Route::get('/register', function () {
    return view('default/register');
});