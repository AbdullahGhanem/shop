<?php

namespace App\Http\Controllers;

use Image;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::all();

        return view('back.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::lists('id');
        return view('back.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $product = Product::create([
            'en'  => [
                'title' => $request->input('title'),
                'description' => $request->input('description'),
            ],
            'ar'  => [
                'title' => $request->input('title_ar'),
                'description' => $request->input('description_ar'),
            ],
            'price' => $request->input('price'),
            'amount' => $request->input('amount')
        ]);

        if($request->hasFile('img'))
        {
  
            $image = $request->file('img');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('img/products/' . $filename);
 
                Image::make($image->getRealPath())->resize(375, 500)->save($path);

            $product->img = $filename ;
            $product->save();
        }
        $product->categories()->attach($request->input('category_list'));

        flash()->success('your product is created');

        return redirect('admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return Response
     */
    public function show($slug)
    {
        $product = Product::whereSlug($slug)->firstOrFail();
        // dd($product);
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $categories = Category::lists('id');

        $product = Product::findOrFail($id);

        return view('back.product.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id , ProductRequest $request)
    {
        $product = Product::findOrFail($id);

        $product->update($request->all());

        return redirect('admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->back();
    }
}
