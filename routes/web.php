<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
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
Route::get('/send-mail', [MailController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::view('/car-battery','carbattery');
Route::view('/bike-battery','bikebattery');
Route::view('/truck-battery','truckbattery');
Route::view('/other-battery','otherbattery');

Route::view('/place-order','order');
Route::view('/view-product','product');

Route::view('/searchItemRedirect','showsearcheditems');