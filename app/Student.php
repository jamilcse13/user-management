<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'name',
        'father_name',
        'mother_name',
        'dob',
        'admission_date',
        'course'
    ];
}
