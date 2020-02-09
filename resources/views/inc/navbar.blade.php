<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ Request::route()->getName() === 'home' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item {{ Request::route()->getName() === 'about' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('about') }}">About</a>
      </li>
      <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
      </li> 
      <li class="nav-item {{ Request::route()->getName() === 'get-messages' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('get-messages') }}">See Information</a>
      </li>
      <li class="nav-item {{ Request::route()->getName() === 'api' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('api') }}">API Test</a>
      </li>
    </ul>
  </div>
  <div class="nav-item active">
      <a class="nav-link" href="#">Sign In</a>
  </div>
  <div class="navbar-nav">
      <a class="nav-item nav-link" href="#">Registration</a>
  </div>
</nav>