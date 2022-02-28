<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetails;
use App\Models\User;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Str;
use Luilliarcec\LaravelUsernameGenerator\Facades\Username;

class UserDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = UserDetails::with('agenda')->get();
        return view('patients.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create User Account 
        $password_random = "sv3".Str::random(8);
        $random_chars = Str::random(3);
        $username_random = Username::make(request('name').' '.request('last_name'));

        $user = new User;
        $user->username = $username_random.$random_chars.".club";
        $user->email = request('email');
        $user->phone = request('phone');
        $user->password_plain = $password_random;
        $user->password = Hash::make($password_random);
        $user->role = 'patient';
        $user->save();

        $userDetail = new UserDetails;
        $userDetail->user_id = DB::getPdo()->lastInsertId();
        $userDetail->name = request('name');
        $userDetail->last_name = request('last_name');
        $userDetail->second_last_name = request('second_last_name');
        $userDetail->age = request('age');
        $userDetail->birthday = request('birthday');
        $userDetail->religion = request('religion');
        $userDetail->job_position = request('job_position');
        $userDetail->education_level = request('education_level');

        $userDetail->save();

        $userId = $userDetail->user_id;
        return redirect()->route('pathologic', ['user_id' => $userId, 'type' => 'new']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userDetail = UserDetails::find($id);
        return view('patients.edit', compact('userDetail'));
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
        $userDetail = UserDetails::find($id);
        $userDetail->name = request('name');
        $userDetail->last_name = request('last_name');
        $userDetail->second_last_name = request('second_last_name');
        $userDetail->age = request('age');
        $userDetail->birthday = request('birthday');
        $userDetail->religion = request('religion');
        $userDetail->job_position = request('job_position');
        $userDetail->education_level = request('education_level');

        $userDetail->save();

        return redirect()->route('profile.show', $id);
    }
}
