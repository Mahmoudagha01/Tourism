@extends('layouts.app')
@section('name')
    Add New Room
@endsection
<br>
@section('content')
<form method="POST" action="{{route('rooms.store')}}" enctype="multipart/form-data">
    {{-- مهم جدا نكتب سي اس ار اف قبل التاكيد  --}}
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Style</label>
      <input type="text" name="instyle" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Type</label>
      <input type="text" name="intype" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 ">
      <label for="exampleInputPassword1" class="form-label">Price</label>
      <input type="text" name="inprice" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 ">
      <label for="exampleInputPassword1" class="form-label">image</label>
      <input type="file" name="img" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

    
    
@endsection