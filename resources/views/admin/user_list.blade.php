@extends('layouts.admin.main')

@section('content')
    <div class="row">
        <div class="col-sm-4" >
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">User_id</th>
                    <th scope="col">User_Name</th>
                    <th scope="col">User_Email</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <h1>Users__List</h1>
                @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <th scope="row">{{$user->name}}</th>
                            <th scope="row">{{$user->email}}</th>
                            <th scope="row">
                                <a class="danger-element" href="/orders-by-users/{{$user->id}}">Go To User Orders</a>
                            </th>
                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
