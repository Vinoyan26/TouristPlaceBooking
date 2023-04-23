
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Tourist-Guide-Admin</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('images/brand/favicon.png') }}" type="image/png">
  
  <link rel="stylesheet" href="{{ asset('css/argon.css?v=1.2.0') }}" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
           <h3> Tourist </h3>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link" href="{{ route('place.index') }}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Visited Places</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('customer.index') }}">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Customers</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('guide.index') }}">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Guiders</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('book.index') }}">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Booked</span>
              </a>
            </li>
      
        </div>
      </div>
    </div>
  </nav>

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
             
          </ul>
          
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">

            <li>
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 {{ Auth::user('admin')->name}}
              </a>
            </li>

            <li>
              <a class="nav-link pr-0" href="{{ route('logout') }}" aria-haspopup="true" aria-expanded="false"
                  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
               </form>
            </li>

          </ul>

        </div>
      </div>
    </nav>
    
    <!-- Header -->
    <!-- Header -->
    <div class="header pb-6">
      
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row mt--5">
            @yield('content')
        </div>
      </div>


    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('js/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('js/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('css/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('js/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('js/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('js/argon.js?v=1.2.0') }}"></script>
</body>

</html>