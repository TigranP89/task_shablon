<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\InformationController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::group(['middleware' => 'auth:api'], function (){
    Route::group(['prefix' => 'backend'], function (){
        Route::match(['get', 'post'],'/send-info', [InformationController::class, 'informationRequesr']);
    });
});

//Route::group(['prefix' => 'backend'], function (){
////    Route::get('/information', [InformationController::class, 'index']);
//    Route::match(['get', 'post'],'/send-info', [InformationController::class, 'informationRequesr']);
//});
