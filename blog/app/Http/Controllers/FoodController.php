<?php

namespace App\Http\Controllers;

use App\Http\Requests\FoodRequest;
use App\Food;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::all();

        //return view()->json($foods);
        return view('foods.index',compact('foods',$foods));
    }

    public function store(FoodRequest $request)
    {
        $food = Food::create($request->all());

        return response()->json($food, 201);
    }

    public function show($id)
    {
        $food = Food::findOrFail($id);

        return response()->json($food);
    }

    public function update(FoodRequest $request, $id)
    {
        $food = Food::findOrFail($id);
        $food->update($request->all());

        return response()->json($food, 200);
    }

    public function destroy($id)
    {
        Food::destroy($id);

        return response()->json(null, 204);
    }
}