<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anagrafica extends Model
{
    protected $fillable = [
        'user_id', 'name', 'familyname',
        'gender', 'statodinascita', 'codicefiscale',
        'Datadinascita', 'Comunedinascita', 'Cellulare',
        'email', 'Pec', 'RESIDENZA',
        'DOMICILIO',
    ];
}
