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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::group(['middleware' => 'auth'], function() {
    
    Route::get('/upload-image',array(
        'as' => 'get-upload-image',
        'uses' => 'ImageController@getImageUploadView'
    ));
    //CSRF protection
    Route::group(['middleware' => 'csrf'], function() {
        // Upload Image Post form
        Route::post('/post-upload-image', array(
              'as' => 'post-upload-image', 
              'uses' => 'ImageController@postImageUpload' ));
        });
});