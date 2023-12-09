<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;

/**
 * @mixin Builder;
 */

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['code', 'title', 'image', 'description', 'weight', 'price', 'category_id'];

    public function getImageAttribute() {
        if (!$this->attributes['image']) {
            return '/img/products/no_image.png';
        }

        return Storage::url($this->attributes['image']);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function getTotalPrice() {
        if (!is_null($this->pivot->quantity)) {
            return $this->pivot->quantity * $this->price;
        }

        return $this->price;
    }

    public static function countProductsInCart() {
        $orderId = session('orderId');
        $order = Order::find($orderId);

        if (is_null(Order::find($orderId))) {
            return 0;
        }

        $sum = 0;

        foreach ($order->products as $product) {
            $sum += $product->pivot->quantity;
        }

        return $sum;
    }
}
