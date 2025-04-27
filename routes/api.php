<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AlertController;

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

    Route::post('signUp',[AuthController::class,'signUp']);
    Route::post('login',[AuthController::class,'login']);
    Route::post('verifyOtp',[AuthController::class,'verifyOtp']);
    Route::post('socialLogin',[AuthController::class,'socialLogin']);
    Route::get('getProduct',[ProductController::class,'getProduct']);


    Route::middleware('auth:api')->group(function () {
        Route::get('getProfile',[ProfileController::class,'getProfile']);
       
        Route::post('editProfile',[ProfileController::class,'editProfile']);
        Route::post('changePassword',[ProfileController::class,'changePassword']);
        Route::get('forgetPassword',[ProfileController::class,'forgetPassword']);
        Route::post('updatePassword',[ProfileController::class,'updatePassword']);
        Route::get('alert',[AlertController::class,'alert']);
    });

    