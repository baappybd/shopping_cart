@extends('partial.master')

@section('title')
Laravel Shopping Cart
@endsection

<style>
    .card-img-top {
    width: 100%;
    border-top-left-radius: calc(.25rem - 1px);
    border-top-right-radius: calc(.25rem - 1px);
    height: 220px;
    object-fit: cover;
}
.qnty{
    display: block;
    margin-bottom: 10px;
    width: 60px;
    text-align: center;
    border: 1px solid #afafaf;
    border-radius: 3px;
    color: #afafaf;
}

</style>

@include('partial/header')

@section('content')
    <div class="container">
        <div class="row mt-5">
            @foreach($products as $product)
            <div class="col-md-4 mt-2">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="{{ asset('storage/'.$product->image ) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <form action="{{ URL::TO('add-cart') }}" method="POST">
                            {{ csrf_field() }}
                            <span class="text-success d-block mb-2"><strong>Tk.</strong> {{ $product->price }}</span>
                            <input type="hidden" min="1" value="1" name="qnty" class="qnty"/>
                            <input type="hidden" name="product_id" class="qnty" value="{{ $product->id }}"/>
                            <input type="submit" class="btn btn-primary" value="Add To Cart" />
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection