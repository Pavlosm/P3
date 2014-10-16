<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
   return View::make('Homepage');
});

Route::get('/Lorem_Ipsum_Generator', function(){
    return View::make('LoremIpsum');
});

Route::post('/Lorem_Ipsum_Generator', function(){
    return View::make('LoremIpsum');
});

Route::get('/Random_User_Generator',function(){
    return View::make('UserGenerator');
});


Route::post('/Random_User_Generator',function(){
    return View::make('UserGenerator');
});