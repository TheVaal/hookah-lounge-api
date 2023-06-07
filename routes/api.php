<?php

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

Route::group(array('prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'), function(){
    Route::apiResource('hardness', HardnessController::class);
    Route::apiResource('manufacturers', ManufacturerController::class);   
    Route::apiResource('lounges', LoungeController::class);
    Route::apiResource('tables', TableController::class);   

    Route::apiResource('tobacco', TobaccoController::class);
    Route::apiResource('loungeTobacco', LoungeTobaccoController::class);   
    Route::apiResource('menu', MenuController::class);
    Route::apiResource('loungeMenu', LoungeMenuController::class);   

    Route::apiResource('mixes', MixController::class);
    Route::apiResource('hookah', HookahController::class);   
    Route::apiResource('inOrder', InOrderController::class);
    Route::apiResource('order', OrderController::class);   

    Route::apiResource('waiterCall', WaiterCallController::class);
    Route::apiResource('session', SessionController::class);  
    
});
