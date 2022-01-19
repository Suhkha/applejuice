<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetails;
use App\Models\Anthropometric;
use App\Models\BackgroundHistory;
use App\Models\HereditaryFamilyHistory;
use App\Models\Medicine;
use App\Models\GynecologicalHistory;
use App\Models\Goal;
use App\Models\Gallery;
use App\Models\Pdf;
use App\Models\Treatment;

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
        $gallery = Gallery::where('user_id', $userDetail->user_id)->get();
        $anthropometrics = Anthropometric::where('user_id', $userDetail->user_id)->get();
        $background = BackgroundHistory::with('background')->where('user_id', $userDetail->user_id)->get();
        $hereditary = HereditaryFamilyHistory::with('hereditary')->where('user_id', $userDetail->user_id)->get();
        $medicines = Medicine::where('user_id', $userDetail->user_id)->get();
        $gynecological = GynecologicalHistory::with('gynecological')->where('user_id', $userDetail->user_id)->first();
        $goal = Goal::with('goal')->where('user_id', $userDetail->user_id)->first();
        $pdfs = Pdf::where('user_id', $userDetail->user_id)->get();
        $treatment = Treatment::where('user_id', $userDetail->user_id)->first();

        return view('admin-profile.show', compact('gallery', 'userDetail', 'anthropometrics', 'background', 'hereditary', 'medicines', 'gynecological', 'goal', 'pdfs', 'treatment'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteUser($id)
    {
        $userDetail = UserDetails::find($id);
        $user = User::find($userDetail->id);

        $user->delete();
        $userDetail->delete();

        return redirect()->back();
    }
}
