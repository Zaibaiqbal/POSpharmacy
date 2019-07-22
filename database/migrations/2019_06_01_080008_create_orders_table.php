<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
           
            
           
            $table->string('product_name')->nullable();
            $table->string('type')->nullable();
            $table->unsignedInteger('cost_price')->nullable();
            $table->date('exp_date')->nullable();
            $table->unsignedInteger('quantity')->nullable();
            $table->unsignedInteger('invoice_id')->nullable();
            $table->string('supplier_name')->nullable();
            $table->date('date')->default(date("Y-m-d H:i:s"));
            $table->string('user_id')->nullable();
        
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
        Schema::dropIfExists('orders');
    }
}
