@extends('partial.master')

@section('title')
All Product
@endsection

@include('partial/header')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col col-lg-8">
              <p>All Product</p>
                <table class="table table-bordered table-bordered">
                   
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col" style="width: 160px;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @php($total = 0)
                        @foreach($products as $product)
                        
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $product->name }}</td>
                            <td>
                                <img class="card-img-top" src="{{ asset('storage/'.$product->options->image) }}" style="width:100px;height: 100px;" alt="Product Image">
                            </td>
                            <td>{{ $product->qty }}</td>
                            <td>{{ $sum = $product->price * $product->qty }}</td>
                            <td>
                                  <a href="{{ route('cart-item-delete',['rowId'=>$product->rowId]) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>

                        {{ $total = $total + $sum }}

                        @endforeach

                    </tbody>
                  </table>

                  <table class="table table-bordered">
                    <thead>
                        <tr>
                          <td>Total Amount (TK.)</td>
                          <td>{{ $total }}</td>
                        </tr>
                        <tr>
                            <td>Total Vat (TK.)</td>
                            <td>{{ $vat = 0 }}</td>
                          </tr>
                          <tr>
                            <td>Shipping Charge (TK.)</td>
                            <td>{{ $shipping = 15 }}</td>
                          </tr>
                          <tr class="bg bg-primary text-white">
                            <td>Payable Amount (TK.)</td>
                            <td>{{ $total - ($vat + $shipping) }}</td>
                          </tr>
                      </thead>
                  </table>
                  <div class="float-right">
                    <a href="{{ URL::TO('/') }}" class="btn btn-success">Continue Shopping</a>
                    <a href="{{ route('checkout') }}" class="btn btn-danger">Checkout</a>
                  </div>
                  
            </div>
        </div>
    </div>
@endsection