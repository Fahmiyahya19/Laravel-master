<header>
    <nav class="navbar bg-cyan navbar-expand-md fixed-top">
        <a class="navbar-brand font-weight-light" href="/home"><img src="{{ url('img/logo.png') }}" alt="" width="50px" class="left"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapse_target">
          <!-- Tablet Dekstop -->
          <ul class="navbar-nav">
            <li class="nav-item d-none d-md-block d-sm-none mr-4">
              <a href="/cart"><img src="{{ url('img/cart.png') }}" alt="Cart" width="38px"></a>
            </li>
            <li class="nav-item d-none d-md-block d-sm-none">
              <a href="/logout"><button class="btn btn-danger">Logout</button></a>
            </li>
          </ul>
          <!-- Smartphone -->
          <ul class="navbar-nav">
            <li class="nav-item  d-md-none d-sm-block mt-3">
              <a href="/cart"><img src="{{ url('img/cart.png') }}" alt="Cart" width="30px"></a>
            </li>
            <li class="nav-item  d-md-none d-sm-block mt-3">
              <a href="/logout"><button class="btn btn-danger">Logout</button></a>
            </li>
          </ul>
        </div>
    </nav>
</header>