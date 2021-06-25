@extends('layouts.admin.main')

@section('content')
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    <div class="" style="text-align: center">
        <h1 style="color: #23C6C8;">Update Product</h1>
    </div>
    <div class="row" style="">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <form  action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data" class="row">
                @method('PATCH')
                @csrf
                <input type="hidden" name="id" value="{{$product->id}}">
                <div class="col-sm-6 form-group">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="name" value="{{ $product->name }}">
                        <p class="text-danger">{{ $errors->first('name') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Category</label>
                        <select class="form-control " name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name_en}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description En</label>
                        <textarea class="form-control"  type="text" name="description_en" placeholder="description en">{{ $product->description_en }}</textarea>
                        <p class="text-danger">{{ $errors->first('description_en') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="description">Description Ru</label>
                        <textarea class="form-control"  type="text" name="description_ru" placeholder="description ru">{{ $product->description_ru }}</textarea>
                        <p class="text-danger">{{ $errors->first('description_ru') }}</p>
                    </div>
                </div>
                <div class="col-sm-6 form-group"  >
                    <div class="form-group">
                        <label for="description">Description Am</label>
                        <textarea class="form-control"  type="text" name="description_am" placeholder="description am">{{ $product->description_am }}</textarea>
                        <p class="text-danger">{{ $errors->first('description_am') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" placeholder="price" name="price" value="{{ $product->price }}">
                        <p class="text-danger">{{ $errors->first('price') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="old price">Old Price</label>
                        <input type="text" class="form-control" placeholder="old price" name="old_price" value="{{ $product->old_price }}">
                        <p class="text-danger">{{ $errors->first('old_price') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="image">Images</label>
                        <input type="file" class="form-control" placeholder="add_prod_images" name="images[]" multiple/>
                        <p class="text-danger">{{ $errors->first('images') }}</p>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-rounded btn-block">Update Product</button>
            </form>
        </div>
        <div class="col-sm-2"></div>
    </div>
@endsection
