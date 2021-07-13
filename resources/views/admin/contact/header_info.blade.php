@extends('layouts.admin.main')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="ibox ">
                <div class="ibox-title">
                    <h3 class="m-t-none m-b">Contact Us</h3>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li><a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-6 b-r">
                            @if(session('message'))
                                <p class="alert alert-info">{{ session('message') }}</p>
                            @endif
                            <form role="form" action="{{route('headerInfo.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>phone</label>
                                    <input type="phone" placeholder="Enter phone" class="form-control" name="phone">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" placeholder="Enter email" class="form-control" name="email">
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-primary float-right m-t-n-xs" type="submit"><strong>Create</strong></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6"><h4>Not a member?</h4>
                            <p>You can create an account:</p>
                            <p class="text-center">
                                <a href="#"><i class="fa fa-sign-in big-icon"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Basic Table</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li><a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content" style="">
                    @if(session('delete'))
                        <p class="alert alert-info">{{ session('delete') }}</p>
                    @endif
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($headerInfo as $info)
                            <tr>
                                <td>{{$info->id}}</td>
                                <td>{{$info->phone}}</td>
                                <td>{{$info->email}}</td>
                                <td>
                                    <form action="{{ route('headerInfo.destroy',$info->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to unenroll?');" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" value="X">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection


