<!-- main footer  opened--->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>SHefaa</h3>
              <p>
                4 Aladl st Albasatteen  <br>
                Square, Alkharga <br><br>
                <strong>Phone:</strong> (092) 7923231<br>
                <strong>Email:</strong> shefaa-clinic@gmail.com<br>
              </p>
             
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Doctor?</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#appointment">Make an Appointment</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Our Departments</h4>
            <ul>
              @foreach($departments as $department)
              <li><i class="bx bx-chevron-right"></i> <a>{{$department->name}}</a></li>
              @endforeach
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Shefaa</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
<!--- main footer -->