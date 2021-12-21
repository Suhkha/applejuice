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
    public function create($user_id)
    {
        return view('goals.create', compact('user_id'));
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
        return redirect()->route('anthropometric', ['user_id' => $userId]);
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
