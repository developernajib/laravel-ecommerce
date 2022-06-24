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
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($order as $orders)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$orders->id}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$orders->product_name}}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-primary">${{$orders->price}}.00</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-info">{{$orders->quantity}}</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-danger">{{$orders->status}}</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <a href="{{url('updateStatus',$orders->id)}}" class="badge badge-sm bg-gradient-success">Delivered</a>
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
    </div>
  </main>
  @include("admin.settings")
  @include("admin.js")
</body>

</html>