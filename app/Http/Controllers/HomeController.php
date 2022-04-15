<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role_as = '2') {
            // 2 == admin
           return redirect('admin/dashboard');
        }elseif (Auth::user()->role_as = '1') {
            //1 = Lecturers
            return redirect('lecturers/dashboard');
        }
        else{
             return redirect('Students/dashboard');
             // u can also chain with('status', 'message')
        }
    }
}
