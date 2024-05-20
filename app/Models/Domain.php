<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $fillable = [
        'name',
        'registrar',
        'registrar_url',
        'expiration',
        'status',
    ];
}
