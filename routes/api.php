<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('products', function() {
    return response(['Product 1', 'Product 2', "Product 3"], 200);
});

Route::get('products/{product}', function ($productId) {
    return response()->json(['productId' => "{$productId}"], 200);
});



Route::post('products', function() {
    return  response()->json([
        'message' => 'Create success'
    ], 201);
});

Route::put('products/{product}', function() {
    return  response()->json([
        'message' => 'Update success'
    ], 200);
});

Route::delete('products/{product}',function() {
    return  response()->json(null, 204);
});

