<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
    	'full_name',
    	'dob',
    	'course_id',
    	'image',
    	'gender',
    	'email',
    	'idno'
    ];
}
