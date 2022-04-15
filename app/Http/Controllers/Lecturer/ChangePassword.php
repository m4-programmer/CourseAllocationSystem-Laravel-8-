<?php

namespace App\Http\Controllers\Lecturer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Controller
{
    public function index()
    {
        return view('lecturers.change_password');
    }
    public function update(Request $request,$user_id)
    {
        // dd($request->all());
        $request->validate([
            'inputPasswordCurrent' => ['required','string','min:5'],
            
            'password' => ['required','string','min:5','confirmed'],
        ]);
        $userpassword =  User::find($user_id);
        $newPassword = Hash::make($request->password);
        if ($userpassword->password != $newPassword) {
        dd($userpassword->password.'<br>'. $newPassword);
            
             return back()->with('failure', 'Password is incorrect, please enter a valid password');
        }else{
        $userpassword->password = $userpassword;

        $userpassword->update();
        return back()->with('success', 'password changed successfully');
        }

    }
}
