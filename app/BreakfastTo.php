<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BreakfastTo extends Model
{
    //
    use SoftDeletes;
    protected $table="foodtobreakfast";
    protected $fillable=[
        'food_id',
        'quantity'
    ];
}
