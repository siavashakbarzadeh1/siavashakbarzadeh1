<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = [

        'type', 'number',
        
        'path',
        'user_id',

        

    ];
}
