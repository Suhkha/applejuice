<?php

namespace App\Http\Controllers;
use App\Models\Anthropometric;
use App\Models\UserDetails;

use Illuminate\Http\Request;

class AnthropometricController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id, $type)
    {
        return view('anthropometric.create', compact('user_id', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $anthropometric->imc = request('imc');
        $anthropometric->water = request('water');
        $anthropometric->waist = request('waist');
        $anthropometric->thigh = request('thigh');
        $anthropometric->hips = request('hips');
        $anthropometric->biceps = request('biceps');
        $anthropometric->comments = request('comments');

        $anthropometric->save();

        $userId = request('user_id');

        if(request('type') == 'new') {
            return redirect()->route('patients.index');
            
        }else{
            $user = UserDetails::where('user_id', $userId)->first();
            return redirect()->route('profile.show', array($user->id, '#anthropometric'));
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
        $anthropometric = Anthropometric::find($id);
        return view('anthropometric.edit', compact('anthropometric', 'profile_id'));
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

        $anthropometric = Anthropometric::find($id);
        $anthropometric->size = request('size');
        $anthropometric->weight = request('weight');
        $anthropometric->average_fat = request('average_fat');
        $anthropometric->muscle_mass_kilo = request('muscle_mass_kilo');
        $anthropometric->muscle_quality = request('muscle_quality');
        $anthropometric->bone_mass = request('bone_mass');
        $anthropometric->visceral = request('visceral');
        $anthropometric->metabolic_age = request('metabolic_age');
        $anthropometric->imc = request('imc');
        $anthropometric->water = request('water');
        $anthropometric->waist = request('waist');
        $anthropometric->thigh = request('thigh');
        $anthropometric->hips = request('hips');
        $anthropometric->biceps = request('biceps');
        $anthropometric->comments = request('comments');

        $anthropometric->save();

        return redirect()->route('profile.show', array(request('profile_id'), '#anthropometric'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteAnthropometric($id)
    {
        $medicine = Anthropometric::find($id);
        $medicine->delete();

        return redirect()->back();
    }
}
