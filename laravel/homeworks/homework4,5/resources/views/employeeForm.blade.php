@extends('layouts.default')
@section('content')


<form name="userform" method="post" action="{{url('employee')}}">
    @csrf
    <div class="mb-3 col-sm-3">
        <label class="form-label" for="username">Name</label>
        <input class="form-control form-control-sm" placeholder="First name" type="text" name="username" id="username" required>
    </div>
    <div class="mb-3 col-sm-3">
        <label class="form-label" for="last_name">Lastname</label>
        <input class="form-control form-control-sm" placeholder="Last name" type="text" name="last_name" id="last_name" required>
    </div>
    <div class="mb-3 col-sm-3">
        <label class="form-label" for="email">Email</label>
        <input class="form-control form-control-sm" placeholder="Email" aria-describedby="emailHelp" type="email" name="email" id="email" required>
    </div>
    <div class="mb-3 col-sm-3">
        <label class="form-label" for="position">Position</label>
        <input class="form-control form-control-sm" placeholder="Position" type="text" name="position" id="position" required>
    </div>
    <div class="mb-3 col-sm-3">
        <label class="form-label" for="address">Address</label>
        <input class="form-control form-control-sm" placeholder="Address" type="text" name="address" id="address" required>
    </div>
    <div class="mb-3 col-sm-3">
        <label class="form-label" for="workData">Work data</label>
        <textarea class="form-control form-control-sm" placeholder="WorkData" name="workData" id="workData" required></textarea>
    </div>
    <button class="btn btn-primary" type="submit">Send</button>
</form>

@endsection