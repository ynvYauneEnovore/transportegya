<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aporte extends Model
{
    use HasFactory;

    protected $table = 'aportes';

    protected $fillable = [
        'afiliado_id',
        'monto',
    ];
}
