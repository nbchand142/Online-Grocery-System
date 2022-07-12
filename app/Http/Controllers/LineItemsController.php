<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LineItemsController extends Controller
{
    function lineitem(){
        $item = new item();
        $item->order_id ="";
        $item->product_id ="";
        $item->quantity ="";
        $item->price_per_item ="";
        $item->total ="";
      //   $order->save;
    }

}
