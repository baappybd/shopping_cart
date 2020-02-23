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
        <div class="row mt-5 justify-content-md-center">
            <div class="col-md-12 well text-center mb-3">
               Dear {{ Session::get('customer_name') }}, You can change your shipping address from this form
            </div>
            <div class="col-md-6">
                <div class="card p-4">
                    <div class="card-title"><h4>Shipping Address</h4></div>
                    <form action="{{ URL::TO('shipping_address',$customer->id) }}" method="POST">
                        {{ csrf_field() }}
                        @method('post')
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" value="{{ $customer->fname.' '.$customer->lname }}" name="full_name"/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" value="{{ $customer->email }}" name="email"/>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" value="{{ $customer->phone }}" name="phone"/>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" value="{{ $customer->address }}" name="address"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-success" value="Add Shipping Address"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection