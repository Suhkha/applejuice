<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fact;
use App\Models\UserDetails;

class FactController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fact = new Fact;
        $fact->weight = request('weight');
        $fact->average_fat = request('average_fat');
        $fact->muscle = request('muscle');
        $fact->metabolic_age = request('metabolic_age');
        $fact->waist = request('waist');
        $fact->thigh = request('thigh');
        $fact->hips = request('hips');
        $fact->biceps = request('biceps');
        $fact->save();

        return redirect()->route('facts.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facts = Fact::find($id);
        return view('facts.edit', compact('facts'));
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
        $fact = Fact::find($id);
        $fact->weight = request('weight');
        $fact->average_fat = request('average_fat');
        $fact->muscle = request('muscle');
        $fact->metabolic_age = request('metabolic_age');
        $fact->waist = request('waist');
        $fact->thigh = request('thigh');
        $fact->hips = request('hips');
        $fact->biceps = request('biceps');

        return redirect()->route('facts.index');
    }

    public function index()
    {
        $facts = Fact::first();
        return view('facts.index', compact('facts'));
    }
}
