<header>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#">BIKESTORE</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (request()->is('categories')) ? 'active' : '' }}" href="#">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (request()->is('products')) ? 'active' : '' }}" href="#">Products</a>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">Sign In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">Sign Up</a>
        </li>
        @endguest

        @auth 
        <li class="nav-item">
           <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById ('logout-form').submit();" class="dropdown-item">Logout
           </a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
           </form>
        </li>
        @endauth
      </ul>
    </div>
    </div>
  </nav>
</header>