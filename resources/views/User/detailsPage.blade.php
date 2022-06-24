<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Cloth Shop</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Ecommerce Template" name="keywords">
        <meta content="Bootstrap Ecommerce Template Free Download" name="description">

        <link href="img/favicon.ico" rel="icon">

        <link href="{{asset('user')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('user')}}/assets/css/fontawesome.css">
        <link rel="stylesheet" href="{{asset('user')}}/assets/css/templatemo-sixteen.css">
        <link rel="stylesheet" href="{{asset('user')}}/assets/css/owl.css">

        <link href="css/style.css" rel="stylesheet">
        <style>
            .row.align-items-center.product-detail-top {
                margin-top: 100px;
                margin-bottom: 100px;
            }
            .ib{
                display: inline-block;
            }
            .stars li{
                display: inline-block;
            }
        </style>
    </head>

    <body>
        @include("user.menu")
        
        
            <div class="product-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            
                            <div class="row align-items-center product-detail-top">
                                <div class="col-md-5">
                                <img src="{{asset('productImage')}}/{{$data->image}}" alt="">
                                </div>
                                <div class="col-md-7">
                                    <div class="product-content">
                                        <div class="title"><h2>{{$data->title}}</h2></div>
                                        <div class="ratting">
                                        <ul class="stars ib my-3">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>(<?php echo rand(0,100) ?>)</span>
                                        </div>
                                        <form class="add-cart my-3" action="{{url('addCart',$data->id)}}" method="POST">
                                            @csrf
                                            <input type="number" value="1" min="1" class="form-control ib" style="width:100px" name="quantity">
                                            <input type="submit" class="btn btn-primary ib" value="Add Cart">
                                            
                                        </form>
                                        <div class="details">
                                            <p class="mt-3">
                                                {{$data->description}} <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem qui culpa obcaecati maxime officia voluptas incidunt consectetur cum iste molestias. Laudantium molestiae sequi ex? Voluptate laboriosam accusamus voluptatum harum neque. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit, vitae.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row product-detail-bottom">
                                <div class="col-lg-12">
                                    <ul class="nav nav-pills nav-justified">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#specification">Specification</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#reviews">Reviews (1)</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="description" class="container tab-pane active"><br>
                                            <h4>Product description</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In condimentum quam ac mi viverra dictum. In efficitur ipsum diam, at dignissim lorem tempor in. Vivamus tempor hendrerit finibus. Nulla tristique viverra nisl, sit amet bibendum ante suscipit non. Praesent in faucibus tellus, sed gravida lacus. Vivamus eu diam eros. Aliquam et sapien eget arcu rhoncus scelerisque. Suspendisse sit amet neque neque. Praesent suscipit et magna eu iaculis. Donec arcu libero, commodo ac est a, malesuada finibus dolor. Aenean in ex eu velit semper fermentum. In leo dui, aliquet sit amet eleifend sit amet, varius in turpis. Maecenas fermentum ut ligula at consectetur. Nullam et tortor leo. 
                                            </p>
                                        </div>
                                        <div id="specification" class="container tab-pane fade"><br>
                                            <h4>Product specification</h4>
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Lorem ipsum dolor sit amet</li>
                                            </ul>
                                        </div>
                                        <div id="reviews" class="container tab-pane fade"><br>
                                            <div class="reviews-submitted">
                                                <div class="reviewer">Phasellus Gravida - <span>01 Jan 2020</span></div>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <p>
                                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                                </p>
                                            </div>
                                            <div class="reviews-submit">
                                                <h4>Give your Review:</h4>
                                                <div class="ratting">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="row form">
                                                    <div class="col-sm-6">
                                                        <input type="text" placeholder="Name">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="email" placeholder="Email">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <textarea placeholder="Review"></textarea>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <button>Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="container">
                                <div class="section-header">
                                    <h3>Related Products</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat, mauris non interdum cursus
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            @include("user.footer")
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
