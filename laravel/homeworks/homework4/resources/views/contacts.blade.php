@extends('layouts.default')
@section('content')


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Postcode</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $key=>$user_contact)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$user_contact['name']}}</td>
            <td>{{$user_contact['post_code']}}</td>
            @if(empty(trim($user_contact['email'])))
            <td style="color: red;">Email не задан</td>
            @else
            <td>{{$user_contact['email']}}</td>
            @endif
            <td>{{$user_contact['phone']}}</td>
            <td>{{$user_contact['address']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>




@endsection