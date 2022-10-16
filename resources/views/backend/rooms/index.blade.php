@extends('layouts.app')
@section('name')
    List Of Rooms
@endsection
<br>

@section('content')
<!-- {{-- لو المستخدم عمل تسجيل دخول --}} -->
@auth
<!-- {{-- لوعايزين نظهر رسالة للمستخدم وفيها اسمه --}} -->
    welcome 
    {{ Auth::user()->name }}
@endauth
<!-- {{-- لو عايز رسالة توصل للزائر --}} -->
@guest
    welcom guest
@endguest
<table class="table">

    
    <tr>
        <th>Id</th>
        <th>Style</th>
        <th>Type</th>
        <th>Price</th>
        <th>Image</th>
        <th>Show</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    @foreach ($rooms as $room)
        
    
    <tr>
        <td> {{$room->id}}</td>
        <td> {{$room->style}}</td>
        <td> {{$room->type}}</td>
        <td> {{$room->price}}</td>
        <td> <img width="50" height="50" src="{{asset($room->image)}}"></td>
        

        <td> <a class="btn btn-primary" href="{{route('rooms.show',$room->id)}}">show</a></td>
        {{--  لو عايز ابعت بارميتر نرسله في مصفوفة ولكن هنا علشان بارميتر واحد نكتبه بدون مصفوفة  --}}
        <td> <a class="" href="{{route('rooms.edite',$room->id)}}">edite</a></td>
        {{-- <td> <a class="btn btn-primary" href="{{route('rooms.destroy',$room->id)}}">delete</a></td> --}}
        {{-- 'طريقة اخرى لكتابة الحذف هنا ونكمل الباقي في ال الكنترولير' --}}
        <td>
            <form method="POST" action="{{route('rooms.destroy',$room->id)}} " style="display: inline">
               @csrf @method("delete")
               <input type="submit" class="btn btn-danger" value="delete">
        </form></td>
       
    </tr>
    @endforeach
</table>
<a class="btn btn-primary" href="{{route('rooms.create',$room->id)}}">Add Rooms</a>
@endsection