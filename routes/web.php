<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get( '/', function ()
{
    return view( 'index' );
} )->name( 'index' );

Route::get( 'tjanster', function ()
{
    return view( 'services.index' );
} )->name( 'services' );

Route::get( 'kontakt', function ()
{
    return view( 'contact' );
} )->name( 'contact' );

Route::get( 'om-oss', function ()
{
    return view( 'about' );
} )->name( 'about' );

Route::get( 'om-oss#affarside', function ()
{
    return view( 'about' );
} )->name( 'business-idea' );

Route::get( 'om-oss#historia', function ()
{
    return view( 'about' );
} )->name( 'history' );

Route::get( 'om-oss#var-vardegrund', function ()
{
    return view( 'about' );
} )->name( 'values' );

Route::get( 'om-oss#policy', function ()
{
    return view( 'about' );
} )->name( 'about-policy' );

Route::get( 'jobb', function ()
{
    return view( 'job' );
} )->name( 'job' );

Route::get( 'support', function ()
{
    return view( 'support' );
} )->name( 'support' );

Route::get( 'intergitespolicy', function ()
{
    return view( 'policy' );
} )->name( 'policy' );

Route::get( 'certifikat', function ()
{
    return view( 'certificate' );
} )->name( 'certificate' );

Route::get( 'tjanster/haltagning', function ()
{
    return view( 'services.concrete.index' );
} )->name( 'concrete' );

Route::get( 'tjanster/haltagning#asbestsanering', function ()
{
    return view( 'services.concrete.index' );
} )->name( 'concrete-asbest' );

Route::get( 'tjanster/haltagning#rivning', function ()
{
    return view( 'services.concrete.index' );
} )->name( 'concrete-demolition' );

Route::get( 'tjanster/haltagning#transport', function ()
{
    return view( 'services.concrete.index' );
} )->name( 'concrete-transport' );

Route::get( 'tjanster/haltagning#slipning', function ()
{
    return view( 'services.concrete.index' );
} )->name( 'concrete-grinding' );

Route::get( 'tjanster/haltagning#maskinpark', function ()
{
    return view( 'services.concrete.index' );
} )->name( 'concrete-machines' );

Route::get( 'tjanster/stad', function ()
{
    return view( 'services.cleaning' );
} )->name( 'cleaning' );

Route::get( 'tjanster/foretagsservice', function ()
{
    return view( 'services.company-service' );
} )->name( 'company-service' );

Route::get( 'tjanster/bygghjalpen', function ()
{
    return view( 'services.help' );
} )->name( 'help' );

Route::get( 'tjanster/bemanning', function ()
{
    return view( 'services.staff' );
} )->name( 'staff' );

Route::get( 'tjanster/transport', function ()
{
    return view( 'services.transport' );
} )->name( 'transport' );

Route::get( 'tjanster/utbildning', function ()
{
    return view( 'services.courses.index' );
} )->name( 'course' );

Route::get( 'tjanster/utbildning/adr', function ()
{
    return view( 'services.courses.adr' );
} )->name( 'adr' );

Route::get( 'tjanster/utbildning/arbete-pa-vag', function ()
{
    return view( 'services.courses.roadwork' );
} )->name( 'roadwork' );

Route::get( 'tjanster/utbildning/bom-och-saxlift', function ()
{
    return view( 'services.courses.lift' );
} )->name( 'lift' );

Route::get( 'tjanster/utbildning/forsta-hjalpen', function ()
{
    return view( 'services.courses.first-help' );
} )->name( 'first-help' );

Route::get( 'tjanster/utbildning/hjullastare', function ()
{
    return view( 'services.courses.wheel-loader' );
} )->name( 'wheel-loader' );

Route::get( 'tjanster/utbildning/fordonsmonterad-kranutbildning', function ()
{
    return view( 'services.courses.vehicle-crane' );
} )->name( 'vehicle-crane' );

Route::get( 'tjanster/utbildning/traversutbildning', function ()
{
    return view( 'services.courses.travers' );
} )->name( 'travers' );

Route::get( 'tjanster/utbildning/truckutbildning', function ()
{
    return view( 'services.courses.forklift' );
} )->name( 'forklift' );

Route::get( 'tjanster/utbildning/sakra-lyft', function ()
{
    return view( 'services.courses.secure-lift' );
} )->name( 'secure-lift' );

Route::get( 'tjanster/utbildning/heta-arbeten', function ()
{
    return view( 'services.courses.warm-work' );
} )->name( 'warm-work' );

Route::get( 'tjanster/utbildning/gravmaskin', function ()
{
    return view( 'services.courses.digger' );
} )->name( 'digger' );

Route::get( 'tjanster/utbildning/teleporter', function ()
{
    return view( 'services.courses.teleporter' );
} )->name( 'teleporter' );

Route::post( 'api/kontakta-email', [EmailController::class, 'contactEmail'] );
Route::post( 'api/ansokan-email', [EmailController::class, 'applicationEmail'] );
Route::post( 'api/support-email', [EmailController::class, 'supportEmail'] );