<?php
 
use Illuminate\Support\Facades\Route;
 
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
 
Auth::routes();
 
 Route::get('/home', 'HomeController@index')->name('home');


 
Route::get('homepage', 'CitiesController@cities');
 
Route::get('cairo', function () {
    return view('FrontEnd.Cairo');
});
Route::get('rooms', 'RoomsController@rooms'); 
Route::get('frontend','RoomsController@index');
Route::get('frontend/rooms','RoomsController@index');
// backend
Route::get('backend/tourists', 'TouristController@index')->name("tourists.index");
Route::get('backend/tourists/create', 'TouristController@create')->name("tourists.create");
Route::post('backend/tourists','TouristController@store')->name("tourists.store");
 
Route::get('backend/rooms', 'RoomsController@index')->name("rooms.index");
//create funcion must be before show function
Route::get('backend/rooms/create', 'RoomsController@create')->name("rooms.create");
Route::post('backend/rooms', 'RoomsController@store')->name("rooms.store");
Route::get('backend/rooms/{id}/edite', 'RoomsController@edite')->name("rooms.edite");
Route::put('backend/rooms/{id}', 'RoomsController@update')->name("rooms.update");
 
Route::get('backend/rooms/{id}', 'RoomsController@show')->name("rooms.show");
 
Route::get('backend/rooms/{id}/delete' , 'RoomsController@destroy')->name("rooms.destroy");
Route::delete('backend/rooms/{id}/delete' , 'RoomsController@destroy')->name("rooms.destroy");
 
 Route::resource('backend/rooms','RoomsController')->middleware('auth');



Route::get('backend/cities', 'CitiesController@index')->name("cities.index");
//create funcion must be before show function
Route::get('backend/cities/create', 'CitiesController@create')->name("cities.create");
Route::post('backend/cities', 'CitiesController@store')->name("cities.store");
Route::get('backend/cities/{id}/edite', 'CitiesController@edite')->name("cities.edite");
Route::put('backend/cities/{id}', 'CitiesController@update')->name("cities.update");
 
Route::get('backend/cities/{id}', 'CitiesController@show')->name("cities.show");
 
 Route::get('backend/rooms/{id}/delete' , 'RoomsController@destroy')->name("rooms.destroy");
Route::delete('backend/cities/{id}/delete' , 'CitiesController@destroy')->name("cities.destroy");
 
Route::resource('backend/rooms','RoomsController')->middleware('auth');