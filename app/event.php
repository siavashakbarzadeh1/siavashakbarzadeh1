<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $fillable = [
        'name', 'open_time', 'close_time',
        'status', 'contact_dep', 'contact_email',
        'contact_phone', 'contact_fax',
        'welcome_description',
        'company_link',
        'bando',

    ];
}
