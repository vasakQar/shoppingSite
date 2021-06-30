@extends('layouts.admin.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Categories List</h5>
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

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name_En</th>
                            <th scope="col">Name_Ru</th>
                            <th scope="col">Name_Am</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        @if(session('success'))
                            <p class="alert alert-info">{{ session('success') }}</p>
                        @endif
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <th scope="row">{{$category->id}}</th>
                                <form method="post" action="{{route('categories.update',$category->id)}}">
                                    @method('PATCH')
                                    @csrf
                                    <td>
                                        <div>
                                            <input type="text" name="name_am" value="{{$category->name_am}}">
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <input type="text" name="name_ru" value="{{$category->name_ru}}">
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <input type="text" name="name_en" value="{{$category->name_en}}">
                                        </div>
                                    </td>

                                    <td>
                                        <button type="submit" class="btn btn-info">Update</button>
                                    </td>
                                </form>
                                <td>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to unenroll?');" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" value="X">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div style="float: right;">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <h1>Add New Category</h1>
            @if(session('message'))
                <p class="alert alert-info">{{ session('message') }}</p>
            @endif
            <form method="POST" action="{{route('categories.store')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Name_En</label>
                    <input type="text"  class="form-control" placeholder="category name_en" name="name_en"><br>
                    <p class="text-danger">{{ $errors->first('name_en') }}</p>
                    <label for="name">Name_Ru</label>
                    <input type="text"  class="form-control" placeholder="category name_ru" name="name_ru"><br>
                    <p class="text-danger">{{ $errors->first('name_ru') }}</p>
                    <label for="name">Name_Am</label>
                    <input type="text"  class="form-control" placeholder="category name_am" name="name_am"><br>
                    <p class="text-danger">{{ $errors->first('name_am') }}</p>
                    <button type="submit">Add New</button>
                </div>
            </form>
        </div>
    </div>
@endsection
