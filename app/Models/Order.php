<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @mixin Builder;
 */

class Order extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function products() {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    public function getTotalPrice() {
        $sum = 0;

        foreach ($this->products as $product) {
            $sum += $product->getTotalPrice();
        }

        return $sum;
    }
}
