<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomRecipe;
use App\Models\Recipe;
use App\Models\UserDetails;
use App\Models\IngredientsList;
use DB;

class CustomRecipeController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id, $type)
    {
        $recipes = Recipe::all();
        return view('custom-recipes.create', compact('recipes', 'user_id', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        $recipe = new CustomRecipe;
        $recipe->user_id = request('user_id');
        $recipe->recipe_id = request('recipe');
        $recipe->comments = request('comments');
            
        $recipe->save();

        $lastId = DB::getPdo()->lastInsertId();
        
        for ($i=0; $i < (count($data) - 4); $i++) { 
            $ingredients = new IngredientsList;
            $ingredients->custom_recipe_id = $lastId;
            $ingredients->ingredients = request('list-ingredients_'.$i);
            
            $ingredients->save();
        }

        $userId = request('user_id');
        $user = UserDetails::where('user_id', $userId)->first();
        return redirect()->route('profile.show', $user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
