<?php

namespace App\Imports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\ToModel;

class OrdersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Excel::filter('chunk')->load(database_path('seeds/csv/users.csv'))->chunk(250, function($results) {
        //     foreach ($results as $row) {
        //         $user = User::create([
        //             'username' => $row->username,
        //             // other fields
        //         ]);
        //     }
        // });
        
        return new Order([
            'region' => $row[0],
            'country' => $row[1],
            'item_type' => $row[2],
            'channel' => $row[3],
            'priority' => $row[4],
            'order_date' => $row[5],
            'order_id' => $row[6],
            'ship_date' => $row[7],
            'units_sold' => $row[8],
            'unit_price' => $row[9],
            'unit_cost' => $row[10],
            'total_revenue' => $row[11],
            'total_cost' => $row[12],
            'total_profit' => $row[13],
        ]);
    }
}
