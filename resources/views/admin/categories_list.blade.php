@extends('layouts.admin.main')

@section('content')
    <div class="row">
        <div class="col-sm-6" >

            <table class="table table-bordered">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name_En</th>
                    <th scope="col">Name_Ru</th>
                    <th scope="col">Name_Am</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                @if(Session::has('success'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                @endif
                <tbody>
                <h1>Categories List</h1>
                @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <form method="post" action="{{route('categories.update',$category->id)}}">
                            @method('PATCH')
                            @csrf
                            <td>
                                <input type="text" name="name_am" value="{{$category->name_am}}">
                            </td>
                            <td>
                                <input type="text" name="name_ru" value="{{$category->name_ru}}">
                            </td>
                            <td>
                                <input type="text" name="name_en" value="{{$category->name_en}}">
                            </td>

                            <td>
                                <button type="submit" class="btn btn-info">Update</button>
                            </td>
                        </form>
                            <td>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to unenroll?');" style="display: inline-block;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="_method" value="DELETE">
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
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
            <h1>Add New Category</h1>
            @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
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
