<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @method static paginate(int $int)
 * @method static where(string $string, int|string|null $id)
 * @method static findOrFail(int $id)
 * @property mixed departure_time
 * @property mixed quantity
 * @property mixed receiver
 * @property mixed arrival
 * @property mixed departure
 * @property mixed product
 * @property mixed|string arrival_time
 * @property int|mixed status
 */
class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'departure_time',
        'arrival_time',
        'quantity',
        'robot_id',
        'receiver',
        'departure',
        'arrival',
        'product',
        'status'
    ];

    public function robot(): HasOne
    {
        return $this->hasOne(Robot::class, 'robot_id');
    }

    public function receiver(): HasOne
    {
        return $this->hasOne(User::class, 'receiver');
    }

    public function departure(): HasOne
    {
        return $this->hasOne(DeliveryPoint::class, 'departure');
    }

    public function arrival(): HasOne
    {
        return $this->hasOne(DeliveryPoint::class, 'arrival');
    }

    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'product', 'id');
    }

    public function getMsgStatus(): string
    {
        $msg = ["En préparation",
            "Chargement en corus",
            "Acheminement en cours",
            "Arrivée à destination",
        ];

        return $msg[$this->status];
    }
}
