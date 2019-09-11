<div class="container-fluid pt-2 pb-1 border-bottom">
  <nav class="d-flex justify-content-sm-around justify-content-between navbar navbar-expand-lg navbar-light bg-light">
    <div class="col-2 d-none d-sm-block">
      <img src="/storage/logo_tivy_vertical.svg" class="text-light" alt="Responsive image" style="height:4rem;"> 
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#searchNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="col-3 collapse navbar-collapse" id="searchNav">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search tivy's" aria-label="tivy's username" aria-describedby="button-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2">@lang("Search")</button>
        </div>
      </div>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="col-4 collapse navbar-collapse " id="navbarNav">
      <div class="row col-12 d-flex justify-content-end ">
         <ul class="navbar-nav ">
        <li class="nav-item active">
          <a class="nav-link" href="#">@lang('Home ')<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">@lang('About')</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">@lang('Contact')</a>
        </li>
        @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
