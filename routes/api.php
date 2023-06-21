<?php

use App\Utils\RouteHelper;
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

Route::prefix('v1')
    // max of 10 requests per min for guest users and 60 requests per min for auth users
//    ->middleware(['throttle:10|60,1'])
    ->group(function () {
        RouteHelper::includeRouteFiles(__DIR__ . '/v1');
        Route::fallback(function (){
            abort(404, 'API resource not found');
        });
    });

