<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assist extends Model
{
    use HasFactory;

    protected $table = 'asistencias';

    protected $fillable = [
        'user_id',
        'fecha',
        'hora_entrada',
        'hora_salida',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
