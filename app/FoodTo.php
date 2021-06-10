<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FoodTo extends Model
{
    use SoftDeletes;
    protected $table="foodcount";
    protected $fillable=[
        'quantity',
        'food_id',
        'foodTo_id'
    ];
}
