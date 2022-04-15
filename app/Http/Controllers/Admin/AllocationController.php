<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllocationController extends Controller
{
 public function index()
    {
    	return view('admin.view_allocated');
    }
    public function add()
    {
    	return view('admin.allocate');
    }
}
