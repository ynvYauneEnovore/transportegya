<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $table = 'route';

    protected $fillable = [
        'user_id',
        'route_name',
        'description',
        'start_location',
        'end_location',
        'active',
    ];
}
