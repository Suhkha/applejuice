<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treatment;

class TreatmentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id, $type)
    {
        return view('treatment.create', compact('user_id', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $treatment = new Treatment;
        $treatment->user_id = request('user_id');
        $treatment->treatment = request('treatment') == "" ? "" : request('treatment');

        $treatment->save();

        $userId = request('user_id');
        return redirect()->route('profile.show', $userId);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $profile_id)
    {
        $treatment = Treatment::find($id);
        return view('treatment.edit', compact('treatment', 'profile_id'));
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
        $treatment = Treatment::find($id);
        $treatment->treatment = request('treatment') == "" ? "" : request('treatment');

        $treatment->save();

        return redirect()->route('profile.show', request('profile_id'));
    }
}
