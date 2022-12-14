@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('cities.create') }}">Add New City</a>
                     or
                    <a href="{{ route('rooms.create') }}">Add New Room</a>
                    <br>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
