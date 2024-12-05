@extends('layouts.default')
@section('content')

<h3 class="mb-4">User Form</h3>
<form name="userform" method="post" action="{{url('add-user')}}">
    @csrf
    <div class="mb-3 col-sm-3">
        <label class="form-label" for="name">Name</label>
        <input class="form-control form-control-sm" placeholder="First name" type="text" name="name" id="name" required>
    </div>
    <div class="mb-3 col-sm-3">
        <label class="form-label" for="last_name">Lastname</label>
        <input class="form-control form-control-sm" placeholder="Last name" type="text" name="last_name" id="last_name" required>
    </div>
    <div class="mb-3 col-sm-3">
        <label class="form-label" for="email">Email</label>
        <input class="form-control form-control-sm" placeholder="Email" aria-describedby="emailHelp" type="email" name="email" id="email" required>
    </div>
    <button class="btn btn-primary mb-4" type="submit">Send</button>
</form>
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
@endsection