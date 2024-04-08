<?php

namespace App\Http\Controllers;

use App\Models\Recipes;
use Illuminate\Http\Request;
class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('recipes.index', ['recipes' => Recipes::all()]);  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recipes/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
        Recipes::create($request->all());
        return redirect()
            ->route('recipes.index');    }

    /**
     * Display the specified resource.
     */
    public function show(Recipes $recipes)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipes $recipes)
    {
        return view('recipes.edit', ['recipe' => $recipes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipes $recipes)
    {
        $recipes->title = $request-> title;
        $recipes->description = $request-> description;
        $recipes->ingredients = $request-> ingredients; 
        $recipes->instructions = $request-> instructions; 
        $recipes->save();
        return redirect() -> route('recipes.index');     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipes $recipes)
    {
        $recipes->delete();
        return redirect() ->back();    }

      
}
