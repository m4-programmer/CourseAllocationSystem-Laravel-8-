<?php

namespace App\Http\Controllers\Lecturer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complain;
use App\Models\User;

class DashboardController extends Controller
{
   public function index()
    {
    	$complains = Complain::get();
      $countStudent = User::where('role_as','0')->get()->count();//counts students
         $countLecturers = User::where('role_as','1')->get()->count();//counts students
    	return view('lecturers.dashboard', compact('complains','countStudent','countLecturers'));
    }
}
