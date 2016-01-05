<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Cart;
use App\Product;

class CartController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {

            $product = Product::find($request->input('productId'));
            $id = $product->id;
            $name = $product->title;
            $qty = 1;
            $price = $product->price;

            Cart::add($id, $name, $qty, $price);
            $total = Cart::total();
            $count = Cart::count();
            return response()->json(array(true, $count , $total));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::content();

        return view('cart.show',compact('cart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Cart::update($rowId, array('name' => 'Product 1'));
    }

    /**
     * Empty the cart
     *
     * @return boolean
     */
    public function delete($id)
    {

        Cart::remove($id);
        return redirect()->back();
    }
}
