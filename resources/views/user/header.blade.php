<header>
  <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

  <!-- Your page content goes here, including your navbar -->
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <!-- Your navbar content here -->
    <div class="container">
      <a class="navbar-brand" href="#"><span class="text-primary">Kelly</span>-Pharmacy</a>

      <form action="#">
        <div class="input-group input-navbar">
          <div class="input-group-prepend">
            <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
          </div>
          <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
        </div>
      </form>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <ul class="navbar-nav ml-auto">
        <!-- Other navigation items -->
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="doctors.html">Doctors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.html">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
        @auth
        <!-- Display user-specific content when authenticated -->
        <li class="nav-item">
          <x-app-layout>

          </x-app-layout>
        </li>
        <li class="nav-item">
          <!-- User logout & profile button -->
        </li>
        @else
        <!-- Display login & register buttons when guest -->
        <li class="nav-item">
          <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
        </li>
        @endauth
        <!-- Other navigation items -->
      </ul>
    </div> <!-- .container -->
  </nav>
</header>