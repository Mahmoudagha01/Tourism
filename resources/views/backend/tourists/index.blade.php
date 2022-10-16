@extends('layouts.app')
@section('name')
 List Of Tourist
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
        <th>Name</th>
        <th>Email</th>
        <th>Nationality</th>
        <th>Phone</th>
      
    </tr>
    @foreach ($tourists as $tourist)
        
    
    <tr>
        <td> {{$tourist->id}}</td>
        <td> {{$tourist->name}}</td>
        <td> {{$tourist->email}}</td>
        <td> {{$tourist->nationality}}</td>
        <td> {{$tourist->phone}}</td>
        

        {{-- <td> <a class="btn btn-primary" href="{{route('rooms.show',$room->id)}}">show</a></td>
        {{--  لو عايز ابعت بارميتر نرسله في مصفوفة ولكن هنا علشان بارميتر واحد نكتبه بدون مصفوفة  --}}
        {{-- <td> --}}
            {{-- <form method="POST" action="{{route('rooms.destroy',$room->id)}} " style="display: inline">
               @csrf @method("delete")
               <input type="submit" class="btn btn-danger" value="delete">
        {{-- </form></td> --}} 
    
    </tr>
    @endforeach
</table>
    
@endsection