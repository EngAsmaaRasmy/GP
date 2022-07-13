@extends('layouts.master')
@section('content')
<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>{{$doctor->name}}</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Dashboard</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs Section -->

<section id="faq" class="faq section-bg inner-page">
    <div class="container" data-aos="fade-up">
        @isset($reservations)   
        <ul class="faq-list">
            @foreach($reservations as $reservation)
            <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq{{$reservation->id}}">{{$reservation->appointment_date}} <i
                        class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq{{$reservation->id}}" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Name: {{$reservation->name}}
                    </p>
                    <p>
                        Phone: {{$reservation->phone}}
                    </p>
                    <p>
                        Email: {{$reservation->email}}
                    </p>
                    <p>
                        Message: {{$reservation->message}}
                    </p>
                </div>
            </li>
            @endforeach

        </ul>
        @endisset
        <h2>No reservations .....</h2>

    </div>
</section>
@endsection