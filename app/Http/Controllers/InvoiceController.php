<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    //
    public function index()
    {
        $data = Invoice::all();
        // $data='514';
        return view('invoices',['name'=>$data]);
    }


public function create(){
    Invoice::create([
        'title' => 'My name is Mildred'
    ]);
    return view(('invoiceCreate'));
}
}