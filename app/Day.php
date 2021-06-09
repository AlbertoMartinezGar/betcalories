<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Day extends Model
{
    //
    use SoftDeletes;
    protected $table="day";
    protected $fillable=[
        'day',
    ];
}
