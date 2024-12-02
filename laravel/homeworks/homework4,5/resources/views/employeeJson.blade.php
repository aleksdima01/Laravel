@extends('layouts.default')
@section('content')


<form name="userform" method="post" action="{{url('json')}}">
    @csrf
    <div class="mb-3 col-sm-3">
        <label class="form-label" for="json">Employee data in Json</label>
        <textarea class="form-control form-control-sm" placeholder="Json" name="json" id="json" required></textarea>
    </div>
    <button class="btn btn-primary" type="submit">Send</button>
</form>

@endsection