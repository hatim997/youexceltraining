<!--================ Start Header Menu Area =================-->
@extends('website.app')


@section('title', 'Data Science Course Karachi | Computerized Accounting')
@section('meta_description', 'Enroll in our Data Science Course Karachi and Computerized Accounting Course Karachi. Gain in-demand skills to excel in data analysis and financial management')
@section('meta_keywords', 'Data Science Course Karachi, computerized accounting course karachi')


<!--================ End Header Menu Area =================-->

<!--================ Start Home Banner Area =================-->


@push('style')
    @media (max-width: 991px) {
    .breadcumb-wrapper {
    padding-top: 140px;
    }
    .table100{
    overflow-x: auto;

    border-collapse: collapse;
    }
    }



    table thead tr {
    height: 60px;
    color:white;
    background: #f58333
    }

    .table100 {
    width: 100%;
    overflow-x: auto; /* Enables horizontal scrolling */
    -webkit-overflow-scrolling: touch; /* Enables smooth scrolling on iOS devices */
    display: block; /* Ensures the table can scroll */
    }

    .table100 table {
    width: 100%;
    border-collapse: collapse; /* Ensures borders are not doubled */
    }

    .table100 th, .table100 td {
    white-space: nowrap; /* Prevents text wrapping */
    padding: 8px;
    text-align: left;

    }


    th{
    color:white;

    }
    td, th {
    /* font-weight: 700; */
    border: 3px solid #d0e4f9 !important;
    padding: 7px 5px;
    }
    .table100 tr {
    border-bottom: 1px solid #ddd;
    }

    /* Optional: Better visibility on mobile */
    .table100 th {
    background-color: #f2f2f2;
    font-weight: bold;
    }

    .table100 tr:hover {
    background-color: #f5f5f5;
    }

    .container-table100{
    zoom: 75%;
    }



    @media(max-width: 576px) {
    .container-table100 {
    padding-left:15px;
    padding-right: 15px
    }
    }
@endpush
@section('content')
    <div class="breadcumb-wrapper "style="background-color: #1a66ad;" data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">
                    @if ($calendars->isNotEmpty())
                        {{ $calendars[0]->title }}
                    @else
                        No Training Available
                    @endif
                </h1>
            </div>
        </div>
    </div>


    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th scope="col"class="">S. No</th>
                                <th scope="col"class="">Coures Name</th>
                                <th scope="col"class="">Demo Date </th>
                                <th scope="col"class="">Demo Timimg</th>
                                <th scope="col"class="">Class Date </th>
                                <th scope="col"class="">Class Timimg</th>
                                <th scope="col"class="">Duration</th>
                                <th scope="col"class="">Training Program Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($calendars->isNotEmpty())
                                @php
                                    // Get the title from the first calendar entry
                                    $firstTitle = $calendars[0]->title;
                                    // Filter calendars that have the same title
                                    $filteredCalendars = $calendars->filter(function ($calendar) use ($firstTitle) {
                                        return $calendar->title === $firstTitle;
                                    });
                                @endphp

                                @foreach ($filteredCalendars as $key => $calendar)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $calendar->course_name }}</td>
                                        <td>{{ $calendar->d_date }}</td>
                                        <td>{{ $calendar->d_timing }}</td>
                                        <td>{{ $calendar->class_date }}</td>
                                        <td>{{ $calendar->class_timing }}</td>
                                        <td>{{ $calendar->duration }}</td>
                                        <td><a href="{{ $calendar->d_btn }}" class="vs-btn style3">Learn More</a></td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="8">No training records available.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <section class="pb-5">
        <div class="container pb-3">
        </div>
        <div class="container cta-style2" style="border: 3px solid #fbce4d;">
            <div class="row gx-100 gy-4">
                <div class="col-lg-12 col-xl-12 col-xxl-12 pt-2 pb-5 text-center">
                    <h2 class="pt-1 text-white">Get Ready for an Exclusive Demo!</h2>
                    <p class="pt-1 fs-md text-white">
                        Fill out the form below and take the first step towards an exciting journey.  
                        Register now and experience the best we have to offer!
                    </p>
                    <br>
                </div>
            </div>
            <div class="row gx-100 gy-4 pb-5 justify-content-md-center">
                <div class="col-lg-10 col-xl-10 col-xxl-10 pb-5">
                    <form class="newsletter-form d-flex flex-row justify-content-center align-items-center">
                        <a href="{{ route('demo.confirmation') }}" class="vs-btn style2">
                            <i class="far fa-angle-right"></i> GET DEMO FORM HERE
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>
    


@endsection
