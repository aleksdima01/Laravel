<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::create([
            'sku' => $request->get('sku'),
            'name' => $request->get('name'),
            'price' => $request->get('price'),
        ]);
        return response()->json($product, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (Product::where('id', $id)->exists()) {
            return Product::where('id', $id)->first();
        } else {
            // return response()->json('В БД нет продукта c таким ID!');
            return 'В БД нет продукта c таким ID!';
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (Product::where('id', $id)->exists()) {
            $product = Product::where('id', $id)->first();
        } else {
            // return response()->json('В БД нет продукта c таким ID!');
            return 'В БД нет продукта c таким ID!';
        }
        $product->sku = $request->get('sku');
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->save();
        return response()->json($product, 202);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([], 204);
    }
}
