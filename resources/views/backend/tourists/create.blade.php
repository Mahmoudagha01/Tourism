@extends('layouts.app')
@section('name')
    Reservation Form
@endsection
<br>
@section('content')
<form method="POST" action="{{route('tourists.store')}}" enctype="multipart/form-data">
    {{-- مهم جدا نكتب سي اس ار اف قبل التاكيد  --}}
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 ">
      <label for="exampleInputPassword1" class="form-label">Nationality</label>
      <input type="text" name="nationality" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 ">
      <label for="exampleInputPassword1" class="form-label">Phone</label>
      <input type="tel" name="phone" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection