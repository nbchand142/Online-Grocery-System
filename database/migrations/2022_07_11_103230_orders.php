<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(){
        Schema::create("order",function(Blueprint $table){
            $table->id(); 
            $table->string('user_id');
            $table->string('subtotal');
            $table->string('delivery_charge');
            $table->string('tax');
            $table->string('discount');
            $table->string('total');
            $table->string('status');
            $table->string('order_note');
            $table->string('financial_status');
            $table->timestamps();

        });
    }

    public function down()
    {
       
    }
};
