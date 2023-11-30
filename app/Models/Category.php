<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @mixin Builder;
 */

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function products() {
        return $this->hasMany(Product::class);
    }
}