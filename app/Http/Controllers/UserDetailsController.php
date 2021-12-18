<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetails;

class UserDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patients.index');
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
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'second_last_name' => 'required',
            'age' => 'required',
            'birthday' => 'required',
            'religion' => 'required',
            'job_position' => 'required',
            'education_level' => 'required'
        ]);

        $userDetail = new UserDetails;
        $userDetail->name = request('name');
        $userDetail->last_name = request('last_name');
        $userDetail->second_last_name = request('second_last_name');
        $userDetail->age = request('age');
        $userDetail->birthday = request('birthday');
        $userDetail->religion = request('religion');
        $userDetail->job_position = request('job_position');
        $userDetail->education_level = request('education_level');

        $userDetail->save();

        return redirect()->route('background.create');
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
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'second_last_name' => 'required',
            'age' => 'required',
            'birthday' => 'required',
            'religion' => 'required',
            'job_position' => 'required',
            'education_level' => 'required'
        ]);

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

        return redirect()->route('patients.index');
    }
}
