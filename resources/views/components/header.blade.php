<div class="container-fluid pt-2 pb-1 border-bottom bg-white">
  <nav class="d-flex justify-content-lg-around justify-content-between navbar navbar-expand-lg ">
    <div class="col-2 d-none d-lg-block ">
      <img src="/storage/logo_tivy_vertical.svg" class="text-light" alt="Responsive image" style="height:4rem;"> 
    </div>

    <button class="navbar-toggler bg-transparent border-0" type="button" data-toggle="collapse" data-target="#searchNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-search"></i>
    </button>
    <div class="col-lg-4 col-md-5 col-sm-6 col-7 collapse navbar-collapse" id="searchNav">
      <div class="input-group mb-3">
        <input type="text" class="rounded-pill form-control" placeholder="Search tivy's" aria-label="tivy's username" aria-describedby="button-addon2">
        <div class="input-group-append">
          <button class="border-0 btn btn-outline-secondary bg-transparent" type="button" id="button-addon2">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </div>

    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars fa-2x"></i>
    </button>
    <div class="col-lg-3 col-md-3 col-sm-5 col-5 collapse navbar-collapse " id="navbarNav">
      <div class="row col-12 d-flex justify-content-end ">
         <ul class="navbar-nav ">
        <li class="nav-item active">
          <a class="nav-link text-dark" href="#">@lang('Home')
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-dark" href="#">@lang('About')</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-dark" href="#">@lang('Contact')</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link active text-dark" href="#">@lang('Profile')</a>
        </li>
        @guest
                      

        <li class="nav-item navbar-dark">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>                         
        @if (Route::has('register'))
            <li class="nav-item">
                <a  class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else    
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>


                 <a class="" href="{{ route('user.show', Auth::user()) }}">{{ Auth::user()->name }}  </a>
                

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>  
        </li>

       

    @endguest
      </ul>
      </div>
    </div>
  </nav>
</div>