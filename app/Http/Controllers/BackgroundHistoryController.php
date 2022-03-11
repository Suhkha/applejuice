<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Background;
use App\Models\BackgroundHistory;
use App\Models\HereditaryFamilyHistory;
use App\Models\UserDetails;

class BackgroundHistoryController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPathologicHistory($user_id, $type)
    {
        $pathologics = Background::where('type', 0)
                                ->where('status', 1)
                                ->get();
        $deniedPathologics = Background::where('type', 0)
                                ->where('status', 1)
                                ->first();

        return view('background-history.pathologic-form', compact('deniedPathologics', 'pathologics', 'user_id', 'type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createHereditaryFamilyHistory($user_id, $type)
    {
        $pathologics = Background::where('type', 0)
                                ->where('status', 1)
                                ->get();

        $deniedPathologics = Background::where('type', 0)
                                ->where('status', 1)
                                ->first();
        return view('background-history.hereditary-family-history-form', compact('deniedPathologics', 'pathologics', 'user_id', 'type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNoPathologicHistory($user_id, $type)
    {
        $noPathologics = Background::where('type', 1)
                                ->where('status', 1)
                                ->get();

        $deniedNoPathologics = Background::where('type', 1)
                                ->where('status', 1)
                                ->first();

        return view('background-history.no-pathologic-form', compact('deniedNoPathologics', 'noPathologics', 'user_id', 'type'));
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
            $pathologic = new BackgroundHistory;
            $pathologic->user_id = request('user_id');
            $pathologic->background_id = request('list-background_'.$i);
            $pathologic->comments = request('list-comments_'.$i) == "" ? "" : request('list-comments_'.$i);
            $pathologic->save();
        }

        $userId = request('user_id');

        if(request('type') == 'new') {
            if(request('no-pathologic-form') == 'true') {
                return redirect()->route('gynecological-history', ['user_id' => $userId, 'type' => 'new']);

            }else {
                return redirect()->route('medicine', ['user_id' => $userId, 'type' => 'new']);
            }

        }else{
            $user = UserDetails::where('user_id', $userId)->first();
            return redirect()->route('profile.show', array($user->id, '#background'));
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

        for ($i=0; $i < (((count($data) - 3) / 2)); $i++) { 
            $pathologic = new HereditaryFamilyHistory;
            $pathologic->user_id = request('user_id');
            $pathologic->name = "Heredado";
            $pathologic->background_id = request('list-background_'.$i);
            $pathologic->comments = request('list-comments_'.$i) == "" ? "" : request('list-comments_'.$i);
            $pathologic->save();
        }

        $userId = request('user_id');
        
        if(request('type') == 'new') {
            return redirect()->route('no-pathologic', ['user_id' => $userId, 'type' => 'new']);

        }else{
            $user = UserDetails::where('user_id', $userId)->first();
            return redirect()->route('profile.show', array($user->id, '#hereditary'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPathologic($id, $profile_id)
    {
        $pathologic = BackgroundHistory::with('background')->where('id', $id)->first();

        $pathologics = Background::where('type', 0)
                                ->where('status', 1)
                                ->get();
        
        return view('background-history.edit-pathologic-form', compact('pathologics', 'pathologic', 'profile_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editNoPathologic($id, $profile_id)
    {
        $noPathologic = BackgroundHistory::with('background')->where('id', $id)->first();

        $noPathologics = Background::where('type', 1)
                                ->where('status', 1)
                                ->get();

        return view('background-history.edit-no-pathologic-form', compact('noPathologics', 'noPathologic', 'profile_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editHereditary($id, $profile_id)
    {
        $hereditary = HereditaryFamilyHistory::with('hereditary')->where('id', $id)->first();

        $pathologics = Background::where('type', 1)
                                ->where('status', 1)
                                ->get();
                                
        return view('background-history.edit-hereditary-form', compact('pathologics', 'hereditary', 'profile_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateBackground(Request $request, $id)
    {
        $background = BackgroundHistory::find($id);
        $background->background_id = request('background_id');
        $background->comments = request('comments') == "" ? "" : request('comments');
        $background->save();

        return redirect()->route('profile.show', array(request('profile_id'), '#background'));
    }


    public function updateHereditary(Request $request, $id)
    {
        $hereditary = HereditaryFamilyHistory::find($id);
        $hereditary->background_id = request('background_id');
        $hereditary->comments = request('comments') == "" ? "" : request('comments');
        $hereditary->save();

        return redirect()->route('profile.show', array(request('profile_id'), '#hereditary'));
    }

    public function deleteBackground($id)
    {
        $background = BackgroundHistory::find($id);
        $background->delete();

        return redirect()->back();
    }

    public function deleteHereditary($id)
    {
        $hereditary = HereditaryFamilyHistory::find($id);
        $hereditary->delete();

        return redirect()->back();
    }
}
