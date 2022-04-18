<div class="container">
  <header class="d-flex flex-wrap justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="@auth col-md-2.5 @else col-md-3 @endauth mb-2 mb-md-0 text-dark text-decoration-none">
      <img src="https://i.ibb.co/PhCdmqZ/logo.png" alt="logo" width="100" height="auto">
    </a>

    <div>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 {{ Request::is('/') ? 'link-dark' : 'link-secondary' }}">Home</a></li>
        <li><a href="/museums" class="nav-link px-2 {{ Request::is('museums') ? 'link-dark' : 'link-secondary' }}">Museums</a></li>
        <li><a href="/cities" class="nav-link px-2 {{ Request::is('cities') ? 'link-dark' : 'link-secondary' }}">Cities</a></li>
        <li><a href="#" class="nav-link px-2 {{ Request::is('#') ? 'link-dark' : 'link-secondary' }}">About</a></li>
      </ul>
    </div>
    @auth
    <div class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" style="color:rgb(29, 29, 29)" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        {{ auth()->user()->name }}
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="/"><i class="bi bi-house"></i> Home</a></li>
        @can('admin')
          <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-file-text"></i> Dashboard</a></li>
        @endcan
        <li><hr class="dropdown-divider"></li>
        <li>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item" href="#"><i class="bi bi-door-closed"></i> Logout</button>
          </form>
        </li>
      </ul>
    </div>
    @else
      <div class="col-md-3 text-end">
        <a href ="/login"><button type="button" class="btn btn-dark btn-sm me-2"><i class="bi bi-door-open-fill"></i> Sign In</button></a>
      </div>
    @endauth
  </header>
</div>