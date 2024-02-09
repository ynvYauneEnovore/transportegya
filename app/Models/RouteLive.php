<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteLive extends Model
{
    use HasFactory;

    protected $table = 'route_live';

    protected $fillable = [
        'user_id',
        'route_id',
        'assists_id',
    ];
}
