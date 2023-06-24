<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DishController extends Controller
{
    public function index($id)
    {
        $dishes = DB::table('dishes')->where('restaurant_id', $id)->get();
        return response()->json([
            'success' => true,
            'result' => $dishes

        ]);
    }

    public function getDish($id)
    {
        $dish = DB::table('dishes')->where('id', $id)->get();
        return response()->json([
            'success' => true,
            'result' => $dish
        ]);
    }
}
