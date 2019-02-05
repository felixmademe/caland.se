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
    return view( 'about' );
} )->name( 'about' );

Route::get( 'jobb', function ()
{
    return view( 'job' );
} )->name( 'job' );

Route::get( 'betonghåltagning', function ()
{
    return view( 'services/concrete/index' );
} )->name( 'concrete' );

Route::get( 'betonghåltagning/referenser', function ()
{
    return view( 'services/concrete/references' );
} )->name( 'references' );

Route::get( 'städ', function ()
{
    return view( 'services/cleaning' );
} )->name( 'cleaning' );

Route::get( 'företagsservice', function ()
{
    return view( 'services/company-service' );
} )->name( 'company-service' );

Route::get( 'utbildning', function ()
{
    return view( 'services/education' );
} )->name( 'education' );

Route::get( 'bygghjälpen', function ()
{
    return view( 'services/help' );
} )->name( 'help' );

Route::get( 'bemanning', function ()
{
    return view( 'services/staff' );
} )->name( 'staff' );

Route::get( 'transport', function ()
{
    return view( 'services/transport' );
} )->name( 'transport' );
