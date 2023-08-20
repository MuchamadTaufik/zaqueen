<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.product.index', [
            'posting' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.product.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:products',
            'price' => 'required|max:10',
            'material' => 'required',
            'size' => 'required',
            'category_id' => 'required',
            'image1' => 'image|file|max:1024',
            'image2' => 'image|file|max:1024',
            'image3' => 'image|file|max:1024',
            'description' => 'required'
        ]);

        if($request->file('image1')) {
            $validateData['image1'] = $request->file('image1')->store('product-images');
        }

        if($request->file('image2')) {
            $validateData['image2'] = $request->file('image2')->store('product-images');
        }

        if($request->file('image3')) {
            $validateData['image3'] = $request->file('image3')->store('product-images');
        }

        Product::create($validateData);

        return redirect('/dashboard/product')->with('success', 'New Product has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('dashboard.product.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboard.product.edit', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'name' => 'required|max:255',
            'price' => 'required|max:10',
            'material' => 'required',
            'size' => 'required',
            'category_id' => 'required',
            'image1' => 'image|file|max:1024',
            'image2' => 'image|file|max:1024',
            'image3' => 'image|file|max:1024',
            'description' => 'required'
        ];

        if($request->slug != $product->slug) {
            $rules['slug'] = 'required|unique:products';
        }

        $validateData = $request->validate($rules);

        if($request->file('image1')) {
            if($request->oldImage1){
                Storage::delete($request->oldImage1);
            }

            $validateData['image1'] = $request->file('image1')->store('product-images');
        }

        if($request->file('image2')) {
            if($request->oldImage2){
                Storage::delete($request->oldImage2);
            }

            $validateData['image2'] = $request->file('image2')->store('product-images');
        }

        if($request->file('image3')) {
            if($request->oldImage3){
                Storage::delete($request->oldImage3);
            }

            $validateData['image3'] = $request->file('image3')->store('product-images');
        }

        Product::where('id', $product->id)
            ->update($validateData);

        return redirect('/dashboard/product')->with('success', 'Product has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if($product->image1){
            Storage::delete($product->image1);
        }

        if($product->image2){
            Storage::delete($product->image2);
        }

        if($product->image3){
            Storage::delete($product->image3);
        }

        Product::destroy($product->id);

        return redirect('/dashboard/product')->with('success', 'Product has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Product::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
