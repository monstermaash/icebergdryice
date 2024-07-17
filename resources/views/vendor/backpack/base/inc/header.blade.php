<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ url('/') }}">IcebergDryIce</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ backpack_url('dashboard') }}">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ backpack_url('orders') }}">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ backpack_url('lists') }}">Lists</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ backpack_url('reports') }}">Reports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ backpack_url('others') }}">Others</a>
      </li>
      <li class="nav-item">
        <span class="navbar-text">Welcome, Admin!</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ backpack_url('logout') }}">Logout</a>
      </li>
    </ul>
  </div>
</nav>