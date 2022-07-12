<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMetaData extends Model
{
    use HasFactory;
    protected $table="products_meta_data";
    protected $fillable=["product_id","name","value"];
}
