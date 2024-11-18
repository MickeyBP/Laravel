<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightAirportController extends Controller

{

    public function index()
    {

              $data='Flight Booking System';
              return view('FlightAirpot',['Booking'=>$data]);
    }
}