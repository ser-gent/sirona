<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Exception;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::where('stock', '>', '0')
            ->orderBy('name')
            ->paginate(20);
        return view('products.index', compact('products'));
    }


    public function create()
    {
        return view('products.create');
    }


    public function store(ProductRequest $request): RedirectResponse
    {
        Product::create($request->all());
        return redirect()->route('product.index')
            ->with('sucess', 'Votre produit a été ajouté');
    }


    public function show(int $id)
    {
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }


    //public function edit(Product $product)
    public function edit(int $id)
    {
        //$product = Product::findOrFail($product);
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }


    public function update(ProductRequest $request, Product $product): RedirectResponse
    {
        $product = Product::findOrFail($product);
        $product->update($request->all());
        return redirect()->route('product.index')
            ->with('success', 'La modifiaction a été enregistré');
    }


    public function destroy(Product $product): RedirectResponse
    {
        try {
            $product->delete();
            return redirect()->route('product.index')
                ->with('success', 'Elément supprimé');
        } catch (Exception $e) {
            return redirect()->route('product.index')
                ->with('error', 'Erreur ! Element non supprimé : ' . $e);
        }
    }
}
