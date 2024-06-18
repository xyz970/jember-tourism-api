@section('header')
<header>
    <nav>
      <div class="navbar">
        <i class="bx bx-menu"></i>
        <div class="logo">
          <img src="{{asset('images/logo.svg')}}" width="300px" alt="" />
        </div>
        <div class="nav-links">
          <div class="sidebar-logo">
            <span class="logo-name"> <img src="{{asset('images/logo.svg')}}" width="100px" alt="" /></span>
            <i class="bx bx-x"></i>
          </div>
          <ul class="links">
            <li><a href="index.html">Home</a></li>
            <li>
              <a href="index.html">Features</a>
            </li>
            <li>
              <a href="">About Us</a>
              <i class="bx bxs-chevron-down js-arrow arrow"></i>
              <ul class="js-sub-menu sub-menu">
                <li><a href="https://www.linkedin.com/in/luthfi-taufiqulhakim/">Luthfi</a></li>
                <li><a href="https://www.linkedin.com/in/farhan-ansyah-182491284/">Farhan</a></li>
                <li><a href="https://www.instagram.com/_irmeliagst?igsh=Y3ZyZTk5eW1sYTE2">Ira</a></li>
              </ul>
            </li>
            <li><a href="index.html">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
@endsection