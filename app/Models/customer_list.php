<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer_list extends Model
{
    use HasFactory;
    protected $table="customer_list";
    protected $fillable=["name","contact","address"];

}
