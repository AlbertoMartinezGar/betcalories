<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lunch extends Model
{
    //
    use SoftDeletes;
    protected $table="lunch";
    protected $fillable=[
        'foodto_id',
    ];
}
