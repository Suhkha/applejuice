<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GynecologicalHistory;

class GynecologicalHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id)
    {
        return view('gynecological-history.create', compact('user_id'));
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
            'menarche' => 'required',
            'pregnancies' => 'required',
            'abortion' => 'required',
            'menstruation' => 'required',
            'contraceptive_method' => 'required',
        ]);

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

        $userId = request('user_id');
        return redirect()->route('goals', ['user_id' => $userId]);
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
