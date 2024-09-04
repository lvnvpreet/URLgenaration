<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\nameRouteController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('home', 'home');

// access the same home page using different url 

Route::view('user', 'home');

Route::view('about', 'about');

Route::view('home/profile/user/name/{name}','myProfile')->name('user');

Route::view('home/profile/user/name','nameRoute')->name('nm');

Route::get('show',[nameRouteController::class,'show']);


Route::get('user',[nameRouteController::class,'user']);

