<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recommendation;
use App\Models\UserDetails;

class RecommendationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id, $type)
    {
        return view('recommendation.create', compact('user_id', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recommendation = new Recommendation;
        $recommendation->user_id = request('user_id');
        $recommendation->recommendation = request('recommendation') == "" ? "" : request('recommendation');

        $recommendation->save();

        $userId = request('user_id');
        $user = UserDetails::where('user_id', $userId)->first();

        return redirect()->route('profile.show', array($user->id, '#recommendations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $profile_id)
    {
        $recommendation = Recommendation::find($id);
        return view('recommendation.edit', compact('recommendation', 'profile_id'));
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
        $recommendation = Recommendation::find($id);
        $recommendation->recommendation = request('recommendation') == "" ? "" : request('recommendation');

        $recommendation->save();

        return redirect()->route('profile.show', array(request('profile_id'), '#recommendations'));
    }
}
