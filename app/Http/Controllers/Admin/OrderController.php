<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $orders = DB::table('dish_order')
            ->join('dishes', 'dishes.id', '=', 'dish_order.dish_id')
            ->join('orders', 'orders.id', '=', 'dish_order.order_id')
            ->select('orders.name', 'orders.total_price', 'orders.email', 'orders.address', 'orders.phone', 'orders.created_at','orders.id')
            ->orderBy('orders.created_at','desc')
            ->where('dishes.restaurant_id',  Auth::user()->id)->get();

        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate();
        $newOrder = Order::create($data);
        return redirect()->route('admin.orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders_name = DB::table('dish_order')
        ->join('dishes', 'dishes.id', '=', 'dish_order.dish_id')
        ->join('orders', 'orders.id', '=', 'dish_order.order_id')
        ->select('dishes.name','dish_order.quantity')
        ->where('orders.id',  $id)->get();




        $orders = Order::findOrFail($id);
        return view('admin.orders.show', compact('orders','orders_name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}