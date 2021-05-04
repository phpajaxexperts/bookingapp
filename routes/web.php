<?php

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

Route::get('/', function () {
    return view('welcome');
});




Route::post('/accept-request', 'HomeController@acceptRequest');
Route::post('/generate-invoice', 'HomeController@generateInvoice');

Route::post('/get-pending-requests', 'HomeController@getPendingRequests');
Route::post('/get-upcoming-services', 'HomeController@getUpcomingServices');
Route::post('/get-pending-payments', 'HomeController@getPendingPayments');

Route::get('/reset-status', 'HomeController@resetStatus');

Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    //Artisan::call('config:cache');

    return "Cleared!";

});