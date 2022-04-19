<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\UserDetails;

class MedicineController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id, $type)
    {
        return view('medicines.create', compact('user_id', 'type'));
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

        for ($i=0; $i < (((count($data) - 3) / 2)); $i++) { 
            $medicine = new Medicine;
            $medicine->user_id = request('user_id');
            $medicine->name = request('list-name_'.$i) == "" ? "" : request('list-name_'.$i);;
            $medicine->comments = request('list-comments_'.$i) == "" ? "" : request('list-comments_'.$i);
            $medicine->save();
        }

        $userId = request('user_id');

        if(request('type') == 'new') {
            return redirect()->route('hereditary-family-history', ['user_id' => $userId, 'type' => 'new']);

        }else{
            $user = UserDetails::where('user_id', $userId)->first();
            return redirect()->route('profile.show', array($user->id, '#medicines'));
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
        $medicine = Medicine::find($id);
        return view('medicines.edit', compact('medicine', 'profile_id'));
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
        $medicine = Medicine::find($id);
        $medicine->name = request('name') == "" ? "" : request('name');
        $medicine->comments = request('comments') == "" ? "" : request('comments');
        $medicine->save();

        return redirect()->route('profile.show', array(request('profile_id'), '#medicines'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteMedicine($id)
    {
        $medicine = Medicine::find($id);
        $medicine->delete();

        return redirect()->back();
    }
}
