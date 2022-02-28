<?php

namespace App\Http\Controllers;
use Cache;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\UserDetails;
use App\Models\Anthropometric;
use App\Models\Goal;
use App\Models\Gallery;

class HistoryUserController extends Controller
{

    public function index()
    {
    
        setlocale(LC_ALL, 'es_ES');
        
        $id = Auth::user()->id;
        $user = UserDetails::where('user_id', $id)->first();
        $galleryNow = Gallery::where('user_id', $id)->orderBy('created_at', 'desc')->first();
        $galleryOld = Gallery::where('user_id', $id)->orderBy('created_at', 'asc')->first();

        $weight = Anthropometric::select('weight', 'created_at', 'comments')->where('user_id', $id)->orderBy('created_at', 'desc')->take(5)->get();
        $fat = Anthropometric::select('average_fat', 'created_at', 'comments')->where('user_id', $id)->orderBy('created_at', 'desc')->take(5)->get();
        $muscle = Anthropometric::select('muscle_mass_kilo', 'created_at', 'comments')->where('user_id', $id)->orderBy('created_at', 'desc')->take(5)->get();
        $metabolic = Anthropometric::select('metabolic_age', 'created_at', 'comments')->where('user_id', $id)->orderBy('created_at', 'desc')->take(5)->get();

        $waist = Anthropometric::select('waist', 'created_at', 'comments')->where('user_id', $id)->orderBy('created_at', 'desc')->take(5)->get();
        $thigh = Anthropometric::select('thigh', 'created_at', 'comments')->where('user_id', $id)->orderBy('created_at', 'desc')->take(5)->get();
        $hips = Anthropometric::select('hips', 'created_at', 'comments')->where('user_id', $id)->orderBy('created_at', 'desc')->take(5)->get();
        $biceps = Anthropometric::select('biceps', 'created_at', 'comments')->where('user_id', $id)->orderBy('created_at', 'desc')->take(5)->get();

        return view('panel.history', compact('user', 'galleryNow', 'galleryOld', 'weight', 'fat', 'muscle', 'metabolic', 'waist', 'thigh', 'hips', 'biceps'));  
        
    }
}
