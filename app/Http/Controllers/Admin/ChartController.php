<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chart;
use App\Models\Dish;
use App\Models\Order;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Author;

class ChartController extends Controller
{
    public function index()

    {
      $dishOrder = DB::table('dish_order')
      ->join('dishes', 'dishes.id', '=', 'dish_order.dish_id')
      ->select('dish_id','order_id', 'quantity')
      ->where('restaurant_id',  Auth::user()->id)->get();
   
      
      //CHIAMATA MESI
      $groups = Order::where('id',  $dishOrder[0]->order_id)
        ->select(DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'), DB::raw('COUNT(id) as tot'))
        ->orderBy('month', "asc")
        ->groupBy('month')
        ->pluck('tot', 'month')->all();
  
      $chartMonth =  new Chart;
      $chartMonth->labels = (array_keys($groups));
      $chartMonth->dataset = (array_values($groups));
  /*
      //CHIAMATA ANNI
      $groups = Order::where("restaurant_id", $rest)
        ->select(DB::raw('DATE_FORMAT(created_at, "%Y") as year'), DB::raw('COUNT(id) as tot'))
        ->orderBy('year', "asc")
        ->groupBy('year')
        ->pluck('tot', 'year')->all();
  
      $chartYear = new Chart;
      $chartYear->labels = (array_keys($groups));
      $chartYear->dataset = (array_values($groups));
  
      //CHIAMATA VENDITE MENSILI
      $groups = Order::where("restaurant_id", $rest)
        ->select(DB::raw('DATE_FORMAT(created_at, "%m") as month'), DB::raw('SUM(price_tot) as tot'))
        ->orderBy('month', "asc")
        ->groupBy('month')
        ->pluck('tot', 'month')->all();
  
      $chartPriceMonth = new Chart;
      $chartPriceMonth->labels = (array_keys($groups));
      $chartPriceMonth->dataset = (array_values($groups));
  
      //CHIAMATA VENDITE ANNUALI
      $groups = Order::where("restaurant_id", $rest)
        ->select(DB::raw('DATE_FORMAT(created_at, "%Y") as year'), DB::raw('SUM(price_tot) as tot'))
        ->orderBy('year', "asc")
        ->groupBy('year')
        ->pluck('tot', 'year')->all();
  
      $chartPriceYear = new Chart;
      $chartPriceYear->labels = (array_keys($groups));
      $chartPriceYear->dataset = (array_values($groups));
  
  */
  
      return view('admin.charts.index', compact('chartMonth'));
    }
  }

