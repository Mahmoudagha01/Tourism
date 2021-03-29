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

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('about/{id}', function ($id) {
    $arr=[
        "1" => "mahmoud",
        "2" => "Yasser",
        "3" => "Fathy",
    ];
    return view("about",[
        "id"=> $arr[$id]
    ]);
});   



Route::get('homepage', function () {
    return view('FrontEnd.HomePage');
});

Route::get('cairo', function () {
    return view('FrontEnd.Cairo');
});
Route::get('rooms', function () {
    return view('FrontEnd.Rooms');   
});