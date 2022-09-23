<?php

use App\Http\Controllers\AuthController;
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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth',

], function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);

});

Route::group(['namespace' => 'App\Http\Controllers\Test', 'middleware' => 'jwt.auth'], function() {
    Route::get('tests', 'IndexController');
    Route::get('tests/create', 'CreateController');
    Route::post('tests', 'StoreContorller');
    Route::get('tests/{test}', 'ShowContoroller');
    Route::get('tests/{test}/edit', 'EditController');
    Route::patch('tests/{test}', 'UpdateController');
    Route::delete('tests/{test}', 'DestroyController');
});

