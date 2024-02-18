<?php

use Illuminate\Http\Request;
use App\Http\Controllers\EmailController;


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

//
// Email
//
Route::post( '/kontakta-email', [EmailController::class, 'contactEmail'] );
Route::post( '/ansokan-email', [EmailController::class, 'applicationEmail'] );
Route::post( '/support-email', [EmailController::class, 'supportEmail'] );