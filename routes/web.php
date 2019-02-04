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
