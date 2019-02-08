<?php

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

//
// Views
//
Route::get( '/', function ()
{
    return view( 'index' );
} )->name( 'index' );

Route::get( 'tjänster', function ()
{
    return view( 'services.index' );
} )->name( 'services' );

Route::get( 'kontakt', function ()
{
    return view( 'contact' );
} )->name( 'contact' );

Route::get( 'om-oss', function ()
{
    return view( 'about/index' );
} )->name( 'about' );

Route::get( 'oms-oss/vår-historia', function()
{
    return view( 'about.history' );
} )->name( 'history' );

Route::get( 'jobb', function ()
{
    return view( 'job' );
} )->name( 'job' );

Route::get( 'tjänster/betonghåltagning', function ()
{
    return view( 'services.concrete.index' );
} )->name( 'concrete' );

Route::get( 'tjänster/betonghåltagning/referenser', function ()
{
    return view( 'services.concrete.references' );
} )->name( 'references' );

Route::get( 'tjänster/städ', function ()
{
    return view( 'services.cleaning' );
} )->name( 'cleaning' );

Route::get( 'tjänster/företagsservice', function ()
{
    return view( 'services.company-service' );
} )->name( 'company-service' );

Route::get( 'tjänster/bygghjälpen', function ()
{
    return view( 'services.help' );
} )->name( 'help' );

Route::get( 'tjänster/bemanning', function ()
{
    return view( 'services.staff' );
} )->name( 'staff' );

Route::get( 'tjänster/transport', function ()
{
    return view( 'services.transport' );
} )->name( 'transport' );

Route::get( 'tjänster/utbildning', function ()
{
    return view( 'services.courses.index' );
} )->name( 'course' );

Route::get( 'tjänster/utbildning/adr-utbildning', function ()
{
    return view( 'services.courses.adr' );
} )->name( 'adr' );

Route::get( 'tjänster/utbildning/arbete-på-väg-utbildning', function ()
{
    return view( 'services.courses.roadwork' );
} )->name( 'roadwork' );

Route::get( 'tjänster/utbildning/bom-och-saxlift-utbildning', function ()
{
    return view( 'services.courses.lift' );
} )->name( 'lift' );

Route::get( 'tjänster/utbildning/första-hjälpen-utbildning', function ()
{
    return view( 'services.courses.first-help' );
} )->name( 'first-help' );

Route::get( 'tjänster/utbildning/hjullastare-utbildning', function ()
{
    return view( 'services.courses.wheel-loader' );
} )->name( 'wheel-loader' );

Route::get( 'tjänster/utbildning/fordonsmonterad-kranutbildning', function ()
{
    return view( 'services.courses.vehicle-crane' );
} )->name( 'vehicle-crane' );

Route::get( 'tjänster/utbildning/traversutbildning', function ()
{
    return view( 'services.courses.travers' );
} )->name( 'travers' );

Route::get( 'tjänster/utbildning/truckutbildning', function ()
{
    return view( 'services.courses.forklift' );
} )->name( 'forklift' );

Route::get( 'tjänster/utbildning/säkra-lyft-utbildning', function ()
{
    return view( 'services.courses.secure-lift' );
} )->name( 'secure-lift' );

Route::get( 'tjänster/utbildning/heta-arbeten', function ()
{
    return view( 'services.courses.warm-work' );
} )->name( 'warm-work' );


//
// Email
//
Route::post( '/kontakta-email', 'EmailController@contactEmail' );
Route::post( '/ansökan-email', 'EmailController@applicationEmail' );
