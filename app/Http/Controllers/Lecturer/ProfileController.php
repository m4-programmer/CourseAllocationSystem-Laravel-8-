<?php

namespace App\Http\Controllers\Lecturer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $details = User::where('id',auth()->user()->id)->get();
        $role = "Lecturer";
        $position = "Junior Lecturer";
        return view('lecturers.profiles',compact('details','role','position'));
    }
    public function update(Request $request,$user_id)
    {       
        $request->validate([
            
            'name' => ['required'],
            //'username' => ['required','max:255','string','unique:users'],
            'profile_pics' => ['image','nullable']
        ]);

         $profile = User::find($user_id); // finds the lecturer with the given id
         $profile->name = $request->name; // updatees lecturer name
        //$profile->username = $request->username; // updates lecturers username
       
        if ($request->hasfile('profile_pics')) { // check if picture is uploaded and uploads it
            $destination = 'uploads/profile_image/'.$profile->profile_pics;
            // when user uploads a new image this will delete the old image
            if (FILE::exists($destination)) {
                FILE::delete($destination);
            }
            $file = $request->file('profile_pics');
             $filename = 'uploads/profile_image/'.time().'.'.$file->getClientOriginalExtension();
             $file->move('uploads/profile_image/', $filename);
            $profile->profile_pics = $filename;

        }
         
       

        
        $save = $profile->update();
    
            return back()->with('success', 'Profile updated successfully');
        // //
       /// dd($request->all());

    }
}
