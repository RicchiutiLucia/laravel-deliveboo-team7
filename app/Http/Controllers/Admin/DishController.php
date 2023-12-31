<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDishRequest;
use App\Http\Requests\UpdateDishRequest;
use Illuminate\Support\Facades\Storage;

use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dishes = Dish::where('restaurant_id', Auth::user()->id)->orderBy('name', 'asc')->get();


        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDishRequest $request)
    {
        $validated_data = $request->validated();
        $validated_data['slug'] = Dish::generateSlug($request->name) . '-' . Auth::user()->id;





        $checkDish = Dish::where('slug', $validated_data['slug'])->first();
        if ($checkDish) {
            return back()->withInput()->withErrors(['slug' => 'Nome del piatto giá in uso']);
        }

        if ($request->hasFile('image')) {
            $path = Storage::put('cover', $request->image);
            $validated_data['image'] = $path;
        }
        $validated_data['restaurant_id'] = Auth::user()->id;

        $newDish = Dish::create($validated_data);

        // $validated_data['slug'] = $validated_data['slug']  . '-' . $newDish['id'];
        $newDish->update($validated_data);

        return redirect()->route('admin.dishes.show', ['dish' => $newDish->slug])->with('status', 'Nuovo Piatto creato!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        if (Auth::user()->id == $dish->restaurant_id) {
            return view('admin.dishes.show', compact('dish'));
        } else {
            return view('admin.errors.404');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    { {
            if (Auth::user()->id == $dish->restaurant_id) {
                return view('admin.dishes.edit', compact('dish'));
            } else {
                return view('admin.errors.404');
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDishRequest $request, Dish $dish)
    {

        $validated_data = $request->validated();
        $validated_data['slug'] = Dish::generateSlug($request->name);

        //$checkDish = Dish::where('slug', $validated_data['slug'])->where('id', '<>', $dish->id)->first();
        //if ($checkDish) {
        //    return back()->withInput()->withErrors(['slug' => 'Nome del piatto giá in uso']);
        //}

        if ($request->hasFile('image')) {
            if ($dish->image) {
                Storage::delete($dish->image);
            }

            $path = Storage::put('cover', $request->image);
            $validated_data['image'] = $path;
        }


        $validated_data['slug'] = $validated_data['slug']  . '-' . $dish->id;


        $dish->update($validated_data);

        return redirect()->route('admin.dishes.show', ['dish' => $dish->slug])->with('status', 'Piatto aggiornato!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {

        if ($dish->image) {
            Storage::delete($dish->image);
        }
        $dish->delete();
        return redirect()->route('admin.dishes.index');
    }

    public function deleteImage($slug)
    {

        $dish = Dish::where('slug', $slug)->firstOrFail();

        if ($dish->image) {
            Storage::delete($dish->image);
            $dish->image = null;
            $dish->save();
        }

        return redirect()->route('admin.dishes.edit', $dish->slug);
    }
}
