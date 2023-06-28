<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class orderController extends Controller
{
    public function saveOrder(Request $request)
    {

        $data = $request->except('items');
        /* $validator = Validator::make(
            $data,
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'status' => 'required',
                'address' => 'required',
                'total_price' => 'required',
            ]
        ); */
        //dd($request->items);
        $items = json_decode($request->items, true);
        //dd($items);
        $newOrder = new Order();
        $newOrder->fill($data);
        $newOrder->save();

        foreach ($items as $item) {

            DB::table('dish_order')->insert([
                'dish_id' => $item['id'],
                'order_id' => $newOrder->id,
                'quantity' => $item['quantity'],
            ]);
        }

        return response()->json(['data' => $items]);
    }
}
