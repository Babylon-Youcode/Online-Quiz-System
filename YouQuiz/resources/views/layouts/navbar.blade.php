{{-- <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 ">
  <div class="container"><a class="navbar-brand d-flex align-items-center fw-semi-bold fs-3" href=""> <img class="me-3" src="/img/logo.png" alt="logo" height="100px"; width="100px"/></a><button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto pt-2 pt-lg-0 font-base">
        <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link fw-medium active" aria-current="page" href="{{ url('/') }}">Home</a></li>
        <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="{{ url('about_us') }}">About us</a></li>
        <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="{{ url('why_us') }}">Why us </a></li>
        <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="{{ url('about_us') }}">Contact us </a></li> 
        
      </ul>
      @if (auth()->check())
      <a class="nav-link btn btn-outline-primary order-0 " href="{{ route('profile.show') }}">{{ auth()->user()->name }}</a>
      
        <form method="POST" action="{{ route('logout') }}" class="ps-lg-5 my-2">
        @csrf
        <a class="nav-link btn btn-outline-primary order-0 " href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                 this.closest('form').submit();">
            
             <span>logout</span>
        </a>
    </form>
      @else
      <form class="ps-lg-5 my-2"><a href="{{ route('login') }}" class="btn btn-outline-primary order-0">login</a> </form>
      <form class="ps-lg-5"><a href="{{ route('register') }}" class="btn btn-outline-primary order-0">Register</a></form>
        
      @endif
    
    </div>
  </div>
</nav> --}}

<header>
  <div class="overlay"></div>
  <div class="header-top">
    <!-- <input type="checkbox" id="check"> -->
    <label for="check" class="checkbtn">
      <i class="fa fa-bars"></i>
    </label>
    <div class="items">
    <div class="logo"> <span>YouQuiz</span></div>
    <div class="navigation">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
        @if (auth()->check())
        <li><a href="#">
          {{ auth()->user()->name }}
        </a></li>
        <li>
          <form action="{{ route('logout') }}" method="post">
            @csrf
          <a href="{{ route('logout') }}" onclick="event.preventDefault();
          this.closest('form').submit();">Logout</a></form></li>
        @else
        <li><a href="{{ route('login') }}">login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
        @endif
      </ul>
      <ul class="social-maidia">
        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
      </ul>
    </div>
    </div>
  </div>
  <div class="content">
    <img src="" alt="" style="">
    <!-- <p>We are always availed to consult on taking your higher education to the next level so you can stay competitive in the global world.</p> -->
    <h1>We Help to <span>Build</span> 
      Your Dream!</h1>
    <a href="#" class="btn">GET STARTED</a>
    <button><a href="#">learn more</a></button>
  </div>
  {{-- <style>
    .main header {
  background-image: url('../children-593313_960_720.webp');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  height: 100vh;
  width: 100%;
  position: relative;
}
  </style> --}}
  
</header>