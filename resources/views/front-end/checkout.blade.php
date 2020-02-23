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
            <div class="col-md-12">
                <h4 class="text-success mb-4 text-center">If you are not a register user please register first</h4>
            </div>
            <div class="col-md-6">
                <div class="card p-4">
                    <div class="card-title"><h3>Register User</h3></div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success fade show">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form action="{{ route('add-user') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="First Name" name="fname"/>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name" name="lname"/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email"/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password"/>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" placeholder="Phone" name="phone"/>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="Address" name="address"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-success" value="Register"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4">
                    <div class="card-title"><h3>Login</h3></div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email"/>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-success" value="Login"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection