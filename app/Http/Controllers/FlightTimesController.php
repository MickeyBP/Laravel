<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightTimesController extends Controller
{    
public function index()
    {

              $data='Flight Booking Times';
              return view('flight-times',['flightTimes'=>$data]);
    }
    }
