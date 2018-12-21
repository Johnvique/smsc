<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
    	'name',
    	'image',
    	'position',
    	'email',
    	'idno',
    	'password'
    ];
}
