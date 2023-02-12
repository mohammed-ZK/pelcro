<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('costumers',[CustomerController::class,'index']);
Route::post('costumers',[CustomerController::class,'store']);
Route::post('costumers/{customer}',[CustomerController::class,'show']);
Route::delete('costumers/{customer}',[CustomerController::class,'destroy']);
Route::put('costumers/{customer}',[CustomerController::class,'update']);