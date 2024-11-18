<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightLocationsController extends Controller
{

    public function create()
    {

              $data='Flight Location Places';
              $data= 'Cape Town';
              return view('FlightLocations',['BookingLocations'=>$data]);
    }
}

