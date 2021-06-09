<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DinnerTo extends Model
{
    //
    use SoftDeletes;
    protected $table="foodtodinner";
    protected $fillable=[
        'food_id',
        'quantity'
    ];
}
