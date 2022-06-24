<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Cloth Shop</title>

    <link href="{{asset('user')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('user')}}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{asset('user')}}/assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="{{asset('user')}}/assets/css/owl.css">

  </head>

  <body>

    <div id="preloader">
      <div style="text-align:center; font-size: 250%; margin-top:100px">Cloth <span style="color:#444;">Shop</span></div>
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <?php
      $total_price = 0 ;
    ?>
    @include("User.menu")
    
    <div style="padding:100px;" align="center">
    @if(session()->has("message"))
        <div class="alert alert-success">
          {{session()->get("message")}} 
        </div>
    @endif
    <table>
        <tr style="background-color:gray;">
            <td style="padding:10px; font-size: 20px;">Product Name</td>
            <td style="padding:10px; font-size: 20px;">Quantity</td>
            <td style="padding:10px; font-size: 20px;">Price</td>
            <td style="padding:10px; font-size: 20px;">Action</td>
        </tr>
        <form action="{{url('order')}}" method="POST">
            @csrf
            @foreach($cart as $carts)
                <tr style="background-color:#222;">
                    <td style="padding:10px;color:white;">
                        <input type="text" name="productname[]" value="{{$carts->product_title}}" hidden="">
                        {{$carts->product_title}}
                    </td>
                    <td style="padding:10px;color:white;">
                      <input type="number" value="{{$carts->quantity}}" min="1" class="form-control my-2" style="width:100px" name="quantity[]">
                    </td>
                    <td style="padding:10px;color:white;">
                        <input type="text" name="price[]" value="{{$carts->price * $carts->quantity}}" hidden="">
                        <?php
                          $priceOfProduct = $carts->price * $carts->quantity;
                          echo $priceOfProduct;
                          $total_price = $total_price + $priceOfProduct;
                        ?>
                    </td>
                    <td style="padding:10px; color:white;">
                        <a class="btn btn-danger" href="{{url('delete', $carts->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="text-center my-2">
          <b>
          <?php
            echo "Price: $".$total_price.".00 Dollar";
          ?>
          </b>
        </div>
        <button class="btn btn-success mt-4">Confirm Order</button>
    </form>
    
</div>
@include("user.footer")

    <script src="{{asset('user')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('user')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="{{asset('user')}}/assets/js/custom.js"></script>
    <script src="{{asset('user')}}/assets/js/owl.js"></script>
    <script src="{{asset('user')}}/assets/js/slick.js"></script>
    <script src="{{asset('user')}}/assets/js/isotope.js"></script>
    <script src="{{asset('user')}}/assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0;
      function clearField(t){
      if(! cleared[t.id]){
          cleared[t.id] = 1;
          t.value='';
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
