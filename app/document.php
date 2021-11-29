<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class document extends Model
{
    protected $fillable = [

        'type', 'number',
        'releasefrom', 'releasetime',
        'path',
        'user_id',

        'expiredtime',

    ];
}
