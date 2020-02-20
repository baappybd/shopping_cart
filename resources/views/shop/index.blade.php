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
</style>

@include('partial/header')

@section('content')
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="https://imgc.allpostersimages.com/img/print/u-g-F9DGY50.jpg?w=900&h=900&p=0" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <span class="text-success d-block mb-2"><strong>Tk.</strong> 100</span>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="https://imgc.allpostersimages.com/img/print/u-g-F9DGY50.jpg?w=900&h=900&p=0" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <span class="text-success d-block mb-2"><strong>Tk.</strong> 100</span>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="https://imgc.allpostersimages.com/img/print/u-g-F9DGY50.jpg?w=900&h=900&p=0" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <span class="text-success d-block mb-2"><strong>Tk.</strong> 100</span>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="https://imgc.allpostersimages.com/img/print/u-g-F9DGY50.jpg?w=900&h=900&p=0" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <span class="text-success d-block mb-2"><strong>Tk.</strong> 100</span>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="https://imgc.allpostersimages.com/img/print/u-g-F9DGY50.jpg?w=900&h=900&p=0" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <span class="text-success d-block mb-2"><strong>Tk.</strong> 100</span>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="https://imgc.allpostersimages.com/img/print/u-g-F9DGY50.jpg?w=900&h=900&p=0" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <span class="text-success d-block mb-2"><strong>Tk.</strong> 100</span>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection