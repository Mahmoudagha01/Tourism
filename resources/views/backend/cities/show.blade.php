@extends('layouts.app')
@section('name')
    Selected Cities
@endsection
<br>
@section('content')
<table class="table">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Image</th>
    </tr>
    
    <tr>
        <td> {{$citie->id}}</td>
        <td> {{$citie->name}}</td>
        <td> {{$citie->description}}</td>
        <td> <img src="{{asset($citie->image)}}"></td>
    

    </tr>
</table>
    
@endsection