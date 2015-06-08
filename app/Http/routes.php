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

Route::get('/', 'PostController@index');

Route::get('/demo', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('test', ['uses'=>'TestController@testing', 'middleware'=>'test']);

Route::controller('multiple', 'MultipleController', ['anyLogin'=>'any.login']);

Route::get('notify', 'NotifyController@index');

Route::resource('photos', 'PhotoController');

Route::resource('post', 'PostController');

Route::resource('admin/user', 'UserController');

Route::controller('admin', 'AdminController');

Route::get('scripts/translate/{lang}', 'ScriptsController@translate');

Route::get('login', function(){ return redirect('auth/login', 301); });

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::post('language', function(){

    \Illuminate\Support\Facades\Session::put('language', \Illuminate\Support\Facades\Request::input('lang'));


    return \Illuminate\Support\Facades\Redirect::back();
});


/*Event::listen('illuminate.query', function($query)
{
    var_dump($query);
});*/

