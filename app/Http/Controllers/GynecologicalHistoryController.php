<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GynecologicalHistory;
use App\Models\UserDetails;

class GynecologicalHistoryController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id, $type)
    {
        return view('gynecological-history.create', compact('user_id', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = request('user_id');

        if(request('toggle') == false) {
            $gynecologicalHistory = new GynecologicalHistory;
            $gynecologicalHistory->user_id = request('user_id');
            $gynecologicalHistory->menarche = request('menarche');
            $gynecologicalHistory->menarche_comments = request('menarche_comments');
            $gynecologicalHistory->pregnacies = request('pregnancies');
            $gynecologicalHistory->pregnacies_comments = request('pregnancies_comments');
            $gynecologicalHistory->abortion = request('abortion');
            $gynecologicalHistory->abortion_comments = request('abortion_comments');
            $gynecologicalHistory->menstruation = request('menstruation');
            $gynecologicalHistory->menstruation_comments = request('menstruation_comments');
            $gynecologicalHistory->contraceptive_method = request('contraceptive_method');
            $gynecologicalHistory->contraceptive_method_comments = request('contraceptive_method_comments');
            $gynecologicalHistory->medicines = request('medicines');

            $gynecologicalHistory->save();

            if(request('type') == 'new') {
                return redirect()->route('goals', ['user_id' => $userId, 'type' => 'new']);
                
            }else{
                $user = UserDetails::where('user_id', $userId)->first();
                return redirect()->route('profile.show', array($user->id, '#gynecological-history'));
            }
            
        }else{
            return redirect()->route('goals', ['user_id' => $userId, 'type' => 'new']);
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
        $gynecological = GynecologicalHistory::find($id);
        return view('gynecological-history.edit', compact('gynecological', 'profile_id'));
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
        $gynecological = GynecologicalHistory::find($id);
        $gynecological->menarche = request('menarche');
        $gynecological->menarche_comments = request('menarche_comments');
        $gynecological->pregnacies = request('pregnancies');
        $gynecological->pregnacies_comments = request('pregnancies_comments');
        $gynecological->abortion = request('abortion');
        $gynecological->abortion_comments = request('abortion_comments');
        $gynecological->menstruation = request('menstruation');
        $gynecological->menstruation_comments = request('menstruation_comments');
        $gynecological->contraceptive_method = request('contraceptive_method');
        $gynecological->contraceptive_method_comments = request('contraceptive_method_comments');
        $gynecological->medicines = request('medicines');

        $gynecological->save();

        return redirect()->route('profile.show', array(request('profile_id'), '#gynecological-history'));
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
