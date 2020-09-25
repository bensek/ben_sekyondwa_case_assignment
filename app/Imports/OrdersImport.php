<?php

namespace App\Imports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithStartRow;

class OrdersImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {        
        return new Order([
            'region' => $row[0],
            'country' => $row[1],
            'item_type' => $row[2],
            'channel' => $row[3],
            'priority' => $row[4],
            'order_date' => Carbon::parse($row[5]),
            'order_id' => $row[6],
            'ship_date' => $row[7],
            'units_sold' => intval($row[8]),
            'unit_price' => $row[9],
            'unit_cost' => $row[10],
            'total_revenue' => $row[11],
            'total_cost' => $row[12],
            'total_profit' => $row[13],
        ]);
    }

    /**
    * @return int
    */
    public function startRow(): int
    {
        return 2;
    }
}
