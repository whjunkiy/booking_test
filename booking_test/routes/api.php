<?php

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

use App\Http\Controllers\Api\GuidesController;
use App\Http\Controllers\Api\HuntingBookingController;

Route::get('/guides', [GuidesController::class, 'getActiveGuides']);
Route::post('/bookings', [HuntingBookingController::class, 'createHuntingBooking']);

