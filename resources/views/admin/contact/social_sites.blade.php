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
                        <div class="col-sm-12">
                            @if(session('message'))
                                <p class="alert alert-info">{{ session('message') }}</p>
                            @endif
                            <form role="form" action="{{route('socialSites.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input type="text" placeholder="facebook link" class="form-control" name="facebook">
                                </div>
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input type="text" placeholder="twitter link" class="form-control" name="twitter">
                                </div>
                                <div class="form-group">
                                    <label>Googleplus</label>
                                    <input type="text" placeholder="googleplus" class="form-control" name="googleplus">
                                </div>
                                <div class="form-group">
                                    <label>Rss</label>
                                    <input type="text" placeholder="rss link" class="form-control" name="rss">
                                </div>
                                <div class="form-group">
                                    <label>Pintrest</label>
                                    <input type="text" placeholder="pintrest link" class="form-control" name="pintrest">
                                </div>
                                <div class="form-group">
                                    <label>Linkedin</label>
                                    <input type="text" placeholder="linkedin link" class="form-control" name="linkedin">
                                </div>
                                <div class="form-group">
                                    <label>Youtube</label>
                                    <input type="text" placeholder="youtube link" class="form-control" name="youtube">
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-primary float-right m-t-n-xs" type="submit"><strong>Create</strong></button>
                                </div>
                            </form>
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
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th></th>
                                <th class="text-center">
                                    site links<br>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($socialSites[0]))
                            <tr>
                                <th class="text-nowrap" scope="row">facebook</th>
                                <td>{{$socialSites[0]->facebook}}</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">twitter</th>
                                <td>{{$socialSites[0]->twitter}}</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">googleplus</th>
                                <td>{{$socialSites[0]->googleplus}}</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">rss</th>
                                <td colspan="5">{{$socialSites[0]->rss}}</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">pintrest</th>
                                <td colspan="5">{{$socialSites[0]->pintrest}}</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">linkedin</th>
                                <td colspan="5">{{$socialSites[0]->linkedin}}</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">youtube</th>
                                <td>{{$socialSites[0]->youtube}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <form action="{{ route('socialSites.destroy',$socialSites[0]->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to unenroll?');" style="display: inline-block;float: right;">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="X">
                        </form>
                        @endif
                </div>
            </div>
        </div>
    </div>

@endsection

