<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\TicketController;

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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'jwt.auth'], function () {
    // Protected routes for authenticated users
    Route::get('/airports', [AirportController::class, 'index']);
    
    Route::post('/flights', [FlightController::class, 'store']);
    Route::get('/flights', [FlightController::class, 'index']);
    Route::put('/flights/{flight}/tickets/update-price', [FlightController::class, 'updateTicketPrices']);
    Route::get('/flights/{flight}/passengers', [FlightController::class, 'passengers']);

    Route::post('/tickets', [TicketController::class, 'store']);
    Route::get('/tickets/{cpf}', [TicketController::class, 'getTicketsByCpf']);

    
    Route::get('/flights/{flight}', 'FlightController@show');
    Route::put('/flights/{flight}', 'FlightController@update');
    Route::delete('/flights/{flight}', 'FlightController@destroy');
    Route::put('/flights/{flight}/ticket-prices', 'TicketPriceController@update');
    Route::post('/flights/{flight}/tickets', 'TicketController@store');
    
    Route::get('/tickets/{cpf}', 'TicketController@showByCpf');
    Route::delete('/tickets/{ticket}', 'TicketController@destroy');
    Route::get('/tickets/{ticket}/voucher', 'TicketController@voucher');
    Route::get('/tickets/{ticket}/baggage-label', 'TicketController@baggageLabel');
});
