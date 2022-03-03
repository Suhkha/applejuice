<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\UserDetails;
use App\Models\CustomRecipe;

class CustomUserPlanController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $user = UserDetails::where('user_id', $id)->first();
        $recipes = CustomRecipe::with('recipe')
                                ->where('user_id', $user->user_id)
                                ->where('status', 1)
                                ->groupBy('recipe_id')
                                ->get();
        
        return view('panel.custom-plan', compact('user', 'recipes'));  
        
    }

    public function show($id)
    {
        $user_id = Auth::user()->id;
        $user = UserDetails::where('user_id', $user_id)->first();
        $plan = CustomRecipe::with('recipe')
                                ->with('ingredients')
                                ->where('recipe_id', $id)
                                ->where('user_id', $user->user_id)
                                ->where('status', 1)
                                ->first();

        return view('panel.custom-plan.recipe', compact('plan'));
    }
}
