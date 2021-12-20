<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Background;
use App\Models\BackgroundHistory;
use App\Models\HereditaryFamilyHistory;

class BackgroundHistoryController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPathologicHistory($user_id)
    {
        $pathologics = Background::where('type', 0)
                                ->where('status', 1)
                                ->get();
        return view('background-history.pathologic-form', compact('pathologics', 'user_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createHereditaryFamilyHistory($user_id)
    {
        $pathologics = Background::where('type', 0)
                                ->where('status', 1)
                                ->get();
        return view('background-history.hereditary-family-history-form', compact('pathologics', 'user_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNoPathologicHistory($user_id)
    {
        $noPathologics = Background::where('type', 1)
                                ->where('status', 1)
                                ->get();
        return view('background-history.no-pathologic-form', compact('noPathologics', 'user_id'));
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

        for ($i=0; $i < ((count($data) / 2) - 1); $i++) { 
            $pathologic = new BackgroundHistory;
            $pathologic->user_id = request('user_id');
            $pathologic->background_id = request('list-background_'.$i);
            $pathologic->comments = request('list-comments_'.$i) == "" ? "" : request('list-comments_'.$i);
            $pathologic->save();
        }

        $userId = request('user_id');

        if(request('no-pathologic-form') == 'true') {
            return redirect()->route('gynecological-history', ['user_id' => $userId]);

        }else {
            return redirect()->route('medicine', ['user_id' => $userId]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeHereditaryFamilyHistory(Request $request)
    {
        $data = $request->except('_token');

        for ($i=0; $i < ((count($data) / 2) - 1); $i++) { 
            $pathologic = new HereditaryFamilyHistory;
            $pathologic->user_id = request('user_id');
            $pathologic->name = "Heredado";
            $pathologic->background_id = request('list-background_'.$i);
            $pathologic->comments = request('list-comments_'.$i) == "" ? "" : request('list-comments_'.$i);
            $pathologic->save();
        }

        $userId = request('user_id');
        return redirect()->route('no-pathologic', ['user_id' => $userId]);
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
