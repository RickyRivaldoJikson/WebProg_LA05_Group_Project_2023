<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     // in Laravel, the table can't have multiple primary keys
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('orderDetailsID');
            $table->integer('price');
            $table->decimal('disc', 3, 2);
            $table->integer('orderQuantity');
            $table->unsignedBigInteger('orderID');
            $table->foreign('orderID')->references('orderID')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
};
