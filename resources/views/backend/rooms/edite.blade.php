@extends('layouts.app')
@section('name')
    Updates Rooms
@endsection
<br>
@section('content')
<form method="POST" action="{{route('rooms.update',$room->id)}}">
    {{-- مهم جدا نكتب سي اس ار اف قبل التاكيد  --}}
    @csrf @method("put")
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label" >Style</label>
      <input type="text" name="instyle" class="form-control" value="{{$room->style}}" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Type</label>
      <input type="text" name="intype" class="form-control" value="{{$room->type}}" id="exampleInputPassword1">
    </div>
    <div class="mb-3 ">
        <label for="exampleInputPassword1" class="form-label">Price</label>
        <input type="text" name="inprice" class="form-control" value="{{$room->price}}" id="exampleInputPassword1">
    </div>
    <div class="mb-3 ">
      <label for="exampleInputPassword1" class="form-label">Image</label>
      <input type="file" name="img" class="form-control"  value="{{asset($room->image)}}" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

    
    
@endsection