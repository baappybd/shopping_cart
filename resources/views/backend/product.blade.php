<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Product</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
          <div class="col col-lg-8">
            <div class="card mt-5">
                <div class="card-body">
                  <a href="{{ URL::TO('/') }}" class="btn btn-primary" target="_blank">Visit Site</a>
                  <h5 class="card-title">Add Product</h5>
                  @if ($message = Session::get('success'))
                    <div class="alert alert-success fade show">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                        </div>
                    @endif
                  <form action="{{ URL::TO('product_store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="title">Product Title</label>
                      <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Enter title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="image">Product Image</label>
                        <input type="file" class="form-control" id="image" aria-describedby="image" name="image">
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price</label>
                        <input type="text" class="form-control" id="price" aria-describedby="price" name="price">
                    </div>
                    <div class="form-group">
                        <label for="description">Product Description</label>
                        <textarea cols="10" rows="5" class="form-control" name="description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
          </div>
        </div>
        <div class="row justify-content-md-center mt-5">
            <div class="col col-lg-8">
              <caption>All table</caption>
                <table class="table">
                   
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col" style="width: 160px;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($products as $product)
                        @php($i=1)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $product->title }}</td>
                            <td>
                                <img class="card-img-top" src="{{ asset('storage/'.$product->image) }}" style="width:100px">
                            </td>
                            <td>{{ $product->description }}</td>
                            <td>
                                <a href="{{ URL::TO('product_edit',$product->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ URL::TO('product_delete',$product->id) }}" method="POST" class="d-inline" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                  {{ method_field('delete') }}
                                  <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">delete</button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    
</body>
</html>