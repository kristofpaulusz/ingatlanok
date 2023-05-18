<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingatlanok extends Model
{
    protected $table = 'ingatlanok';

    protected $fillable = [
        'kategoria',
        'leiras',
        'hirdetesDatuma',
        'tehermentes',
        'ar',
        'kepUrl'
    ];
}
