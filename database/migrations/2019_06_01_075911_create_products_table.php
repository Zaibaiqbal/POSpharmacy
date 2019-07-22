<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('product_id');
            $table->string('product_name');
            $table->string('type');
            $table->double('cost_price');
            $table->double('sell_price');
            $table->unsignedInteger('invoice_id');
            $table->string('exp_date');
            $table->unsignedInteger('quantity');
            $table->string('product_desc')-> nullable();
            $table->unsignedInteger('supplier_name')->nullable();
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
}
