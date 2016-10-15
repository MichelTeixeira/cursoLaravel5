<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Product;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class ProductsController extends Controller
{
    private $productModel;

    public function __construct(Product $productModel)
    {
    	$this->productModel = $productModel;
    }

    public function index()
    {
    	$products = $this->productModel->all();

    	return view('products.index', compact('products'));
    }

    public function create()
    {
    	return view('products.create');
    }

    public function store(Requests\ProductRequest $request)
    {
        $product = $this->productModel->fill($request->all());
    	$product->save();

    	return redirect()->route('products');
    }

    public function destroy($id)
    {
    	$this->productModel->find($id)->delete();
    	return redirect()->route('products');
    }

    public function edit($id)
    {
    	$product = $this->productModel->find($id);

    	return view('products.edit', compact('product'));
    }

    public function update(Requests\ProductRequest $request, $id)
    {
    	$product = $request->all();
        if(!isset($product['featured']))
            $product['featured'] = false;
        if(!isset($product['recommend']))
            $product['recommend'] = false;

        $this->productModel->find($id)->update($product);

    	return redirect()->route('products');
    }
}
