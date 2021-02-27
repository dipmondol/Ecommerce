
    <!--Main Navigation-->
    <header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-light fixed-top scrolling-navbar">
    <div class="container-fluid">

      <!-- Brand -->
      {{-- <a class="navbar-brand" href="#">
        <i class="fab fa-mdb fa-3x" alt="mdb logo"><img src="/img/car.png" alt=""></i>
      </a> --}}

      <!-- Collapse button -->
      {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> --}}

      <!-- Links -->
      <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Right -->
        <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <a href="{{asset('/')}}" class="nav-link waves-effect">
             Home
            </a>
          </li>
           <li class="nav-item ">
            <a href="#" class="nav-link waves-effect">
              Category
            </a>
          </li>
           <li class="nav-item ">
            <a href="#" class="nav-link waves-effect">
              About Us
            </a>
          </li>
          <li class="nav-item">
            <a href="{{asset('/add-item')}}" class="nav-link waves-effect">
              Add Item
            </a>
          </li>
     

          <li class="nav-item">
            <a href="{{asset('/cart')}}" class="nav-link navbar-link-2 waves-effect">
              @if(session()->has('cart-item-count'))
              <span class="badge badge-pill red">{{ session()->get('cart-item-count') }}</span>
              @else
              <span class="badge badge-pill red"></span>
              @endif
              <i class="fas fa-shopping-cart pl-0"></i>
            </a>
          </li>


        </ul>

      </div>
      <!-- Links -->
    </div>
  </nav>
  <!-- Navbar -->
