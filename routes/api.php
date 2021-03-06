<?php

use Illuminate\Http\Request;
Use App\Ingredient;
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


Route::get('ingredients', 'IngredientController@index');
Route::get('ingredients/{ingredient}', 'IngredientController@show');
Route::post('ingredients', 'IngredientController@store');
Route::put('ingredients/{ingredient}', 'IngredientController@update');
Route::delete('ingredients/{ingredient}', 'IngredientController@delete');
// Route::get('ingredients', function() {
//     // If the Content-Type and Accept headers are set to 'application/json',
//     // this will return a JSON structure. This will be cleaned up later.
//     return Ingredient::all();
// });

// Route::get('ingredients/{id}', function($id) {
//     return Ingredient::find($id);
// });

// Route::post('ingredients', function(Request $request) {
//     return Ingredient::create($request->all);
// });

// Route::put('ingredients/{id}', function(Request $request, $id) {
//     $ingredient = Ingredient::findOrFail($id);
//     $ingredient->update($request->all());

//     return $ingredient;
// });

// Route::delete('ingredients/{id}', function($id) {
//     Ingredient::find($id)->delete();

//     return 204;
// });


