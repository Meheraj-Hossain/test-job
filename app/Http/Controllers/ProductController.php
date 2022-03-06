<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']    = 'Product list';
        $data['products'] = Product::with(['color', 'size'])->get();

        return view('admin.products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']  = 'Add new product information';
        $data['colors'] = Color::where('status', 'Active')->get();
        $data['sizes']  = Size::where('status', 'Active')->get();

        return view('admin.products.create', $data);
    }

    private function productImageUpload($request)
    {
        $path      = 'storage/image/product-image';
        $file_name = time() . rand('00000', '99999') . '.' . $request->image->getClientOriginalExtension();
        $request->file('image')->storeAs('public/image/product-image', $file_name);
        $fullpath = $path . '/' . $file_name;

        return $fullpath;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required',
            'gender' => 'required',
            'color'  => 'required',
            'size'   => 'required',
            'price'  => 'required|gt:1',
            'image'  => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);

        $product           = new Product();
        $product->name     = $request->name;
        $product->gender   = $request->gender;
        $product->color_id = $request->color;
        $product->size_id  = $request->size;
        $product->price    = $request->price;
        if ($request->image && $request->image != null) {
            $image          = $this->productImageUpload($request);
            $product->image = $image;
        }
        $product->save();
        session()->flash('message', 'Product information added successfully');

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title']   = 'Edit product information';
        $data['product'] = Product::findOrFail($id);
        $data['colors']  = Color::where('status', 'Active')->get();
        $data['sizes']   = Size::where('status', 'Active')->get();

        return view('admin.products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product      $product
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'   => 'required',
            'gender' => 'required',
            'color'  => 'required',
            'size'   => 'required',
            'price'  => 'required|gt:1',
            'image'  => 'mimes:jpeg,jpg,png|max:2048',
        ]);

        $product           = Product::findOrFail($id);
        $product->name     = $request->name;
        $product->gender   = $request->gender;
        $product->color_id = $request->color;
        $product->size_id  = $request->size;
        $product->price    = $request->price;
        if (isset($request->image) && $request->image != null) {
            $image = $this->productImageUpload($request);
            if ($image && $product->image && file_exists($product->image)) {
                $previous_image = public_path() . '/' . $product->image;
                unlink($previous_image);
            }
            $product->image = $image;
        }
        $product->update();
        session()->flash('message', 'Product information updated successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image && file_exists($product->image)) {
            unlink($product->image);
        }
        $product->delete();
        session()->flash('error', 'Product information deleted successfully');

        return redirect()->back();
    }
}
