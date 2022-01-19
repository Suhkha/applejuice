<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;

class GoalsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id, $type)
    {
        return view('goals.create', compact('user_id', 'type'));
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
            'goal_weight' => 'required',
            'favorite_aliments' => 'required',
            'main_goal' => 'required',
            'additional_method' => 'required',
        ]);

        $goal = new Goal;
        $goal->user_id = request('user_id');
        $goal->goal_weight = request('goal_weight');
        $goal->favorite_aliments = request('favorite_aliments');
        $goal->main_goal = request('main_goal');
        $goal->additional_method = request('additional_method');
        $goal->comments = request('comments') == "" ? "" : request('comments');

        $goal->save();

        $userId = request('user_id');

        if(request('type') == 'new') {
            return redirect()->route('anthropometric', ['user_id' => $userId, 'type' => 'new']);

        }else{
            return redirect()->route('profile.show', $userId);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $profile_id)
    {
        $goal = Goal::find($id);
        return view('goals.edit', compact('goal', 'profile_id'));
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
            'goal_weight' => 'required',
            'favorite_aliments' => 'required',
            'main_goal' => 'required',
            'additional_method' => 'required',
        ]);

        $goal = Goal::find($id);
        $goal->goal_weight = request('goal_weight');
        $goal->favorite_aliments = request('favorite_aliments');
        $goal->main_goal = request('main_goal');
        $goal->additional_method = request('additional_method');
        $goal->comments = request('comments') == "" ? "" : request('comments');

        $goal->save();

        return redirect()->route('profile.show', request('profile_id'));
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
