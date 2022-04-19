<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Session;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Validator;

class ResetPasswordAdminController extends Controller
{
    public function randomUserPassword($id)
    {
        $password_random = "sv3".Str::random(8);

        $user = User::find($id);
        $user->password = Hash::make($password_random);
        $user->password_plain = $password_random; 
        
        $user->save();

        $user = UserDetails::where('user_id', $id)->first();
        return redirect()->route('profile.show', $user->id);
    }

    public function resetAdminPasswordForm()
    {
        return view('configuration.reset-password');  
    }

    public function resetAdminPassword(Request $request)
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
