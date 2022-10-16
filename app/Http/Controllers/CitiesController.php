<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citie;

class Citiescontroller extends Controller
{
    // public function index()
    // {
    //     return view("frontend.home");
    // }
    public function __construct()
    {
        // لو عايز اجيب اسم المستخدم او اي باراميتر 
        // dd(Auth::user()->name);
        $this->middleware('auth')->except("cities");
        // لو عندي اكتر من حاجة نضعهم في مصفوفة كالاتي
        // $this->middleware('auth')->except(['index','show']);
    }

    public function cities()
    {
        $cities= Citie::all();
        // $rooms= Room::count();
        // return view("frontend.citie",compact("cities","count"));
        return view("FrontEnd.HomePage",compact("cities"));
    }
    public function index()
    {
        $cities= Citie::all();
        // $rooms= Room::count();
        // return view("frontend.citie",compact("cities","count"));
        return view("backend.cities.index",compact("cities"));
    }
    public function show($id)
    {
        $citie=Citie::find($id);
        //=room::wherev(id,1)
        //تختار ربكورد واحد فقط بناءا علي ال الاي دي
        return view("backend.cities.show",compact("citie"));
    }
    public function create()
    {
        return view("backend.cities.create");
    }

    public function store(Request $request)
    {
        //new object model
        $newcitie= new Citie();
        $request-> validate([
                   'name'=>'required',
                   'desc'=> 'required',
                 
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


      $newcitie->name=$request->name;
      $newcitie->description=$request->desc;
     
      $newcitie->image='images/'.$imageName ;


      $newcitie->save();
      return redirect(route('cities.index'))->with('status','Success'); 


    }
    public function edite($id)
    {
        $citie=Citie::find($id);
        //=room::wherev(id,1)
        //تختار ربكورد واحد فقط بناءا علي ال الاي دي
        return view("backend.cities.edite",compact("citie"));
    }


    public function update($id,Request $request)
    {
        $request-> validate([
                   'name'=>'required',
                   'desc'=> 'required',
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
        $citie=Citie::find($id);
        $citie->name= $request->name;
        $citie->description= $request->desc;
        $citie->image='images/'.$imageName ;
        $citie->save();
        return redirect(route('cities.index'))->with('status','Record has been updated');
        //with دي رسالة بنظهرها للمستخدم علشان اوضحله الخطأ

    }
    public function destroy($id)
    {
        $citie=Citie::find($id);
        $citie->delete();
        return redirect(route('cities.index'))->with('status','Record has been deleted');
  
    }                       
}        