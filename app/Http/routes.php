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


/*
Route::get('/', function(){
    return redirect()->action('PublicController@main');
});
*/

//PublicController servicing public pages
Route::get('/public', 'PublicController@main');
Route::get('/aboutInvestor', 'PublicController@investor');
Route::get('/aboutFounder', 'PublicController@founder');
//->where('url', '[A-Za-z]+');


//Administration Controller
Route::get('/admin', 'AdminController@index');

Route::get('/admin/details/{userType}/{id}', 'AdminController@details');

Route::get('/admin/edit/{userType}/{id}', 'AdminController@edit');

Route::get('/admin/delete/{userType}/{id}', 'AdminController@delete');

Route::post('/admin/update/{userType}/{id}', 'AdminController@update');

Route::get('/admin/details/{userType}/{id}', 'AdminController@details');

Route::get('/investor', 'InvestorController@index');

Route::get('/founder', 'FounderController@index');


//Model Services Controllers for CRUD Operations
Route::resource('users', 'Services\UserService');
Route::resource('founder', 'Services\FounderService');
Route::resource('investor', 'Services\InvestorService');
Route::resource('campaign', 'Services\CampaignService');


//After-LogIn: Redirect to Appropriate Controller
Route::get('/home',function(){
    if(Auth::user()->isAdmin()) {
        return redirect()->action('AdminController@index');
    }elseif(Auth::user()->isFounder()){
        return redirect()->action('FounderController@index');
    }elseif(Auth::user()->isInvestor()){
        return redirect()->action('InvestorController@index');
    }
});





