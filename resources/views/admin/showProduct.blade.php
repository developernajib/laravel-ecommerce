<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Products</title>
  @include("admin.css")
</head>

<body class="g-sidenav-show  bg-gray-100">
  @include("admin.sidebar")
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    @include("admin.nav")
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
            @if(session()->has("message"))
                <div class="alert alert-success">
                    {{session()->get("message")}}
                </div>
            @endif
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>All Products</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Thumbnail</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $product)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$product->id}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <img src="{{asset('productImage/'.$product->image)}}" width="60px" height="60px" />
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$product->title}}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-info">${{$product->price}}.00</span>
                      </td>
                      <td class="align-middle text-center" >
                        <span class="text-secondary text-xs font-weight-bold badge badge-sm bg-gradient-secondary" style="color:#fff!important;">
                            {{$product->quantity}}
                        </span>
                      </td>
                      <td class="align-middle">
                        <a href="{{url('updateView',$product->id)}}" type="button" class="btn btn-success" style="color:#fff!important;padding:0.5rem 0.75rem!important;margin-bottom:0!important;" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                      <td class="align-middle">
                        <a href="{{url('deleteProduct',$product->id)}}" type="button" onclick="return confirm('Are you sure?')" class="btn btn-danger" style="padding:0.5rem 0.75rem!important;margin-bottom:0!important;">
                          Delete
                        </a>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>2022,
                made with <i class="fa fa-heart" aria-hidden="true"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  @include("admin.settings")
  @include("admin.js")
</body>

</html>