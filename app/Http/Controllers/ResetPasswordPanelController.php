<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Session;
use Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class ResetPasswordPanelController extends Controller
{
    public function index()
    {
        return view('panel.reset-password');  
        
    }

    public function updatePassword(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password|min:8'
        ]);


        if ($validator->fails()) {
            return redirect('patient/reset-password')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $id = Auth::user()->id;
            $user = User::find($id);
            $user->password = Hash::make(request('password'));
            $user->password_plain = "";

            $user->save();

            Session::flush();
            Auth::logout();
            return redirect('login');
        }
    }

}
