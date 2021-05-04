<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @method static create(array $all)
 * @method static findOrFail(Product $product)
 * @method static find(int $id)
 * @method static where(string $string, string $string1, string $string2)
 * @method static sortBy(string $string)
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'length',
        'width',
        'height',
        'weight',
        'stock',
        'location',
    ];

    public function location(): HasOne
    {
        return $this->hasOne(DeliveryPoint::class);
    }

    public function orders(): BelongsTo
    {
        return $this->belongsTo(Order::class, '');
    }

}
