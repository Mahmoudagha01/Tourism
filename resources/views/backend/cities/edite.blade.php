@extends('layouts.app')
@section('name')
   Update Cities
@endsection
<br>
@section('content')
<form method="POST" action="{{route('cities.update',$citie->id)}}"enctype="multipart/form-data">
    {{-- مهم جدا نكتب سي اس ار اف قبل التاكيد  --}}
    @csrf @method("put")
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label" >Name</label>
      <input type="text" name="name" class="form-control" value="{{$citie->name}}" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Description</label>
      <input type="text" name="desc" class="form-control" value="{{$citie->description}}" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Image</label>
      <input type="text" name="img" class="form-control" value="{{asset($citie->image)}}" id="exampleInputPassword1">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

    
    
@endsection