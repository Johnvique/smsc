<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
    	'fname',
    	'mname',
    	'lname',
    	'idno',
    	'tscno'
    ];
}
