<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassengerNumbers extends Controller
{

    public function create()
    {

              $data='Flight Passenger Numbers';
              return view('passenger-numbers',['PassengerNumbers'=>$data]);
    }
}
 
