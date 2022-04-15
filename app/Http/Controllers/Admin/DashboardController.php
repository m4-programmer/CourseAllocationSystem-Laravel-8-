<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complain;
use App\Models\User;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $countStudent = User::where('role_as','0')->get()->count();//counts students
         $countLecturers = User::where('role_as','1')->get()->count();//counts students
    	$complains = Complain::orderBy('created_at','DESC')->paginate(2);
        
    	return view('admin.dashboard',compact('complains','countStudent','countLecturers'));
    }
}
