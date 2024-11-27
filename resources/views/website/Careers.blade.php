@extends('website.app', ['title'=>'Careers'])

@section('content')
<div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                             <h1 class="breadcumb-title">CAREERS</h1>
            </div>
        </div>
    </div>
<section class="section-demofeature">
    <!-- ====================== Start CEO Area ======================== -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <!-- <div class="main_title" data-aos="fade-up">
                    <h2 class="mb-3">Founder and CEO</h2>
                </div> -->
            </div>
        </div>
        <div class="row ">
            
            <div class="col-lg-12">
                <div class="" >
                    <!--<h2 class="mb-3">CAREERS</h2>-->
                    <h3 class="mt-3 text-center">Drop Your CV / LinkedIn Profile Link</h3>
                </div>
            </div>

            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card mb-5">

                    <div class="card-body">
                        <!--<div class="col-lg-12 text-center mb-4">-->
                        <!--    <img src="https://youexceltraining.com/img/Yourexcel-img/excel-logo-new.png" alt="" style="width: 170px;">-->
                        <!--</div>-->
                        <!-- <h2 class="mb-5 text-center">Career Form</h2> -->
                        <form action="{{url('Careers')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row p-3">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Full Name<span
                                                style="color: red;"> *</span></label>
                                        <input type="text" class="form-control" id="fullname" name="fullname"
                                            placeholder="Full Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6"></div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone No<span
                                                style="color: red;"> *</span></label>
                                        <input type="text" class="form-control" id="phone" name="cellno"
                                            placeholder="Phone No">
                                    </div>
                                </div>
                                <div class="col-lg-6"></div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email <span
                                                style="color: red;">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email"
                                            pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6"></div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Position Applying For <span
                                                style="color: red;">*</span></label>
                                        <input type="text" class="form-control" id="applyfor" name="applyfor"
                                            placeholder="" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Cover Letter <span
                                                style="color: red;"> *</span></label>
                                        <textarea class="form-control" name="coverletter" id="coverletter"
                                            rows="3"></textarea>
                                    </div>
                                </div>
 <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">LinkedIn Profile Link<span
                                                style="color: red;">*</span></label>
                                        <input type="text" class="form-control" id="applyfor" name="applyfor"
                                            placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Upload Document<span
                                                style="color: red;">*</span></label>
                                        <input type="file" class="form-control" id="filee" name="filee"
                                            placeholder="" style="
    border: none;
" required>
                                    </div>
                                </div>
                                <!-- <div class="row pl-4"> -->
                                <div class="col-lg-12 text-center">
                                    <button type="submit" id="submit" class="vs-btn py-3">Submit</button>
                                    <!-- </div> -->
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