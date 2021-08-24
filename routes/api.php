<?php

use App\Item;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

 Route::middleware('auth:api')->get('/user', function (Request $request) {
     return $request->user();
 });

 Route::get('items', function() {
 	return Item::paginate(5);
 });

 Route::get('items/{item}', function($id) {
 	return Item::find($id);
 });

 Route::post('items', function() {
 	return Item::create(request()->all());
 });
 
 Route::put('/item/{id}', 'ApiController@update');

 Route::delete('items/{item}', function(Item $item) {
 	$item->delete();
 	return 'SUCCESS';
 });


 // Route::put('itemupdate/{id}', 'ApiConctroller@updatebyid');