<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $fillable = ["user_id","subtotal","delivery_charge","tax","discount","total","status","order_note","financial_status"];

    public function user(){
        return $this->belongsTo(User::class);
    }
    function line_item(){
        return $this->hasMany(LineItem::class);
    }
}
