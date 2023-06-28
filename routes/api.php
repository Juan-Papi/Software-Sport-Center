<?php

use App\Http\Controllers\Api\Personal\PersonalController;
use App\Http\Controllers\Api\Usuario\UserController;
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


Route::apiResource('register' , UserController::class)->names('api.register');
Route::apiResource('personal' , PersonalController::class)->names('api.personal');
