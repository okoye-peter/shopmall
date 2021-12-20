<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }


    public function isInCart()
    {
        return $this->carts()->where('user_id', auth()->id())->exists();
    }

    public function wishlists()
    {
        return $this->hasMany(WishList::class);
    }


    public function isInWishlist()
    {
        return $this->wishlists()->where('user_id', auth()->id())->exists();
    }
}
