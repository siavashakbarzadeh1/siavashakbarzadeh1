<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questionary extends Model
{
    protected $fillable = [

        'type', 'number',
        
        'path',
        'user_id',

        

    ];
}
