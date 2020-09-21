<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\OrdersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Order;

class HomeController extends Controller
{
    public function index()
    {
    	$orders = Order::get()->take(100);
    	return view('index')->with(['orders'=>$orders]);
    }

    public function import()
    {
    	ini_set('memory_limit', '-1');
		ini_set('max_execution_time', 300); 
    	Excel::import(new OrdersImport,request()->file('file'));
           
        return back();
    }
}
