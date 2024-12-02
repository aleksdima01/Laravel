@extends('layouts.default')
@section('content')



<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
            <th scope="col">Position</th>
            <th scope="col">Address</th>
            <th scope="col">Work data</th>
            @if(!empty($url))
            <th scope="row">URL</th>
            @endif
        </tr>
    </thead>
    <tbody>
        <tr>
            @if(!empty($id))
            <th scope="row">{{$id}}</th>
            @else
            <th scope="row">1</th>
            @endif
            <td>{{$name}}</td>
            <td>{{$last_name}}</td>
            <td>{{$email}}</td>
            <td>{{$position}}</td>
            <td>{{$address}}</td>
            <td>{{$workData}}</td>
            @if(!empty($url))
            <td>{{$url}}</td>
            @endif
        </tr>
    </tbody>
</table>




@endsection