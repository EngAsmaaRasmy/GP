   <!-- ======= Top Bar ======= -->
   <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Suterday - Tusday, 09AM to 10PM
      </div>
      <div class="d-flex align-items-center">
          <i class="bi bi-phone"></i> Call us now (092) 7923231
      </div>
    </div>
  </div>
  
 <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="{{ route('home') }}" class="logo me-auto"><p>SHefaa</p></a>

      @php
        $doctor = App\Models\Doctor::where('id', session('id'))->first();
      @endphp
      @if($doctor)
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="dropdown"><a href="#"><span>{{$doctor->name}}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('doctors.editProfile', $doctor->id)}}">Profile</a></li>
              <li><a href="{{route('doctors.logout')}}">Log Out</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      @else
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      
      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>
      <a href="{{route('doctors.getLogin')}}" class="appointment-btn scrollto">Doctor?</a>
      @endif
    </div>
  </header>
    <!-- End Header -->
<!-- main header-->
