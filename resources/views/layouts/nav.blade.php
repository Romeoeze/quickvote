<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color navcolor">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('logo/logo.png')}}" alt=" QUICK VOTE LOGO" width="100"></a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      
      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">About Us</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Services</a>
          <a class="dropdown-item" href="#">Products</a>
          <a class="dropdown-item" href="#">Our Team</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">How It Works</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">FAQ</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Contact </a>
      </li>

 <li class="nav-item">
        <a class="nav-link log" href="#">Contact Us</a>
      </li>

       <li class="nav-item">
        <a class="nav-link create" href="{{ route('admin.profile') }}">Create Event</a>
      </li>

    </ul>
    <!-- Links -->

    
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->