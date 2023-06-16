<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->restaurant) {
            return redirect()->route('admin.dashboard');
        }
        $categories = Category::all();
        return view('admin.restaurants.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$data = $request->validated();

        $data['slug'] = Restaurant::generateSlug($request->name);

        $check = Restaurant::where('slug', $data['slug'])->first();

        if($check){
            return back()->withInput()->withErrors(['slug' => 'Con questo nome crei uno slug doppiato']);
        }

        $newRestaurant = Restaurant::create($data);

        return redirect()->route('admin.restaurants.index');*/
        $newRestaurant = new Restaurant();
        $newRestaurant->name = $request->name;
        $newRestaurant->slug = Str::slug($request->name);
        $newRestaurant->address = $request->address;
        $newRestaurant->vat_number = $request->vat_number;
        $newRestaurant->user_id = Auth::id();
        $newRestaurant->phone = $request->phone;
        $newRestaurant->description = $request->description;

        if ($request->hasFile('image')) {
            if ($newRestaurant->image){
                Storage::delete($newRestaurant->image);
            }

            $path = Storage::put('cover', $request->image);
            $validated_data['image'] = $path;
        }
        $newRestaurant->save();

        if ($request->has('categories')) {
            $newRestaurant->categories()->attach($request->categories);
        }
        return redirect()->route('admin.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
