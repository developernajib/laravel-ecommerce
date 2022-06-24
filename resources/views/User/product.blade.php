<style>
  .btn-s {
      border: 1px solid transparent !important;
      padding: .375rem .75rem !important;
    }
    .add-cart {
      text-align: center;
      margin-bottom: 15px;
      margin-top: -15px;
    }
    .add-cart input{
      width: 40%;
      margin-right: 8px
    }
    .pagination {
      justify-content: center;
    }
    .form-control{
      display: inline-block;
      border-radius: 4px;
    }
    .product-item img{
      height: 250px !important;
    }
</style>
<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          @if(session()->has("message"))
            <div class="alert alert-success">
              {{session()->get("message")}} 
            </div>
          @endif
              <div class="section-heading d-flex justify-content-between">
                <h2>Latest Products</h2>
                <form action="{{url('search')}}" method="GET" class="form-inline" style="float:right;padding:10px;">
                  @csrf
                  <input class="form-control" type="search" value="" name="search" placeholder="Search">
                  <button type="submit" value="" class="btn-success btn-s">Search</button>
                </form>
              </div>
            </div>

          @foreach($data as $product)

          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="product-item">
              <a href="product/{{$product->id}}"><img style="height:380px;width:100%;" src="{{asset('productImage')}}/{{$product->image}}" alt=""></a>
              <div class="down-content">
                <a href={{$product->id}}><h4>{{$product->title}}</h4></a>
                <h6>${{$product->price}}</h6>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>(<?php echo rand(0,100) ?>)</span>
              </div>
              <form class="add-cart" action="{{url('addCart',$product->id)}}" method="POST">
                  @csrf
                  <input type="number" value="1" min="1" class="form-control" style="width:100px" name="quantity">
                  <input type="submit" class="btn btn-primary" value="Add Cart">
              </form>
            </div>
          </div>

          @endforeach

        </div>
        @if(method_exists($data, "links"))
          <div>
              {!! $data->links() !!}
          </div>
        @endif
      </div>
    </div>