<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
       
            $table->unsignedInteger('product_id')->nullable();
            $table->string('product_name')->nullable();
            $table->date('trans_date')->default(date("Y-m-d H:i:s"));
            $table->unsignedInteger('transaction_id')->nullable();
            $table->unsignedInteger('sell_price')->nullable();
            $table->unsignedInteger('quantity')->nullable();
            $table->unsignedInteger('subtotal')->nullable();
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
        Schema::dropIfExists('sales');
    }
}
