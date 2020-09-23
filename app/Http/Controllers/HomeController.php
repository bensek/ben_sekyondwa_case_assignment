<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\OrdersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Order;
use Session;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function dashboard()
    {
    	Session(['title'=>'Dashboard']);

        // Get orders between dates
        $from = Carbon::parse('02/01/2016');
        $to = Carbon::parse('02/01/2016');
        $orders = Order::whereBetween('order_date', [$from, $to])->get();
        //return response()->json($orders);
        $total_profit = 0.0;
        foreach($orders as $order){
            $total_profit = $total_profit + $order->total_profit;
        }
        
        $top_items = Order::whereBetween('order_date', [$from, $to])
                    ->groupBy('item_type')
                    ->selectRaw('*, sum(total_profit) as sum')
                    ->orderBy('sum', 'desc')
                    ->take(5)
                    ->get();
        return view('dashboard')->with(['orders'=>$orders, 'total_profit' => $total_profit, 'top_items'=> $top_items]);
}

    public function get_stats(Request $request)
    {
        // Get orders between dates
        $from = Carbon::parse($request->start_date);
        $to = Carbon::parse($request->end_date);
        $orders = Order::whereBetween('order_date', [$from, $to])->get();
        //return response()->json($orders);
        $total_profit = 0.0;
        foreach($orders as $order){
            $total_profit = $total_profit + $order->total_profit;
        }
        $top_items = Order::whereBetween('order_date', [$from, $to])
                    ->groupBy('item_type')
                    ->selectRaw('*, sum(total_profit) as sum')
                    ->orderBy('sum', 'desc')
                    ->take(5)
                    ->get();

        return view('dashboard')->with(['orders'=>$orders, 'total_profit' => $total_profit, 'top_items'=> $top_items]);
    }

    public function get_reports()
    {
    	Session(['title'=>'Reports']);
    	$orders = Order::get()->take(100);
    	return view('reports')->with(['orders'=>$orders]);
    }

    public function import()
    {
    	ini_set('memory_limit', '-1');
		ini_set('max_execution_time', 300); 
    	Excel::import(new OrdersImport,request()->file('file'));
        
        Session::flash('message', 'Your records have been uploaded successfully'); 
        Session::flash('alert-class', 'alert-success'); 
        return back();
    }
}
