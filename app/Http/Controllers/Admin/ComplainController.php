<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complain;
use Illuminate\Http\Request;

class ComplainController extends Controller
{
    public function index()
    {
    	$complain = Complain::paginate(5);
    	return view('admin.complains',['complains'=> $complain]);
    }
}
