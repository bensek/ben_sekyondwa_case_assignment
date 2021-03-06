<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [ 
    	'region',
	    'country',
	    'item_type',
	    'channel',
	    'priority',
	    'order_date',
	    'order_id',
	    'ship_date',
	    'units_sold',
	    'unit_price',
	    'unit_cost', 
	    'total_revenue',
	    'total_cost',
	    'total_profit'
	];

	public $timestamps = false;

	protected $casts = ['order_date' => 'date'];

}
