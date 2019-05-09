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

Route::get('/front', function () {
    return view('front');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/myhome', 'MyhomeController@myhome');
Route::get('/about', 'AboutController@about');
Route::get('/price', 'PriceController@price');
Route::get('/contact', 'ContactController@contact');
Route::get('/Registration', 'Registrationcontroller@Registration');
Route::get('/Login', 'Logincontroller@Login');
Route::get('/space', 'Spacecontroller@space');
Route::get('/Map', 'Mapcontroller@Map');
Route::get('/searchs', 'searchController@searchpage');
Route::get('/homeview', 'searchController@getdata');

Route::get('/edit/{CarNumber}', 'searchController@editdata')->name('edit');

Route::post('/update','searchController@updatedata')->name('update');

Route::get('/delete/{CarNumber}', 'searchController@delete');




/*data insert */
Route::post('/Loginsave', 'Logincontroller@Loginsave');
Route::post('/Registrationsave', 'Registrationcontroller@Registrationsave');
Route::post('/contactsave', 'ContactController@contactsave');
Route::post('/spacesave', 'Spacecontroller@spacesave');
Route::post('/homesave', 'MyhomeController@homesave');
Route::get('/search', 'searchController@search');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
