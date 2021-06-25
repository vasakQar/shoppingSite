@extends('layouts.admin.main')

@section('content')
    <h1>Product Images</h1>
    @if(session('massege'))
        <p class="alert alert-info">{{ session('massege') }}</p>
    @endif
    <div class="row">
        @foreach($product->images as $productImage)
            <div class="col-sm-3">
                <form action="{{ route('delete.product.image',['imgName' => $productImage, 'id' => $product->id,]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?');" style="position: absolute;margin: 28px 80%;">
                        X
                    </button>
                </form>
                <img src="{{ asset('storage/images')}}/{{$productImage}} " style="width: 100%;height: 270px;padding-top: 20px;">
            </div>
        @endforeach
    </div>
@endsection

