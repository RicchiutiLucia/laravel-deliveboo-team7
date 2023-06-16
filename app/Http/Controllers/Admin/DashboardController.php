<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if (Auth::user()->restaurant) {
            // ('hai il ristorante');

            $restaurant = Restaurant::where('user_id', Auth::id())->first();
            // ($restaurant);
           
            return view('admin.dashboard', compact('restaurant'));
        } else {
            // ('non hai il ristorante');
            return redirect()->route('admin.restaurants.create');
        }
    }
    }

