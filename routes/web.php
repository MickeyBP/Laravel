<?php
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\FlightAirportController;
use App\Http\Controllers\FlightPricesController;
use App\Http\Controllers\FlightLocationsController;
use App\Http\Controllers\PassengerNumbers;
use App\Http\Controllers\FlightTimesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function (){
return view(view: 'users');
});

Route::get('/invoices',[InvoiceController::class,'index']);
Route::get('/invoices-create',[InvoiceController::class,'create']);

Route::get('/FlightBooking',[FlightAirportController::class,'index']);
Route::get('/FlightPrices',[FlightPricesController::class,'create']);
Route::get('/BookingLocations',[FlightLocationsController::class,'create']);
Route::get('/PassengerNumbers',[PassengerNumbers::class,'create']);
Route::get('/FlightTimes',[FlightTimesController::class,'index']);
