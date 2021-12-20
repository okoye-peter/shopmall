<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function store(Request $request)
    {
        $user = auth()->user();
        $data = $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        $product = Product::find($data['product_id']);
        if (!$product->isInWishlist()) {
            $user->wishlists()->create($data);
        }
        return $user->wishlists->count();
    }

    public function checkIfProductIsInWishlist(Product $product)
    {
        $user = auth()->user();
        return response(['available' => (int)$user->wishlists->contains('product_id', $product->id)], 200);
    }


    public function destroy(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        $user = auth()->user();
        $user->wishlists()->where('product_id', $data['product_id'])->delete();
        return $user->wishlists->count();
    }
}
