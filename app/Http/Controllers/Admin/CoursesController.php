<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
class CoursesController extends Controller
{
    public function index()
    {
    	$courses = Course::get();
    	return view('admin.view_courses',['course'=> $courses]);
    }
    public function add()
    {
    	return view('admin.add_courses');
    }
    public function store(Request $request)
    {
    	$request->validate([
    		'course_no' => ['required','string','max:255','unique:courses'],
    		'course_subject' =>['required', 'string','unique:courses'],
    		'unitload' => ['required','integer']
    	]);

    	Course::create([
    		'course_no' => $request->course_title,
    		'course_subject' => $request->course_name,
    		'unit_load' => $request->unitload,
    		
    	]);
    	return back()->with('status','courses inserted successfully');
    }
}
