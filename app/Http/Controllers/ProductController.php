<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('files')->paginate(4);
        return view('shop', compact('products'));
    }

    public function show(Product $product)
    {
        $product->load('files');
        return view('product', compact('product'));
    }

    public function create()
    {
        $products = Product::with('files')->paginate(4);
        return view('admin.products', compact('products'));
    }

    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        DB::transaction(function () use ($data,$request) {
            collect($data['name'])->each(function($item, $key) use ($data,$request){
                $filename = uniqid().$data['avatar'][$key]->getClientOriginalName();
                $data['avatar'][$key]->move(public_path('images/uploads/products/'), $filename);
                $product = Product::create([
                    'name' => $item,
                    'description' => $data['description'][$key],
                    'price' => $data['price'][$key],
                    'quantity' => $data['quantity'][$key],
                    'url' => 'images/uploads/products/'. $filename
                ]);
                if($request->has("ids_$key")){
                    collect(explode(',',$request->get("ids_$key")))->each(function($id) use ($product){
                        File::find($id)->update(['product_id'=>$product->id]);
                    });
                }

            });
        });
        // delete files that doesn't belong to a product
        $files = File::where('product_id', null)->get();
        $files->each(function ($file, $index) {
            if (file_exists($file->url)) {
                unlink($file->url);
                $file->delete();
            }
        });
        
        return back()->with('success', 'Product(s) created successfully!');
    }
}
