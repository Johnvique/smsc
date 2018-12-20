<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
    	'name',
    	'qualification',
    	'mode',
    	'duration',
    	'fee'
    ];
}
