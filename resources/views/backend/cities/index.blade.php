@extends('layouts.app')
@section('name')
    List Of Cities
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
        <th>Description</th>
      
        <th>Image</th>
        <th>Show</th>
        <th>Update</th>
        <th>Add City</th>

    </tr>
    @foreach ($cities as $citie)
        
    
    <tr>
        <td> {{$citie->id}}</td>
        <td> {{$citie->name}}</td>
        <td> {{$citie->description}}</td>
       
        <td> <img width="50" height="50" src="{{asset($citie->image)}}"></td>
        

        <td> <a class="btn btn-primary" href="{{route('cities.show',$citie->id)}}">show</a></td>
        {{--  لو عايز ابعت بارميتر نرسله في مصفوفة ولكن هنا علشان بارميتر واحد نكتبه بدون مصفوفة  --}}
        <td> <a class="" href="{{route('cities.edite',$citie->id)}}">edite</a></td>
        {{-- <td> <a class="btn btn-primary" href="{{route('cities.destroy',$citie->id)}}">delete</a></td> --}}
        {{-- 'طريقة اخرى لكتابة الحذف هنا ونكمل الباقي في ال الكنترولير' --}}
        <td>
            <form method="POST" action="{{route('cities.destroy',$citie->id)}} " style="display: inline">
               @csrf @method("delete")
               <input type="submit" class="btn btn-danger" value="delete">
        </form></td>
        <td> <a class="btn btn-primary" href="{{route('cities.create',$citie->id)}}">Add City</a></td>
    </tr>
    @endforeach
</table>
    
@endsection