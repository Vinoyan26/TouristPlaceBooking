<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title> Tourist Guide </title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
      <!--bootstrap css-->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <!--animate css-->
      <link rel="stylesheet" href="{{ asset('css/animate-wow.css') }}">
      <!--main css-->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}">
      <!--responsive css-->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
   </head>

   <body>

      <header id="header" class="top-head">
         <!-- Static navbar -->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-12 left-rs">
                  </div>

                  <div class="col-md-8 col-sm-12">
                     <div class="right-nav">
                        <div class="login-sr">
                           <div class="login-signup">

                              <ul>
                              @guest
                                 <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                    @if (Route::has('register'))
                                       <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                    @endif
                              @else
                                 <li> {{ Auth::user()->name }} </li>
                                 <li> 
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       @csrf
                                    </form>
                                 </li>
                              @endguest
                              </ul>

                           </div>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
            <!--/.container-fluid --> 
         </nav>
       </header>
     
       <!---------- --------------->
        @yield('content')
        <!---------- --------->
        
      <footer>
         
         <div class="copyright">
            <div class="container">
               <div class="row">

                  <div class="col-md-8">
                     <p> Tourist Guide Final Project Mathusan </p>
                  </div>

               </div>
            </div>
         </div>

      </footer>

      <!--main js--> 
      <script src="js/jquery-1.12.4.min.js"></script> 
      <!--bootstrap js--> 
      <script src="js/bootstrap.min.js"></script> 
      <script src="js/bootstrap-select.min.js"></script>
      <script src="js/slick.min.js"></script> 
      <script src="js/wow.min.js"></script>
      <!--custom js--> 
      <script src="js/custom.js"></script>

   </body>
</html>