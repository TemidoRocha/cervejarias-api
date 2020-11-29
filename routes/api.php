<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\CervejariasController;
use App\Models\Cervejarias;

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


Route::group(['middleware' => ['cors', 'json.response']], function () {
   // public routes
  Route::post('/login',  [LoginController::class, 'login']);
  Route::post('/register', [LoginController::class, 'register']);

  });

Route::middleware('auth:api')->group(function () {
    // our routes to be protected will go in here
    Route::post('/logout', 'LoginController@logout')->name('logout.api');

    Route::get('cervejarias', [CervejariasController::class, 'index']);
    Route::get('cervejarias/{cervejarias}', [CervejariasController::class, 'show']);
    Route::post('cervejarias', [CervejariasController::class, 'store']);
    Route::put('cervejarias', [CervejariasController::class, 'update']);
    Route::delete('cervejarias', [CervejariasController::class, 'destroy']);

});
