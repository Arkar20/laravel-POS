<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Excel;
use App\Exports\CustomerExport;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.index');
    }
    public function export()
    {
        // Excel::download('customer.csv', function () {});
        // return (new CustomerExport())->download('customer.csv');
    }
}
