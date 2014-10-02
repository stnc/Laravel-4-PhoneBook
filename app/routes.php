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


Route::get('/', function () {
    $adress = phonebook::orderBy('created_at', 'DESC')->paginate(4);
    $adressCat = categoryadress::all();
    return View::make('home.index')->with( array('adress' => $adress,'AdressCat' => $adressCat  ));
});






//Route::get('/', 'HomeController@index'); //example


Route::post('search', 'PhoneBookController@search');

//user management
Route::get('register', 'AuthController@getRegister');
Route::post('register', 'AuthController@postRegister');
Route::get('login', 'AuthController@getLogin');
Route::post('login', 'AuthController@postLogin');



Route::pattern('id', '[0-9]+');

Route::group(array('before' => 'auth'), function () {
    Route::get('admin', 'PhoneBookController@index');
    Route::get('logout', 'AuthController@logout');
  //  Route::get('phonebook', 'PhoneBookController@index');
    Route::get('phonebook/cat/{id}','PhoneBookController@cat');
    Route::resource('phonebook', "PhoneBookController");
    Route::resource('category', "categoryController");
});