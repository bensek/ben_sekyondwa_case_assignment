<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->string('order_date');
            $table->string('ship_date');
            $table->string('priority');
            $table->string('units_sold');
            $table->string('unit_price');
            $table->string('unit_cost');
            $table->string('total_revenue');
            $table->string('total_cost');
            $table->string('total_profit');
            $table->string('item_type');
            $table->string('region');
            $table->string('country');
            $table->string('channel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
