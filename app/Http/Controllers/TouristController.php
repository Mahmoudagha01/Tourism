<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tourist;

class TouristController extends Controller
{
    public function index()
    {
        $tourists= Tourist::all();
        return view("backend.tourists.index",compact("tourists"));
    }

    public function create()
    {
        return view("backend.tourists.create");
    }

    public function store(Request $request)
    {
        //new object model
        $newtourist= new Tourist();
        $request-> validate([
                   'name'=>'required',
                   'email'=> 'required ',
                   'nationality'=> 'required',
                   'phone'=> 'required',
        ]);
        $newtourist->name=$request->name;
        $newtourist->email=$request->email;
        $newtourist->nationality=$request->nationality;
        $newtourist->phone=$request->phone;
        $newtourist->save();
        return redirect(route('tourists.create'))->with('status','You are reseved succefully');
    }  
   
}    