<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dinner extends Model
{
    //
    use SoftDeletes;
    protected $table="dinner";
    protected $fillable=[
        'foodto_id',
    ];
}
