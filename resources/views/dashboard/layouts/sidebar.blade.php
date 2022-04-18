<nav
  id="sidebarMenu"
  class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'text-dark' : 'text-muted'}}" aria-current="page" href="/dashboard">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/museums*') ? 'text-dark' : 'text-muted'}}" href="/dashboard/museums">
          <span data-feather="file-text"></span>
          Museums Data
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/cities*') ? 'text-dark' : 'text-muted'}}" href="/dashboard/cities">
          <span data-feather="file-text"></span>
          Cities Data
        </a>
      </li>
    </ul>
  </div>
</nav>