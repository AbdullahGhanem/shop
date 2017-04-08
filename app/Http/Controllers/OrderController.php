<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\OrderRequest;
use App\Http\Controllers\Controller;

use Cart;
use DB;
use Auth;
use App\Order;
use App\Orderdata;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::all();
        return view('admin.order.index', compact('orders'));
    }


    public function create()
    {
        return view('order.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
    {
        if ( Cart::count() > 0){  
            DB::transaction(function () use ($request) {
                $carts = Cart::content();

                $order = Order::create([
                    'user_id' => Auth::user()->id,
                    'address' => $request->input('address'),
                    'phone'   => $request->input('phone'),
                    'total'   => Cart::total(),
                ]);

                foreach ($carts as $cart) {
                    Orderdata::create([
                        'order_id'  => $order->id,
                        'title'     => $cart->name,
                        'qty'       => $cart->qty,
                        'price'     => $cart->price,
                        'subtotal'  => $cart->subtotal,
                    ]);
                }
                Cart::destroy();
            });
            flash()->success('thanks for the deal');
            return redirect('orders');
        } else {
            flash()->error('your order has failen');
            return redirect('/');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function orders()
    {
        $orders = Auth::user()->orders;
        return view('order.show', compact('orders'));
    }

    public function contant($id)
    {
        $order = Order::find($id)->first();
        $products = $order->data;
        return view('order.contact', compact('order', 'products'));
    }

    public function edit($id)
    {
        $order = Order::find($id)->first();
        return view('admin.order.edit', compact('order'));
    }

    public function update($id , Request $request)
    {
        $order = Order::findOrFail($id);

        $order->update($request->all());

        return redirect('admin/orders');
    }
}
