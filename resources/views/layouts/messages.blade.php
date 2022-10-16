@if ($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</div>
@endif
@if (session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif
