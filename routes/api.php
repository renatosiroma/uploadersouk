<?php

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

Route::post('/upload', function (Request $request) {
    header("Access-Control-Allow-Origin: *");
    $path = $request->file('image')->store('images', 'public');
    return response(['path' => $path]);
});
