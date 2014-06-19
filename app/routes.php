<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::resource('student', 'StudentController');
   
 Route::group(array('before' => 'auth'), function()
{
   
   Route::resource('enrol', 'EnrolController');
});
    


  

    // You can use Route::resource togehter with 
    // direct routes to the Resource Controller
    // so e.g. Route::post('cms', 'PostsController@save');


Route::get('/', array('as' =>'home','uses' => 'HomeController@index'));
Route::post('/login',array('as' => 'login','uses' =>  'AuthenController@login'));
Route::get('/login',array('uses' =>  'AuthenController@showlogin'));
Route::get('/updatepassword', array('uses' => 'HomeController@updateUser'));
Route::get('/logout', array('as'=>'logout','uses' => 'AuthenController@logout'));
Route::get('/enrol/create/{id}', array('before'=>'auth','uses' => 'EnrolController@create'));



