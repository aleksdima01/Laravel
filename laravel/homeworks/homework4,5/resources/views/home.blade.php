@extends('layouts.default')
@section('content')



<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Position</th>
            <th scope="col">Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $key=>$user)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$user['name']}}</td>
            @if($user['age']>17)
            <td>{{$user['age']}}</td>
            @else
            <td style="color: red;">{{$user['age']}}</td>
            @endif
            <td>{{$user['position']}}</td>
            <td>{{$user['address']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>




@endsection