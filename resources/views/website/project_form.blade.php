@extends('website.app', ['title' => 'Enquiry Form'])

@section('content')
    <br> <br>
    <br>
    <br>

    <section class="py-3 background-image" style="background-image: url(&quot;assets/img/bg/tutor-bg-1.jpg&quot;);">
        <div class="container">
            <div class="row flex-row-reverse justify-content-between">

                <div class="col-md-12 col-lg-12 col-xl-12 align-self-center text-center text-md-start mb-4 pb-md-0">
                    <div class="breadcumb-content  text-center">
                        <p class="breadcumb-text" style="color:black">
                            <b>
                                Start a conversation with one of our Training Solutions Experts to see if YouExcel is the
                                right platform to fuel your Career Growth. </b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-demofeature">
        <div class="container top-padding-register">
            <div class="row">
                <!-- <div class="col-lg-12 main-banner-padding">
                            <div class="text-center mb-5">
                                <h1 class="font-register-h1">YouExcel - Training Feedback Form</h1>
                            </div>
                        </div> -->
                <div class="col-lg-1"></div>
                <div class="col-lg-10 ">
                    <div class="card mb-5">

                        <div class="card-body" style="overflow-x: hidden;">
                            <div class="col-lg-12 text-center mb-4">
                                <img src="img/Yourexcel-img/excel-logo-new.png" alt="" style="width: 170px;">
                            </div>

                            <h4 class="text-center">Project Enquiry Form</h4>

                            <form action="{{ route('store.project.website') }}" method="POST">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-4">
                                        <label for="">Name <span style="color: red;">*</span></label>
                                        <input c name="name" class="form-control" placeholder="Your Name" required=""
                                            type="text">
                                    </div>

                                    <div class="col-lg-3">
                                        <label for="">Contact No<span style="color: red;">*</span></label>
                                        <input class="form-control" name="phone" id="phone" placeholder="Phone No"
                                            required="" type="tel">
                                    </div>

                                    <div class="col-lg-5">
                                        <label for="">WhatsApp No(Mention again if Contact no is same)</label>
                                        <input class="form-control" name="whatsapp" id="whatsapp" placeholder="Whatsapp No"
                                            type="tel">
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="">Email <span style="color: red;">*</span></label>
                                        <input name="email" placeholder="Your Email Address" class="form-control"
                                            pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required=""
                                            type="email">
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="">Course Preference 1: <span style="color: red;">*</span></label>
                                        @if (isset($course_name))
                                            <input class="form-control" name="project_name" id="project_name"
                                                readonly="true" value="{{ $course_name }}">
                                        @else
                                            <select class="form-control " name="project_name" id="project_name"
                                                aria-label="Default select example" data-live-search="true"
                                                placeholder="Choose from dropdown list">
                                                <!-- <option value="Choose from dropdown list" selected readonly>Choose from dropdown list</option> -->
                                                @foreach ($projects as $project)
                                                    <option value="{{ $project->project_name }}">
                                                        {{ $project->project_name }}</option>
                                                @endforeach
                                                <option value="Other">Other</option>
                                            </select>
                                        @endif
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="">Course Preference 2: <span style="color: red;">*</span></label>
                                        @if (isset($course_name))
                                            <input class="form-control" name="project_name_2" id="project_name_2"
                                                readonly="true" value="{{ $course_name }}">
                                        @else
                                            <select class="form-control " name="project_name_2" id="project_name_2"
                                                aria-label="Default select example" data-live-search="true"
                                                placeholder="Choose from dropdown list">
                                                <!-- <option value="Choose from dropdown list" selected readonly>Choose from dropdown list</option> -->
                                                @foreach ($projects as $project)
                                                    <option value="{{ $project->project_name }}">
                                                        {{ $project->project_name }}</option>
                                                @endforeach
                                                <option value="Other">Other</option>
                                            </select>
                                        @endif
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="">Course Preference : 3<span style="color: red;">*</span></label>
                                        @if (isset($course_name))
                                            <input class="form-control" name="project_name_3" id="project_name_3"
                                                readonly="true" value="{{ $course_name }}">
                                        @else
                                            <select class="form-control " name="project_name_3" id="project_name_3"
                                                aria-label="Default select example" data-live-search="true"
                                                placeholder="Choose from dropdown list">
                                                <!-- <option value="Choose from dropdown list" selected readonly>Choose from dropdown list</option> -->
                                                @foreach ($projects as $project)
                                                    <option value="{{ $project->project_name }}">
                                                        {{ $project->project_name }}</option>
                                                @endforeach
                                                <option value="Other">Other</option>
                                            </select>
                                        @endif
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="">City <span style="color: red;">*</span></label>
                                        <input name="city" placeholder="Your City" class="form-control" required=""
                                            type="text">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="">Comments</label>
                                        <input class="form-control" name="comments" placeholder="Comments" type="text">
                                    </div>

                                    <label for="" style="font-weight: bold; margin-top: 5px;">Preferred Timing</label>
                                    <div class="col-lg-4">
                                        <div>
                                            <input type="checkbox" id="morning" name="preferred_timing[]" value="Morning">
                                            <label for="morning">Morning</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        {{-- <label for="afternoon" style="font-weight: bold;">Preferred Timing - Afternoon:</label> --}}
                                        <div>
                                            <input type="checkbox" id="afternoon" name="preferred_timing[]" value="Afternoon">
                                            <label for="afternoon">Afternoon</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        {{-- <label for="evening" style="font-weight: bold;">Preferred Timing - Evening:</label> --}}
                                        <div>
                                            <input type="checkbox" id="evening" name="preferred_timing[]" value="Evening">
                                            <label for="evening">Evening</label>
                                        </div>
                                    </div>

                                    <br /><br />
                                </div>
                                <div class="row pl-4">
                                    <div class="col-12 text-center">
                                        <br />
                                        <button type="submit" class="vs-btn py-3">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
