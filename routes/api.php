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

/*
WARNING WARNING WARNING
NEED TO CREATE MIDDLEWARE THAT CONFIRMS THE CURRENT USER BELONGS TO THE REQUESTED ORGANIZATION
*/
Route::group(['prefix' => 'v1/passport'], function () {
    Route::post('requests/clients/create', [App\Http\Controllers\API\ReqstController::class, 'store']);
    Route::post('requests/clients/status/consent', [App\Http\Controllers\API\ReqstController::class, 'status_consent']);
    Route::post('requests/clients/status/check', [App\Http\Controllers\API\ReqstController::class, 'status_check']);
    Route::post('requests/users/scan', [App\Http\Controllers\API\ReqstController::class, 'users_scan']);
});