<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return redirect()->route('home');
});

Route::prefix('website')->group(function () {
    Route::get('/home', 'FrontendController@index')->name('home');
    Route::get('/service','FrontendController@service')->name('service');
    Route::get('/tax-advisory','FrontendController@taxadvisory')->name('taxadvisory');
    Route::get('/accounting','FrontendController@accounting')->name('accounting');
    route::get('/human-resource-adminstration','FrontendController@hra')->name('hra');
    Route::get('/payroll-service','FrontendController@payroll')->name('payroll');
    Route::get('/tax-return','FrontendController@tax')->name('taxreturn');
    Route::get('/smsf','FrontendController@smsf')->name('smsf');
    Route::get('/consulting','FrontendController@consulting')->name('consulting');
    Route::get('/aboutus','FrontendController@aboutus')->name('aboutus');
    Route::get('/testimonials','FrontendController@testimonials')->name('testimonials');

    //contactus
    Route::get('/contactus','ContactusController@contactus')->name('contactus');
});
