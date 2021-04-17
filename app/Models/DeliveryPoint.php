<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate(int $int)
 * @method static findOrFail(DeliveryPoint $deliveryPoint)
 * @method static find(int $id)
 * @method static create(array $all)
 */
class DeliveryPoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'longitude',
        'latitude',
        'floor',
        'have_charging_station',
    ];
}
