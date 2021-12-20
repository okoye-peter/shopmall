<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function index()
    {
        $wishlists = auth()->user()->wishlists->load('product');
        return view('wishlist', compact('wishlists'));
    }

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
        $user = auth()->user();

        if($request->ajax()){
            $data = $request->validate([
                'product_id' => 'required|exists:products,id',
            ]);

            $user->wishlists()->where('product_id', $data['product_id'])->delete();
            return $user->wishlists->count();
        }
        $data = $request->validate([
            'id' => 'required|exists:wish_lists,id',
        ]);
        $user->wishlists()->where('id', $data['id'])->delete();

        return back();        
    }
}
