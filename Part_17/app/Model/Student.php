<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name','email','photo', 'phone','address','district','section_id','course_id'
    ];
}
