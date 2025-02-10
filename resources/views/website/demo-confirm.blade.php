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
                                FREE Demo Session Sign Up Form </b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-demofeature">
        <div class="container top-padding-register">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 ">
                    <div class="card mb-5">

                        <div class="card-body" style="overflow-x: hidden;">
                            <div class="col-lg-12 text-center mb-4">
                                <img src="img/Yourexcel-img/excel-logo-new.png" alt="" style="width: 170px;">
                            </div>
                            <h4 class="text-center">Demo Confirmation</h4>

                            <form action="{{ route('store.demo.confirmation') }}" method="POST">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-12">
                                        <label for="">Email <span style="color: red;">*</span></label>
                                        <input name="email" placeholder="Your Email Address" class="form-control"
                                            pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required=""
                                            type="email">
                                    </div>

                                    <div class="col-lg-12">
                                        <label for="">Complete Name<span style="color: red;">*</span></label>
                                        <input c name="name" class="form-control" placeholder="Your Name" required="" type="text">
                                    </div>

                                    <div class="col-lg-12">
                                        <label for="">Cell / WhatsApp No<span style="color: red;">*</span></label>
                                        <input class="form-control" name="whatsapp" id="whatsapp" placeholder="Whatsapp No"type="tel">
                                    </div>

                                    <div class="col-lg-12">
                                        <label for="">Choose the FREE demo you'd like to attend<span style="color: red;">*</span></label>

                                        @foreach ($demoCourse as $item)
                                            <div class="custom-control custom-radio mt-4">
                                                <input type="radio" id="demo{{ $item->id }}" name="demo" class="custom-control-input" value="{{ $item->course_name }}" required>
                                                <label class="custom-control-label" for="demo{{ $item->id }}">{{ $item->course_name }}</label>
                                            </div>
                                        @endforeach
                                        
                                        {{-- <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="demo1" name="demo" class="custom-control-input" value="Dashboard Reporting with Analysis Power Bi (1st-Feb-25 between 7:00pm to 8:30pm)" required>
                                            <label class="custom-control-label" for="demo1">Dashboard Reporting with Analysis Power Bi (1st-Feb-25 between 7:00pm to 8:30pm)</label>
                                        </div>
                                        
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="demo2" name="demo" class="custom-control-input" value="First Free Session of Financial Modeling & Analysis (26th-Jan-25 between 2:00pm to 5:00pm)" required>
                                            <label class="custom-control-label" for="demo2">First Free Session of Financial Modeling & Analysis (26th-Jan-25 between 2:00pm to 5:00pm)</label>
                                        </div> --}}
                                    </div>



                                    <div class="col-lg-12">
                                        <label for="">Mode of Attend<span style="color: red;">*</span></label>
                                        
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="attend1" name="mode_of_attend" class="custom-control-input" value="On-Campus Suite: 503-506, 5th Floor, Al Samad Tower, Block 13-B, Main University Road, Gulshan-e-Iqbal, Karachi, Pakistan" required>
                                            <label class="custom-control-label" for="attend1">On-Campus Suite: 503-506, 5th Floor, Al Samad Tower, Block 13-B, Main University Road, Gulshan-e-Iqbal, Karachi, Pakistan</label>
                                        </div>
                                        
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="attend2" name="mode_of_attend" class="custom-control-input" value="Online via Zoom meeting" required>
                                            <label class="custom-control-label" for="attend2">Online via Zoom meeting</label>
                                        </div>
                                        
                                        <div class="custom-control custom-radio mt-4">
                                            <input type="radio" id="attend3" name="mode_of_attend" class="custom-control-input" value="Not sure" required>
                                            <label class="custom-control-label" for="attend3">Not sure</label>
                                        </div>
                                    </div>




                                </div>
                                <div class="row pl-4">
                                    <div class="col-12 text-center">
                                        <br />
                                        <input type="hidden" id="zc_gad" name="zc_gad" value="" />
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
