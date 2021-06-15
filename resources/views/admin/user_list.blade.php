@extends('layouts.admin.main')

@section('content')
    <div class="row">
        <div class="col-sm-6" >
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User_Name</th>
                    <th scope="col">User_Email</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><a class="danger-element" href="/orders-by-users/{{$user->id}}">User_Orders</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
