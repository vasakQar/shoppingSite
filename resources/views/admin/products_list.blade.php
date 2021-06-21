@extends('layouts.admin.main')

@section('content')
    @if(session('success'))
        <p class="alert alert-info">{{ session('success') }}</p>
    @endif
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Border Table </h5>
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

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description En</th>
                        <th scope="col">Description Ru</th>
                        <th scope="col">Description Am</th>
                        <th scope="col">Price</th>
                        <th scope="col">old_Price</th>
                        <th scope="col">images</th>
                        <th scope="col">category name</th>
                        <th scope="col">Action1</th>
                        <th scope="col">Action2</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td><textarea style="width: 100%">{{$product->description_en}}</textarea></td>
                            <td><textarea style="width: 100%">{{$product->description_ru}}</textarea></td>
                            <td><textarea style="width: 100%">{{$product->description_am}}</textarea></td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->old_price}}</td>
                            <td><a href="{{ route('products.show', $product->id) }}">show images</a></td>
                            <td>{{$product->category->name_en}}</td>
                            <td>
                                <button type="button" class="btn btn-info"><a href="{{ route('products.edit', $product->id) }}">edit</a></button>
                            </td>
                            <td>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to unenroll?');" style="display: inline-block;">
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
@endsection
