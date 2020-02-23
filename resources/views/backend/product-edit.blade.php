<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Product Edit</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
          <div class="col col-lg-8">
            <div class="card mt-5">
                <div class="card-body">
                  <h5 class="card-title">Edit Product</h5>
                  @if ($message = Session::get('success'))
                    <div class="alert alert-success fade show">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                        </div>
                    @endif
                  <form action="{{ URL::TO('update_product',$product->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                      <label for="title">Product Title</label>
                      <input type="text" class="form-control" id="title" aria-describedby="title" value="{{ $product->title }}" name="title">
                    </div>
                    <div class="form-group">
                        <label for="image">Product Image</label>
                        <input type="file" class="form-control" id="image" aria-describedby="image" name="image" >
                        <img class="card-img-top mt-2" src="{{ asset('storage/'.$product->image) }}" style="width:100px">
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price</label>
                        <input type="text" class="form-control" id="price" aria-describedby="price" name="price" value="{{ $product->price }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Product Description</label>
                        <textarea cols="10" rows="5" class="form-control" name="description" placeholder="{{ $product->description }}"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ URL::TO('product') }}" class="btn btn-success">Back to previous page</a>
                  </form>
                </div>
              </div>
          </div>
        </div>
    </div>
    
</body>
</html>