<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lineItem extends Model
{
    use HasFactory;
    protected $table = "lineItems";
    protected $fillable = ["order_id","product_id","quantity","price_per_item","total"];

}
