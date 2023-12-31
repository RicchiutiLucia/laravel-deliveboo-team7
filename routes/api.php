<?php

use App\Http\Controllers\Api\BraintreeController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\DishController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\RestaurantController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\LeadController;
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

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/{slug}', [RestaurantController::class, 'index']);
Route::get('/restaurants', [RestaurantController::class, 'getRestaurants']);


Route::get('/dishes/{id}', [DishController::class, 'index']);
Route::get('/dish/{id}', [DishController::class, 'getDish']);

//Braintree 

Route::get('/braintree/client-token', [BraintreeController::class, 'generateClientToken']);
Route::post('/payment/process', [PaymentController::class, 'processPayment']);

Route::post('/save-order', [OrderController::class, 'saveOrder']);

Route::post('/contacts', [LeadController::class, 'store']);
