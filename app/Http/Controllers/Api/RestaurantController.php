<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    public function index($category){
        
        /*
       foreach($categories as $_category){
            $restaurants = DB::table('category_restaurant')
        //->join('restaurants', 'restaurant.id','=','category_restaurant','category_restaurant.restaurant_id')
        //->join('categories','category.id', '=', 'category_restaurant', 'category_restaurant.category_id')
        ->where('category_id', $_category)->get();

        array_push($arr, $restaurants);
        */
       
      /* $s = DB::table('category_restaurant')->whereIn('category_id', $categories)->get();
       $array3 = [];
       foreach($s as $arr) {
            $array2 =  DB::table('restaurants')->where('id', $arr->restaurant_id)->get();
            array_push($array3, $array2);
       }*/
      
    $categories = explode('-',$category); 
    $restaurants = DB::table('restaurants')->select('*');

    foreach ($categories as $categoryId) {
        $restaurants->join('category_restaurant as pivot'.$categoryId, 'restaurants.id', '=', 'pivot'.$categoryId.'.restaurant_id')
        ->where('pivot'.$categoryId.'.category_id', $categoryId);
    }

    $resultArray = $restaurants->get()->toArray();
   
    
       
        return response()->json([
            'success' => true,
            'result' =>  $resultArray

        ]);

        
    }
}
