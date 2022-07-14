<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineItem extends Model
{
    use HasFactory;
    protected $table = "lineItems";
    protected $fillable = ["order_id","product_id","quantity","price_per_item","total"];

    function order(){
        return $this->belongsTo(Order::class);
    }

    function product(){
        return $this->belongsTo(Product::class);
    }

}
