<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Food extends Model
{
    use SoftDeletes;
    protected $table="food";
    protected $fillable=[
        'name',
        'carbs',
        'proteins',
        'fats'
    ];
}