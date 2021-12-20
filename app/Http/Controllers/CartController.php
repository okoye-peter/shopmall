<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $user = auth()->user();
        $data = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'sometimes|integer|min:1',
        ]);

        $product = Product::find($data['product_id']);
        if(!$product->isInCart()){
            $user->carts()->create($data);
        }
        return $user->carts->count();

    }

    public function checkIfProductIsInCart(Product $product)
    {
        $user = auth()->user();
        return response(['available' => (int)$user->carts->contains('product_id', $product->id)], 200);
    }

    public function update(Request $request, Product $product)
    {
        $user = auth()->user();
        $data = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);
        $cart = $user->carts->where('product_id', $product->id)->first();
        $cart->update($data);
        return $user->carts->count();
    }

    public function index()
    {
        $carts = auth()->user()->carts->load('product');
        return view('cart', compact('carts'));
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();
        return back();
    }
    
     
}
