<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
         'nation', 'full_name', 'gender', 'working_place', 'occupation', 'birthday', 'image', 'add_information', 'priority', 'attach'
    ];
}
