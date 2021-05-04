<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function Commands(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

}
