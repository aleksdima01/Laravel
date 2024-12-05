@extends('layouts.default')
@section('content')
<h3 class="mb-4">Book Form</h3>
<form name="bookform" method="post" action="{{url('index')}}">
    @csrf
    <div class="mb-3 col-sm-3">
        <label class="form-label" for="title">Title</label>
        <input class="form-control form-control-sm" placeholder="Title" type="text" name="title" id="title" required>
    </div>
    <div class="mb-3 col-sm-3">
        <label class="form-label" for="author">Author</label>
        <input class="form-control form-control-sm" placeholder="Author" type="text" name="author" id="author" required>
    </div>
    <div class="mb-4 col-sm-3">
        <label class="form-label" for="genre">Choose Genre</label>
        <select name="genre" class="form-select" aria-label="select">
            <option value="Fantasy">Fantasy</option>
            <option value="Sci-FI">Sci-FI</option>
            <option value="Mystery">Mystery</option>
            <option value="Drama">Drama</option>
        </select>
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