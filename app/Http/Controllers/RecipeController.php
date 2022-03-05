<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use File; 

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'ingredients' => 'required',
            'preparation' => 'required',
        ]);

        $file = $request->file('image');
        $path = public_path() . '/recipes';
        $fileName = uniqid() . $file->getClientOriginalName();
        $file->move($path, $fileName);

        $recipe = new Recipe;
        $recipe->title = request('title');
        $recipe->difficulty = request('difficulty');
        $recipe->time = request('time');
        $recipe->ingredients = request('ingredients');
        $recipe->preparation = request('preparation');
        $recipe->video_id = request('video_id');
        $recipe->image = $fileName;
        $recipe->save();

        return redirect()->route('recipes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::find($id);
        return view('recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = Recipe::find($id);
        return view('recipes.edit', compact('recipe'));
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
        $request->validate([
            'title' => 'required',
            'ingredients' => 'required',
            'preparation' => 'required',
        ]);

        $recipe = Recipe::find($id);
        $recipe->title = request('title');
        $recipe->difficulty = request('difficulty');
        $recipe->time = request('time');
        $recipe->ingredients = request('ingredients');
        $recipe->preparation = request('preparation');
        $recipe->video_id = request('video_id');
        
        if($request->file('image')) {
            if(File::exists(public_path('recipes/'.$recipe->image))){
                File::delete(public_path('recipes/'.$recipe->image));
            }else{
                dd('File does not exists.');
            }
            
            $file = $request->file('image');
            $path = public_path() . '/recipes';
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move($path, $fileName);

            $recipe->image = $fileName;
        }
        
        $recipe->save();

        return redirect()->route('recipes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteRecipe($id)
    {
        $recipe = Recipe::find($id);
        if(File::exists(public_path('recipes/'.$recipe->image))){
            File::delete(public_path('recipes/'.$recipe->image));
        }else{
            dd('File does not exists.');
        }
        $recipe->delete();

        return redirect()->back();
    }
}
