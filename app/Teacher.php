<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';

    protected $fillable = [
        'name',
        'father_name',
        'mother_name',
        'dob',
        'joining_date',
        'dept'
    ];
}
