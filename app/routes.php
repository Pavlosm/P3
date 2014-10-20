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


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This is the route to the homepage of P3. No forms are attached so only a
| get method is defined
*/

Route::get('/', function(){
   return View::make('Homepage');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This is the route to the lorem ipsum generator. It has both a get and a
| post form
|
*/

Route::get('/Lorem_Ipsum_Generator', 'LoremIpsumController@GetDefaultPage');

Route::post('/Lorem_Ipsum_Generator', 'LoremIpsumController@GetResults');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This is the route to the random user generator. It has both a get and a
| post form
|
*/
Route::get('/Random_User_Generator', 'RandomUserController@GetDefaultPage');


Route::post('/Random_User_Generator','RandomUserController@GetResults');

