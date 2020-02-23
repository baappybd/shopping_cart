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
.cart{
  position: absolute;
  height: 17px;
  width: 17px;
  background: #fa9211;
  text-align: center;
  line-height: 17px;
  border-radius: 50%;
  font-size: 12px;
  color: #fff;
  margin-top: -6px;
  margin-left: -6px;
}
</style>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ URL::TO('/') }}">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link" href="{{ URL::TO('show-cart') }}"><i class="fas fa-cart-plus"><span class="cart">{{ Cart::count() }}</span></i></a></li>
          <li class="nav-item"><a class="nav-link" href="{{ URL::TO('product') }}">Add Product</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Shopping Cart</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              User Account
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">User Account</a>
              <a class="dropdown-item" href="#">Logout</a>
            </div>
          </li>
      </ul>
      </form>
    </div>
  </nav>