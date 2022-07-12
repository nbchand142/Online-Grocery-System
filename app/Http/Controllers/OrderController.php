<?php

namespace App\Http\Controllers;
use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function neworders(){
      $order = new order();
      $order->user_id ="";
      $order->subtotal ="";
      $order->delivery_charge ="";
      $order->tax ="";
      $order->discount ="";
      $order->total ="";
      $order->status ="";
      $order->order_note ="";
      $order->financial_status ="";
    //   $order->save;
    }
}
