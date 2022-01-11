<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetails;
use App\Models\Anthropometric;
use App\Models\BackgroundHistory;
use App\Models\GynecologicalHistory;
use App\Models\Goal;
use App\Models\Gallery;

class AdminPatientProfileController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userDetail = UserDetails::find($id);
        $gallery = Gallery::where('user_id', $id)->get();
        $anthropometrics = Anthropometric::where('user_id', $id)->get();
        $background = BackgroundHistory::with('background')->where('user_id', $id)->get();
        $medicine = BackgroundHistory::with('medicine')->where('user_id', $id)->get();
        $gynecological = GynecologicalHistory::with('gynecological')->where('user_id', $id)->first();
        $goal = Goal::with('goal')->where('user_id', $id)->first();
 
        return view('admin-profile.show', compact('gallery', 'userDetail', 'anthropometrics', 'background', 'medicine', 'gynecological', 'goal'));
    }
}
