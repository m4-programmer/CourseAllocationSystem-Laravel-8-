<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index(){
    	$users = User::where('role_as', 0)->get();

    	return view('admin.students',['user' => $users]);
    }
    public function store(Request $request){
    	$request->validate([
    		'name' => ['required', 'string', 'max:255'],
    		'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    		'username' => ['required', 'string',  'max:255', 'unique:users'],
    		'password' => ['required', 'string', 'min:5'],
    	]);

    	User::create([
    		'name'  => $request->name,
			'email' => $request->email,
			'username' => $request->username,
			'password' => Hash::make($request->password)
    	]);
    	return back();
    }
}
