<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\UserDetails;

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
}
