<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\nameRouteController;

use App\Http\Controllers\routeGroup;

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


Route::view('lovepreet/visit','route-Group');

// Route::get('lovepreet/mobile',[routeGroup::class,'mobile']);
// Route::get('lovepreet/mail-id',[routeGroup::class,'mailId']);
// Route::get('lovepreet/address',[routeGroup::class,'address']);

// using grouping

Route::prefix('lovepreet')->group(function(){
   
    Route::get('/mobile',[routeGroup::class,'mobile']);
    Route::get('/mail-id',[routeGroup::class,'mailId']);
    Route::get('/address',[routeGroup::class,'address']);
});
