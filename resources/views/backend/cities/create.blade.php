@extends('layouts.app')
@section('name')
   Add New City
@endsection
<br>
@section('content')
<form method="POST" action="{{route('cities.store')}}" enctype="multipart/form-data">
    {{-- مهم جدا نكتب سي اس ار اف قبل التاكيد  --}}
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Description</label>
      <input type="text" name="desc" class="form-control" id="exampleInputPassword1">
    </div>
    
    <div class="mb-3 ">
      <label for="exampleInputPassword1" class="form-label">image</label>
      <input type="file" name="img" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

    
    
@endsection