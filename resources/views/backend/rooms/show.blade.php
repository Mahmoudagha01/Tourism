@extends('layouts.app')
@section('name')
   Selected Rooms
@endsection
<br>
@section('content')
<table class="table">
    <tr>
        <th>id</th>
        <th>Style</th>
        <th>Type</th>
        <th>Price</th>
        <th>Image</th>
    </tr>
    
    <tr>
        <td> {{$room->id}}</td>
        <td> {{$room->style}}</td>
        <td> {{$room->type}}</td>
        <td> {{$room->price}}</td>
        <td> <img src="{{$room->image}}"></td>

    </tr>
</table>
    
@endsection