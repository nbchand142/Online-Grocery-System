<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = "order";
    protected $fillable = ["user_id","subtotal","delivery_charge","tax","discount","total","status","order_note","financial_status"];

}
