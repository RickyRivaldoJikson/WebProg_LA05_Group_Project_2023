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
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('productID');
            $table->string('productName');

            $table->integer('price');
            $table->string('description');

            $table->integer('productQuantity');
            $table->integer('productRating');
            $table->integer('wishFlag')->default(0); // 1 untuk memasukkan produk ke wishlist dan mewarnai hati sebagai icon wishlist menjadi merah
            $table->unsignedBigInteger('brandID');
            $table->foreign('brandID')->references('brandID')->on('brands');
            $table->unsignedBigInteger('categoryID');
            $table->foreign('categoryID')->references('categoryID')->on('categories');
            $table->unsignedBigInteger('transactionID');
            $table->foreign('transactionID')->references('transactionID')->on('transactions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
