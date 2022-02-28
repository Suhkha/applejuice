<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Background;

class BackgroundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $background = Background::all();
        return view('background.index', compact('background'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('background.create');
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
            'name' => 'required',
            'type' => 'required',
            'status' => 'required'
        ]);

        $background = new Background;
        $background->name = request('name');
        $background->details = request('details') == "" ? "Sin detalles" : request('details');
        $background->type = request('type');
        $background->status = request('status');

        $background->save();

        return redirect()->route('background.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $background = Background::find($id);
        return view('background.edit', compact('background'));
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
            'name' => 'required',
            'details' => 'required',
            'type' => 'required',
        ]);

        $background = Background::find($id);
        $background->name = request('name');
        $background->details = request('details');
        $background->type = request('type');
        $background->status = 1;

        $background->save();

        return redirect()->route('background.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $background = Background::destroy($id);

        if($background) {
            return redirect()->route('background.index');
        }
    }
}
