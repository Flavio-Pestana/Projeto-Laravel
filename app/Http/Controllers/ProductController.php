<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('createProduct');
    }

    public function storage(ProductRequest $request)
    {
        $data = $request->validated();

        $product = new Product($data);

        /*$product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');*/

        $product->save();

        return redirect()->route('show', ['id' => $product->id])->with('success', 'Produto criado com sucesso.');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('showCreatedProduct', ['product' => $product]);
    }

    public function index()
    {
        $products = Product::all();

        return view('products', ['products' => $products]);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('editProduct', ['product' => $product]);
    }

    public function update(ProductRequest $request, $id)
    {
        $data = $request->validated();

        $product = Product::findOrfail($id);

        $product->fill($data);

        /*$product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');*/

        $product->save();

        return redirect()->route('index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('index')->with('success', 'Produto excluído com sucesso.');
    }
}
