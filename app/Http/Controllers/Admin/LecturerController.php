<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class LecturerController extends Controller
{
    public function index()
    {
    	$user = User::where('role_as', 1)->get();
    	return view('admin.lecturers',['user' => $user]);
    }
}
