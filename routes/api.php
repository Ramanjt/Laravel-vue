<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category;
use App\Http\Controllers\Document;

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

Route::get('categories',[Category::class,'index']);
Route::prefix('/category')->group( function() {
    Route::post('/store',[Category::class, 'store']);
});

Route::get('documents',[Document::class,'index']);
Route::prefix('/document')->group( function() {
    //Route::get('/show/{id}',[Document::class, 'show']);
    Route::post('/store',[Document::class, 'store']);
    Route::put('/{id}',[Document::class, 'update']);
    Route::delete('/{id}',[Document::class, 'destroy']);
});