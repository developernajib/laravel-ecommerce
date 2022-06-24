<header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{url('/')}}"><h2>Cloth<em> Shop</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li>
                      <a class="nav-link" href="{{ url('about-us') }}">About Us</a>
                </li>
                <li class="mr-4">
                      <a class="nav-link" href="{{ url('contact-us') }}">Contact Us</a>
                </li>
                
              <li class="nav-item" style="margin-top: -8px !important;">
                @if (Route::has('login'))
                @auth
                <li class="nav-item">
                  <a class="nav-link" href="{{url('showCart')}}">Cart</a>
                </li>
                <li>
                  <a class="nav-link" href="{{ url('AdminDashboard') }}">Dashboard</a>
                </li>
                <x-app-layout>

                  </x-app-layout>
                  @else
                  <li>
                    <a class="nav-link" href="{{ route('login') }}">Log in</a>
                  </li>
                  @if (Route::has('register'))
                  <li>
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                  </li>
                  @endif
                @endauth
              @endif
            </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>