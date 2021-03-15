<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];


}
