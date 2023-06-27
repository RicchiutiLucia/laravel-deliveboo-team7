<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class orderController extends Controller
{
    public function saveOrder(Request $request) {
        $data = $request->all();
        $newOrder = new Order();
        $newOrder->fill($data);
        $newOrder->save();
        return response()->json(['data' => $request->order]);
    }
}
