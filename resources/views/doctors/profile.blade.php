@extends('layouts.master')
@section('content')

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>{{$doctor->name}}</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Profile</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs Section -->
<section id="appointment" class="appointment section-bg">
  <div class="container" data-aos="fade-up">

    <form action="{{ route('doctors.updateProfile', $doctor->id) }}" method="post" autocomplete="off"
      enctype="multipart/form-data" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
      {{ csrf_field() }}
      <div class="col-md-9 mg-t-5 mg-md-t-0 mb-2">
        <img width="200ox" height="200px" src="{{asset("$doctor->image")}}"/>
      </div>
      <div class="row">
        <div class="col-md-6 form-group">
          <input type="text" name="name" class="form-control" value="{{$doctor->name}}" id="name"
            placeholder="Your Name" required>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
          <input type="email" class="form-control" name="email" value="{{$doctor->email}}" id="email"
            placeholder="Your Email" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 form-group mt-3 mt-md-0">
          <input type="file" class="form-control" name="image">
        </div>
        <div class="col-md-6 form-group">
          <select name="category_id" id="department" class="form-select">
            @foreach ($departments as $department)
            <option value="{{ $department->id }}" {{$doctor->category_id == $department->id ? 'selected' : ''}}>{{
              $department->name }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <hr>
      <h4 style="color: #161e44">Scheduales</h4>
      <div class="row">
        <div class="table-responsive-lg">
          <table class="table fixed">
            <thead>
              <tr>
                <th>Day</th>
                <th>Time</th>
                <th>Processes</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($schedules as $schedule)
              <tr>
                <td>{{ $schedule->week_day }}</td>
                <td>{{ $schedule->time}}</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('deleteSchedule', $schedule->id) }}"
                      class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Delete</a>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <h4 class="mt-2" style="color: #161e44">Add New Scheduale</h4>
      <div class="row">
        <div class="col-md-4 form-group">
          <select name="week_day" id="department" class="form-select">
            <option disabled>-- Select Day ---- </option>
            <option value="Saturday ">Saturday </option>
            <option value="Sunday ">Sunday </option>
            <option value="Monday  ">Monday </option>
            <option value="Tuesday ">Tuesday </option>
            <option value="Wednesday ">Wednesday </option>
            <option value="Thursday ">Thursday </option>
          </select>
        </div>
        <div class="col-md-4 form-group ">
          <input type="time" class="form-control" name="from">
        </div>
    
        <div class="col-md-4 form-group ">
          <input type="time" class="form-control" name="to">
        </div>
      </div>
      <div class="text-center mt-3">
        <button type="submit">Update Profile</button>
      </div>
      </form>
  </div>

  </div>
</section>

@endsection