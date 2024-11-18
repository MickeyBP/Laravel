<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightPricesController extends Controller
{

    public function create()
    {

              $data='Flight Prices';
              $data= 'Local R1500';
              return view('FlightPrices',['Prices'=>$data]);
    }
}
