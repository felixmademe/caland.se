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
    return view( 'services' );
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

Route::get( 'tjänster/utbildning', function ()
{
    return view( 'services.education' );
} )->name( 'education' );

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

//
// Email
//
Route::get( 'mail', function()
{
    return new App\Mail\Contact();
} );

Route::post( '/kontakta-email', 'EmailController@contactEmail' );
Route::post( '/ansökan-email', 'EmailController@applicationEmail' );
