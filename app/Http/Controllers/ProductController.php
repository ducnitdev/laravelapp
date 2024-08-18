<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Exception;

class ProductController extends Controller
{
    // Number of products per page
    protected $perPage = 30;

    public function index()
    {
        // Order by ID in ascending order and apply pagination
        $data['products'] = Product::orderBy('id', 'asc')->paginate($this->perPage);
        return view('product.index', $data);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(ProductRequest $request)
    {
        try {
            $product = Product::create($request->all());

            $notification = array(
                'message' => 'Product saved successfully!',
                'alert-type' => 'success'
            );

            return redirect()->route('products.index')->with($notification);

        } catch (Exception $e) {
            $notification = array(
                'message' => $e->getMessage(),
                'alert-type' => 'error'
            );

            return redirect()->route('products.index')->with($notification);
        }
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        $data['product'] = $product;
        return view('product.edit', $data);
    }

    public function update(ProductRequest $request, Product $product)
    {
        try {
            $product->update($request->all());

            $notification = array(
                'message' => 'Product updated successfully!',
                'alert-type' => 'success'
            );

            return redirect()->route('products.index')->with($notification);
        } catch (Exception $e) {
            $notification = array(
                'message' => $e->getMessage(),
                'alert-type' => 'error'
            );
            return redirect()->route('products.index')->with($notification);
        }
    }

    public function destroy(Product $product)
    {
        try {
            $product->delete();

            $notification = array(
                'message' => 'Product deleted successfully!',
                'alert-type' => 'success'
            );

            return redirect()->route('products.index')->with($notification);
        } catch (Exception $e) {
            $notification = array(
                'message' => $e->getMessage(),
                'alert-type' => 'error'
            );
            return redirect()->route('products.index')->with($notification);
        }
    }
}
