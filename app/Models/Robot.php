<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, Robot $robot)
 * @property mixed statut_code
 */
class Robot extends Model
{
    use HasFactory;

    protected $fillable = [
        'robot_code',
        'statut_code',
        'battery_level',
        'nb_km',
    ];

}
