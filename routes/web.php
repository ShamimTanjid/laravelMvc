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
Route::get('/contactPage','ContactController@ContactInfo')->name('contactpage');
Route::get('/insert-data','ContactController@InsertData');
Route::post('/insert-dataadd','ContactController@InsertDataContact');
Route::get('/Delete-data/{id}','ContactController@DeLATEData');
Route::get('/Edit-data/{id}','ContactController@EditdataData');
Route::post('/update-contact/{id}','ContactController@updatetDataContact');
Route::get('/view-data/{id}','ContactController@viewData');



