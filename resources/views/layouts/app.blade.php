<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/LayoutsStyle.css')}}">
    
</head>
  <body>
   

    
<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3 logo">
        <a href="{{url('/')}}" class="logo_container">
        <img src="{{asset('images/logo/JobsList-logos_white.png')}}" id="logo_white" alt="LogoWhite">  
        <img src="{{asset('images/logo/JobsList-logos_transparent.png')}}" id="logo_black" alt="LogoBlack">  
    </a>

            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
           

            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{url('/')}}" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="{{url('/jobs')}}" class="nav-link text-uppercase font-weight-bold">Jobs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                   
                    @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-uppercase font-weight-bold" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-uppercase font-weight-bold" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                  <li class="nav-item dropdown">
                    <a class="nav-link nav-dropdown dropdown-toggle text-uppercase font-weight-bold"  type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                    </a>
                  
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                </li>
                @endguest
                 <li class="nav-item"><a href="{{route('jobs.create')}}" class="nav-link text-uppercase font-weight-bold post_job genric-btn">Post A Job</a></li>
                </ul>
            </div>
        </div>@yield('header')
    </nav>
      
</header>


<main>
  @yield('content')
</main>
    
   
    <footer class= "section-p1 footer" >
        <div class="col">
            <img class="logo" style="width:250px;" src="{{asset('images/logo/JobsList-logos_transparent.png')}}" alt="">
        </div>
        <div class="col">
          <h4>Contact</h4>
          <p> <strong>Address:</strong> 562 Welligton Road, Street 32, San Francisco</p>
          <p> <strong>Phone:</strong> +01 2222 365 / +(91) 01 2345 678</p>
          <p> <strong>Hours:</strong> 10:00-18:00, Mon-Sat</p>
          <div class="follow">
            <h4>Follow Us</h4>
            <div class="icon">
              <i class="fab fa-facebook f"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-pinterest-p"></i>
              <i class="fab fa-youtube"></i>
            </div>
          </div>
        </div>
        <div class="col">
          <h4>About</h4>
          <a href="#">About Us</a>
          <a href="#">Delivery Information</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Contact Us</a>     
        
        </div>
        <div class="copyright">
         <p> C 202. JOBSLIST</p>
        </div>
      </footer>
      
    <script src="https://kit.fontawesome.com/8f18f5e6c2.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(function () {
      $(window).on('scroll', function () {
          if ( $(window).scrollTop() > 1 ) {
              $('.navbar').addClass('active');
          } else {
              $('.navbar').removeClass('active');
          }
      });
  });
  
</script>
  </body>
</html>  @yield('footer')