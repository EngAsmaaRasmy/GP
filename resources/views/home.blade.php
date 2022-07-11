@extends('layouts.master')
@section('content')
<!-- ======= landing Section ======= -->
<section id="hero">
</section><!-- End Hero -->

<main id="main">

  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title"><a href="#">Heart </a></h4>
            <p class="description">The heart is a fist-sized organ
              that pumps blood throughout your body. It's the primary
              organ of your circulatory system. Your heart contains four
              main sections .</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4 class="title"><a href="#">Internal Medicine</a></h4>
            <p class="description">Internal diseases (Internal Medicine) the department
              that diagnoses and treats the problems
              in the internal organs of patients over the age of 15</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="fas fa-thermometer"></i></div>
            <h4 class="title"><a href="#">Pediatrics</a></h4>
            <p class="description">Pediatrics is the branch of medicine dealing with the
              health and medical care of infants, children,
              and adolescents from birth up to the age of 18</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title"><a href="#">Gynaecology</a></h4>
            <p class="description">A gynecologist is a doctor who specializes in
              female reproductive health. They diagnose and
              treat issues related to the female reproductive tract.</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Featured Services Section -->


  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About Us</h2>
        <p> The material published on the shefaa websit is
          for information only and should not be considered
          as a medical advice or a treatment recommendation.
          You should consult a doctor if the symptoms do not disappear</p>
      </div>

      <div class="row">
        <div class="col-lg-6" data-aos="fade-right">
          <img src="assets/img/about.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>keep your healthy.</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua.
          </p>
          <ul class="col-lg-6">

            <li><i class="bi bi-check-circle"></i>Maintain a Healthy Weight </li>
            <li><i class="bi bi-check-circle"></i>Eat a healthy diet. </li>
            <li><i class="bi bi-check-circle"></i>Avoid alcohol. </li>
            <li><i class="bi bi-check-circle"></i>Drink Enough Water </li>
            <li><i class="bi bi-check-circle"></i>Reduce intake of harmful fats. </li>
            <li><i class="bi bi-check-circle"></i>Have regular check-ups.</li>

          </ul>
        </div>

      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row no-gutters">

        <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="fas fa-user-md"></i>
            <span data-purecounter-start="0" data-purecounter-end="{{ $doctors->count() }}"
              data-purecounter-duration="1" class="purecounter"></span>

            <p><strong>Doctors</strong> consequuntur quae qui deca rode</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="far fa-hospital"></i>
            <span data-purecounter-start="0" data-purecounter-end="{{ $departments->count() }}"
              data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Departments</strong> adipisci atque cum quia aut numquam delectus</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="fas fa-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="70" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Awards</strong> rerum asperiores dolor molestiae doloribu</p>
          </div>
        </div>


      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Features Section ======= -->

  <!-- End Features Section -->


  <!-- ======= Appointment Section ======= -->
  <section id="appointment" class="appointment section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Make an Appointment</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
          in iste officiis commodi quidem hic quas.</p>
      </div>

      <form action="{{ route('makeAnAppointment') }}" method="post" autocomplete="off" enctype="multipart/form-data"
        role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group mt-3">
            <select name="category_id" id="department" class="form-select">
              <option value="">Select Department</option>
              @foreach ($departments as $department)
              <option value="{{ $department->id }}">{{ $department->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="doctor_id" id="doctor" class="form-select">
              <option value="">Select Doctor</option>
            </select>
          </div>
          <div class="col-md-4 form-group mt-3" id="schedule">
            <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date"
              required>
          </div>
        </div>

        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
        </div>
        {{-- <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
        </div> --}}
        <div class="text-center mt-3">
          <button type="submit">Make an Appointment</button>
        </div>
      </form>

    </div>
  </section><!-- End Appointment Section -->

  <!-- ======= Departments Section ======= -->
  <section id="departments" class="departments">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Departments</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
          in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <ul class="nav nav-tabs flex-column">
            @foreach ($departments as $count => $department)
            <li class="nav-item">
              <a @if($count==0 ) class="nav-link active show" @else class="nav-link" @endif data-bs-toggle="tab"
                data-bs-target="#tab-{{ $department->id }}">
                <h4>{{ $department->name }}</h4>
                <p>{{ $department->desc }}</p>
              </a>
            </li>
            @endforeach
          </ul>
        </div>
        <div class="col-lg-8">
          <div class="tab-content">
            @foreach ($departments as $count => $department)
            <div @if($count==0) class="tab-pane active show" @else class="tab-pane" @endif
              id="tab-{{ $department->id }}">
              <h3>{{ $department->name }}</h3>
              <p class="fst-italic">{{ $department->desc }}</p>
              <img src="{{asset("$department->image")}}" alt="" class="img-fluid">
              <p>{{ $department->description }}</p>
            </div>
            @endforeach
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Departments Section -->


  <!-- ======= Doctors Section ======= -->
  <section id="doctors" class="doctors section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Doctors</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
          in iste officiis commodi quidem hic quas.</p>
      </div>
      <div class=" testimonials-slider swiper " data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          @foreach($doctors as $doctor)
          <div class="swiper-slide">
            <div class="doctors-item member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="{{asset("$doctor->image")}}" class="img-fluid" style="height: 60% !important" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{$doctor->name}}</h4>
                <span>
                  {{$doctor->category->name}}
                </span>
                <span> {{$doctor->schaduale->week_day}} {{$doctor->schaduale->time}}</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="swiper-pagination"></div>
      </div>

  </section><!-- End Doctors Section -->



  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
          in iste officiis commodi quidem hic quas.</p>
      </div>

    </div>

    <div>
      <iframe style="border:0; width: 100%; height: 400px;"
      src="https://maps.google.com/maps?q=4%20Aladl%20st%20Albasatteen%20Square,%20Alkharga&t=&z=13&ie=UTF8&iwloc=&output=embed"
        frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container">

      <div class="row mt-5">

        <div class="col-lg-12">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>
                    4 Aladl st Albasatteen
                    Square, Alkharga
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>shefaa-clinic@gmail.com <br />
                    shClinic12@gmail.com </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>19911<br>(092) 7923231</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection
@section('js')
<script>
  $(document).ready(function () {
            $('#department').on('change', function () {
                var department = this.value;
                $("#doctor").html('');
                $.ajax({
                    url: "{{url('/fetch-doctors')}}",
                    type: "POST",
                    data: {
                        category_id: department,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                      $('#doctor').html('<option value="">Select Doctor</option>');
                        $.each(result.doctors, function (key, value) {
                            $("#doctor").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });

            // $('#doctor').on('change', function () {
            //     var doctor = this.value;
            //     $("#schedule").html('');
            //     $.ajax({
            //         url: "{{url('/fetch-schedule')}}",
            //         type: "POST",
            //         data: {
            //             doctor_id: doctor,
            //             _token: '{{csrf_token()}}'
            //         },
            //         dataType: 'json',
            //         success: function (result) {
            //             $.each(result.schedule, function (key, value) {
            //                 $("#schedule").append('<p >'+ value.name + value.name+'</p>');
            //             });
            //         }
            //     });
            // });
  });
</script>

@endsection