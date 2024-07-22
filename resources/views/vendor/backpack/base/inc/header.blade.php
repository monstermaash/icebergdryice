<header class="fixed-top">
  <!-- First Bar: Logo and Contact Info -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">IcebergDryIce</a>
      <div class="navbar-nav ml-auto contact">
        <span class="navbar-text text-white mr-3">
          <i class="fas fa-phone-alt"></i> (604) 524-0609
        </span>
        <span class="navbar-text text-white">
          <i class="fas fa-envelope"></i> admin@icebergdryice.com
        </span>
      </div>
    </div>
  </nav>

  <!-- Second Bar: Navigation Links -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary btm-nav">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/about') }}">About</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/services') }}">Services</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/contact') }}">Contact</a></li>
        </ul>
        <a class="nav-link admin text-white" href="{{ backpack_url('dashboard') }}">Welcome Admin!</a>
      </div>
    </div>
  </nav>
</header>