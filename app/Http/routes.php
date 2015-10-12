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

//PublicController servicing public pages
Route::get('/', 'PublicController@main');

Route::get('/investor', 'PublicController@investor');

Route::get('/founder', 'PublicController@founder');


Route::get('/home',function(){
    if(Auth::user()->isAdmin()) {
        return view('layouts.admin');
    }elseif(Auth::user()->isFounder()){
        return view('layouts.founder');
    }elseif(Auth::user()->isInvestor()){
        return view('layouts.investor');
    }
});

/*
Route::controller([
    'auth' => 'Auth\AuthController',
    'password' => 'AuthPasswordController',
]);
*/