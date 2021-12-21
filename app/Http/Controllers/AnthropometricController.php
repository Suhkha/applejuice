<?php

namespace App\Http\Controllers;
use App\Models\Anthropometric;

use Illuminate\Http\Request;

class AnthropometricController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id)
    {
        return view('anthropometric.create', compact('user_id'));
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
            'size' => 'required',
            'weight' => 'required',
            'average_fat' => 'required',
            'muscle_mass_kilo' => 'required',
            'muscle_quality' => 'required',
            'bone_mass' => 'required',
            'visceral' => 'required',
            'metabolic_age' => 'required',
            'waist' => 'required',
            'thigh' => 'required',
            'hips' => 'required',
            'biceps' => 'required',
        ]);

        $anthropometric = new Anthropometric;
        $anthropometric->user_id = request('user_id');
        $anthropometric->size = request('size');
        $anthropometric->weight = request('weight');
        $anthropometric->average_fat = request('average_fat');
        $anthropometric->muscle_mass_kilo = request('muscle_mass_kilo');
        $anthropometric->muscle_quality = request('muscle_quality');
        $anthropometric->bone_mass = request('bone_mass');
        $anthropometric->visceral = request('visceral');
        $anthropometric->metabolic_age = request('metabolic_age');
        $anthropometric->waist = request('waist');
        $anthropometric->thigh = request('thigh');
        $anthropometric->hips = request('hips');
        $anthropometric->biceps = request('biceps');

        $anthropometric->save();

        $userId = request('user_id');
        return view('patients.index');
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
}
