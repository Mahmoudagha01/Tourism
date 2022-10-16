<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class roomscontroller extends Controller
{
    // public function index()
    // {
    //     return view("frontend.home");
    // }
    public function __construct()
    {
        // لو عايز اجيب اسم المستخدم او اي باراميتر 
        // dd(Auth::user()->name);
        $this->middleware('auth');
        // لو عندي اكتر من حاجة نضعهم في مصفوفة كالاتي
        // $this->middleware('auth')->except(['index','show']);
    }
    public function rooms()
    {
        $rooms= Room::all();
        // $rooms= Room::count();
        // return view("frontend.room",compact("rooms","count"));
        return view("FrontEnd.Rooms",compact("rooms"));
    }

    public function index()
    {
        $rooms= Room::all();
        // $rooms= Room::count();
        // return view("frontend.room",compact("rooms","count"));
        return view("backend.rooms.index",compact("rooms"));
    }
    public function show($id)
    {
        $room=Room::find($id);
        //=room::wherev(id,1)
        //تختار ربكورد واحد فقط بناءا علي ال الاي دي
        return view("backend.rooms.show",compact("room"));
    }
    public function create()
    {
        return view("backend.rooms.create");
    }

    public function store(Request $request)
    {
        //new object model
        $newroom= new Room();
        $request-> validate([
                   'instyle'=>'required',
                   'intype'=> 'required',
                   'inprice'=> 'required | max:300',
                   //لو عايزاكتب اكتر من حاجة نفصل بينهم ب |العلامة دي
                   'img'=>'required | image | mimes:jpeg,jpg,png,gif'
        ]);

          if($request->hasFile('img'))
         {
     // $img=$request->file('img'); 

      $img=$request->img;
      // $ext=$img->getClientOriginalExtension();
      
      // $imgname='img_'.time().'.'.$ext; 
       $imageName = time().'.'.$img->extension();  

       $img->move(public_path('images'), $imageName);
         }

        else{
             $imageName ="no-img.png";
            }


      $newroom->style=$request->instyle;
      $newroom->type=$request->intype;
      $newroom->price=$request->inprice;
      $newroom->image='images/'.$imageName ;


      $newroom->save();
      return redirect(route('rooms.index'))->with('status','Success'); 


    }
    public function edite($id)
    {
        $room=Room::find($id);
        //=room::wherev(id,1)
        //تختار ربكورد واحد فقط بناءا علي ال الاي دي
        return view("backend.rooms.edite",compact("room"));
    }


    public function update($id,Request $request)
    {
        $request-> validate([
                   'instyle'=>'required',
                   'intype'=> 'required',
                   'inprice'=> 'required | max:300'
        ]);
        $room=Room::find($id);
        $room->style= $request->instyle;
        $room->type= $request->intype;
        $room->price= $request->inprice;
        $room->save();
        return redirect(route('rooms.index'))->with('status','Record has been updated');
        //with دي رسالة بنظهرها للمستخدم علشان اوضحله الخطأ

    }
    public function destroy($id)
    {
        $room=Room::find($id);
        $room->delete();
        return redirect(route('rooms.index'))->with('status','Record has been deleted');
  
    }                       
}        