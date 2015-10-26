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
/*
Route::get('/#', function(){

});
*/
Route::get('/public', 'PublicController@main');
//->where('url', '[A-Za-z]+');

Route::get('/admin', 'AdminController@index');

Route::get('/investor', 'InvestorController@index');

Route::get('/founder', 'FounderController@index');

Route::get('/aboutInvestor', 'PublicController@investor');

Route::get('/aboutFounder', 'PublicController@founder');



/*
Route::controller('/admin', 'AdminController', [
    'getHome' => 'admin.home',
]);
*/
Route::get('/home',function(){
    if(Auth::user()->isAdmin()) {
        return redirect()->action('AdminController@index');
    }elseif(Auth::user()->isFounder()){
        return redirect()->action('FounderController@index');
    }elseif(Auth::user()->isInvestor()){
        return redirect()->action('InvestorController@index');
    }
});




Route::resource('users', 'Model\UserService');

