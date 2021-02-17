<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

/**
 *  Get invoices view
 *
*/

public function index(){
    return view('invoices.index');
}
}
