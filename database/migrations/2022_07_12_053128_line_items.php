<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(){
        Schema::create("lineItems",function(Blueprint $table){
            $table->id(); 
            $table->string('order_id');
            $table->string('product_id');
            $table->string('quantity');
            $table->string('price_per_item');
            $table->string('total');
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
        //
    }
};
