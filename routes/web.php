<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'CeciController@index');
    Route::get('/home', 'CeciController@index');
    Route::get('/reports', 'CeciController@report');
});

Route::group(['middleware' => ['App\Http\Middleware\AdminMiddleware']], function () {
			Route::get('/admin', 'CeciController@admin');
        });


Route::post('/edit/name', 'EditController@name');
Route::post('/edit/dob', 'EditController@dob');
Route::post('/edit/contract_start_date', 'EditController@contract_start_date');
Route::post('/edit/contract_end_date', 'EditController@contract_end_date');
Route::post('/edit/partner_organization', 'EditController@partner_organization');
Route::post('/edit/username', 'EditController@username');
