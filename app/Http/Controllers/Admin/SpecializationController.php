<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specialization;

class SpecializationController extends Controller
{
    public function index(){
        $specialization = Specialization::get();
        return view('admin.specialization', compact('specialization'));
    }
    public function store(Request $request){
       // dd($request->specialization);

        $request->validate([
            'specialization' => ['required','string', 'max:255','unique:Specializations'],
        ]);

        Specialization::create(
            [
                'specialization' => $request->specialization,
            ]);
        return back()->with('success','Data inserted successfully');
    }
}
