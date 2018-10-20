<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $fillable = [
         'song', 'artist', 'album', 'text', 'priority', 'attach'
    ];
}
