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
        return view('dashboard');
}

    public function get_stats(Request $request)
    {
        // Get orders between dates
        $from = Carbon::parse($request->start_date);
        $to = Carbon::parse($request->end_date);
        $orders = Order::whereBetween('order_date', [$from, $to])->get();
        $total_profit = 0.0;
        foreach($orders as $order){
            $total_profit = $total_profit + $order->total_profit;
        }
        $total_sales = count($orders);


        $top_items = Order::whereBetween('order_date', [$from, $to])
                    ->groupBy('item_type')
                    ->selectRaw('*, sum(total_profit) as sum')
                    ->orderBy('sum', 'desc')
                    ->take(5)
                    ->get()->toArray();

        for($i = 0; $i < count($top_items); $i++){
            $top_items[$i]['counter'] = $i+1;
            $top_items[$i]['sum'] = number_format($top_items[$i]['sum'], 2, '.', ',');
        }

        $data = [
                'total_profit' => number_format($total_profit, 2, '.', ','),
                'total_sales' => number_format($total_sales ),
                'top_items' => $top_items
        ];

        return response()->json($data);
    }

    public function get_reports()
    {
    	Session(['title'=>'Reports']);
    	$orders = Order::get();
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
