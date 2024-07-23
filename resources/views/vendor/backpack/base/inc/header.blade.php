<header class="fixed-top">
  <!-- First Bar: Logo and Contact Info -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">IcebergDryIce</a>
      <div class="navbar-nav ml-auto contact">
        <a href="tel:+16045240609" class="navbar-text text-white mr-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="phone h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
          </svg>
          (604) 524-0609
        </a>
        <a href="mailto:admin@icebergdryice.com" class="navbar-text text-white">
          <svg xmlns="http://www.w3.org/2000/svg" class="email h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
          </svg>
          admin@icebergdryice.com
        </a>
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
          <li class="nav-item"><a class="nav-link home text-white" href="{{ url('/') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/about') }}">About</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/services') }}">Services</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/contact') }}">Contact</a></li>
        </ul>
        <a class="nav-link admin text-white" href="{{ backpack_url('dashboard') }}">Welcome Admin!</a>
      </div>
    </div>
  </nav>
</header>