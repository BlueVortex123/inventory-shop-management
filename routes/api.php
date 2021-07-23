<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;


use App\Http\Controllers\ApiController;
use App\Http\Controllers\ProductController;

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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'
    

], function ($router) {

    Route::post('/login', 'App\Http\Controllers\AuthController@login');
    Route::post('/signup', 'App\Http\Controllers\AuthController@signup');
    Route::post('/logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('/refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('/me', 'App\Http\Controllers\AuthController@me');
    Route::post('/register', 'App\Http\Controllers\AuthController@register'); 

    // Route::post('/login', [AuthController::class, 'login']);
    // Route::post('/register', [AuthController::class, 'register']);
    // Route::post('/logout', [AuthController::class, 'logout']);
    // Route::post('/refresh', [AuthController::class, 'refresh']);
    // Route::get('/user-profile', [AuthController::class, 'userProfile']); 
});

// Route::post('login', [ApiController::class, 'authenticate']);
// Route::post('register', [ApiController::class, 'register']);

// Route::group(['middleware' => ['jwt.verify']], function() {
//     Route::get('logout', [ApiController::class, 'logout']);
//     Route::get('get_user', [ApiController::class, 'get_user']);
//     Route::get('products', [ProductController::class, 'index']);
//     Route::get('products/{id}', [ProductController::class, 'show']);
//     Route::post('create', [ProductController::class, 'store']);
//     Route::put('update/{product}',  [ProductController::class, 'update']);
//     Route::delete('delete/{product}',  [ProductController::class, 'destroy']);
// });