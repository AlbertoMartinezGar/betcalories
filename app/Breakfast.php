<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Breakfast extends Model
{
    use SoftDeletes;
    protected $table="breakfast";
    protected $fillable=[
        'foodto_id',
    ];
}
