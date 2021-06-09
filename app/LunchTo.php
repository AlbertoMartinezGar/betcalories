<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LunchTo extends Model
{
    use SoftDeletes;
    protected $table="foodtolunch";
    protected $fillable=[
        'food_id',
        'quantity'
    ];
}
