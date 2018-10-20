<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formula extends Model
{
    protected $fillable = [
        'name', 'formula', 'priority', 'attach'
    ];
}
