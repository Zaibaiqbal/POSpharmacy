<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
    
                $table->bigIncrements('id');
                $table->unsignedInteger('supplier_id');
                $table->string('supplier_name');
                $table->string('address');
                $table->string('city');
                $table->unsignedInteger('pin');
                $table->unsignedInteger('tel_no');
                $table->unsignedInteger('fax_no')->nullable();
                $table->string('email');
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
        Schema::dropIfExists('suppliers');
    }
}
