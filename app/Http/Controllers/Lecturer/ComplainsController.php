<?php

namespace App\Http\Controllers\lecturer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complain;

class ComplainsController extends Controller
{
    public function index()
    {
        // to later add the where user_id = 1 and ad
    	$complains = Complain::where('user_id', auth()->user()->id)->get();

    	return view('lecturers.complains', ['complains' => $complains]);
    }
    public function store(Request $request)
    {
    	 // makes sure complain field was filled
    	 $this->validate($request, [
    	 	'complain' => 'required',
            'reciever_id' => 'nullable',
    	 ]);

    	 $request->user()->complain()->create([
    	 	'message' => $request->complain,
            'reciever_id' => 2, 
    	 ]);

    	 return back()->with('success','complains inserted successfully');

    }
}
