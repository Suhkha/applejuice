<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\UserDetails;

class AgendaController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id)
    {
        $agenda = Agenda::where('user_id',$user_id)->first();
        $userDetails = UserDetails::where('user_id',$user_id)->first();
        $fullname = $userDetails->name." ".$userDetails->last_name." ".$userDetails->second_last_name;

        if($agenda) {
            return view('agenda.edit', compact('user_id', 'agenda', 'fullname'));

        }else{
            return view('agenda.create', compact('user_id', 'fullname'));
        }
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
            'location' => 'required',
            'full_date' => 'required',
        ]);

        $agenda = new Agenda;
        $agenda->user_id = request('user_id');
        $agenda->location = request('location');
        $agenda->full_date = request('full_date');

        $agenda->save();

        return redirect()->route('patients.index');
    }

    public function update(Request $request, $user_id)
    {
        $request->validate([
            'location' => 'required',
            'full_date' => 'required',
        ]);

        $agenda = Agenda::where('user_id', $user_id)->first();
        $agenda->location = request('location');
        $agenda->full_date = request('full_date');
        
        $agenda->save();

        return redirect()->route('patients.index');
    }

    public function cancelAppointment($user_id)
    {
        $agenda = Agenda::where('user_id',$user_id)->first();
        $agenda->delete();

        return redirect()->back();
    }
}
