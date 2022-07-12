<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function products(){
        $product = new product();
        $product->name ="";
        $product->category_id ="";
        $product->price ="";
        $product->description ="";
        $product->stock ="";
        $product->active ="";
      //   $order->save;
    }
}
