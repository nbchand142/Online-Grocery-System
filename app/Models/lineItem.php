<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lineItem extends Model
{
    use HasFactory;
    protected $table = "lineItems";
    protected $fillable = ["orderId","productId","quantity","pricePerItem","total"];

}
