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
      <div style="text-align:center; font-size: 250%; margin-top:100px">Cloth <span style="color:#333;">Shop</span></div>
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    @include("User.menu")

    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
            <a href="/" class="btn btn-danger btn-lg mt-5">Contact Us</a>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
            <a href="/" class="btn btn-danger btn-lg mt-5">Contact Us</a>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
            <a href="/" class="btn btn-danger btn-lg mt-5">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
    @include("user.product")

    @include("user.about")


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Cloth Shop</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
