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

    public function getIngredients($id){
        return Recipe::select('ingredients')->where('id', $id)->get();
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
        return redirect()->route('profile.show', array($user->id, '#recipes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customRecipe = CustomRecipe::find($id);
        $recipe = Recipe::find($customRecipe->recipe_id);
        $user_id = $customRecipe->user_id;
        $ingredients = IngredientsList::where('custom_recipe_id', $id)->get();

        return view('custom-recipes.edit', compact('customRecipe', 'recipe', 'user_id', 'ingredients'));
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
        $data = $request->except('_token');

        $recipe = CustomRecipe::find($id);
        $recipe->comments = request('comments');
        $recipe->status = request('status');
            
        $recipe->save();

        foreach($request->ingredients_id as $index => $ingredient){
            if($request->ingredients[$index] == "") {
                $recipe = IngredientsList::find($request->ingredients_id[$index]);
                $recipe->delete();
            }else{
                $ingredients = IngredientsList::find($request->ingredients_id[$index]);
                $ingredients->ingredients = $request->ingredients[$index];
                
                $ingredients->save();
            }    
        }


        for ($i=0; $i < (count($data) - 4); $i++) { 
            if(request('list-ingredients_'.$i) !=  "") {
                $ingredients = new IngredientsList;
                $ingredients->custom_recipe_id = $id;
                $ingredients->ingredients = request('list-ingredients_'.$i);
                
                $ingredients->save();
            }
        }

        $userId = request('user_id');
        $user = UserDetails::where('user_id', $userId)->first();
        return redirect()->route('profile.show', array($user->id, '#recipes'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteCustomRecipe($id)
    {
        $recipe = CustomRecipe::find($id);
        $recipe->delete();

        return redirect()->back();
    }
}
