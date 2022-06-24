<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <base href="/public">
  <title>Admin Dashboard</title>
  @include("admin.css")
</head>

<body class="g-sidenav-show  bg-gray-100">
  @include("admin.sidebar")
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    @include("admin.nav")
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            @if(session()->has("message"))
                <div class="alert alert-success">
                    {{session()->get("message")}} 
                </div>
            @endif
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Update Product</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{url('updateProduct',$data->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row m-b-55">
                            <div class="name">Title</div>
                            <div class="value">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="title" value="{{$data->title}}" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="description" value="{{$data->description}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Price</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-6">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" name="price" value="{{$data->price}}">
                                            <label class="label--desc">Enter Price</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" name="quantity" value="{{$data->quantity}}">
                                            <label class="label--desc">Quantity</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Old image</div>
                            <div class="value">
                                <div class="mb-3">
                                  <img src="/productImage/{{$data->image}}" alt="Old Image" style="width:100px;height:100px;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Change image</div>
                            <div class="value">
                                <div class="mb-3">
                                  <input class="form-control" type="file" id="formFile" name="file">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-dark btn-lg" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </main>
  @include("admin.settings")
  @include("admin.js")
</body>

</html>