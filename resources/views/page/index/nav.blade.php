<nav class="navbar navbar-expand-sm">
    <div class="container-fluid">
      <ul class="navbar-nav mx-4">
        <div class="navlogo">
          <h3>Logo</h3>
        </div>
        <div class="navlist d-flex flex-row">
          <a class="nav-link {{ Request::is('/') ? 'active' : ''}}" href="/">Home</a>
          <a class="nav-link {{ Request::is('shop') ? 'active' : ''}}" href="/shop">Shop</a>
          <a class="nav-link" href="/login">Help</a>
          <a class="nav-link" href="/signup">Blog</a>
        </div>
      </ul>
      <ul class="navbar-nav float-right mx-4">
          <li class="nav-item">
            <a class="" href="/profile">login</a>
          </li>
          <li class="nav-item">
            <a class="" href="/signup">signup</a>
          </li>
      </ul>
    </div>
  </nav>