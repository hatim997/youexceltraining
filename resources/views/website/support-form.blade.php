@extends('website.app', ['title'=>'Support Form'])

@section('content')<div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                             <h1 class="breadcumb-title">Complaint/Support Form</h1>
            </div>
        </div>
    </div>
    <section class="">
        <div class="container">
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
                            <!--<div class="col-lg-12 text-center mb-4">-->
                            <!--    <img src="img/Yourexcel-img/excel-logo-new.png" alt="" style="width: 170px;">-->
                            <!--</div>-->
                          
                            <form action="{{url('submit-support-form')}}" method="POST">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-4">
                                        <label for="">Name <span style="color: red;">*</span></label>
                                        <input c name="name" class="form-control" placeholder="Your Name" required=""
                                               type="text">
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="">Contact <span style="color: red;">*</span></label>
                                        <input class="form-control" name="phone" id="phone" placeholder="Phone No"
                                               required="" type="tel">
                                    </div>

                                    <div class="col-lg-4" style="margin-bottom:20px">
                                        <label for="">Email <span style="color: red;">*</span></label>
                                        <input name="email" placeholder="Your Email Address"
                                               class="form-control"
                                               pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required=""
                                               type="email">
                                    </div>
                                    
                                    <div class="col-lg-6 mb-4">
                                        <label for="exampleFormControlSelect1">Your Course: <span
                                                     style="color: red;">*</span> Please press "Ctrl" for multiselect </label>
                                             <select class="form-control " name="course" id="yourcourse" multiple
                                                aria-label="Default select example"
                                                data-live-search="true" placeholder="Choose from dropdown list">
                                           
                                             @foreach($courses as $cour)
                                                <option value="{{$cour->coursename}}">{{$cour->coursename}}</option>
                                            @endforeach
                                         
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>


                                    <div class="col-lg-6 mb-4">
                                        <label for="">Batch No (eg: Power BI Batch 24):</label>
                                        <input name="batchno" placeholder="Enter your Batch Number"
                                               class="form-control"
                                              
                                               type="text">
                                    </div>


 <div class="col-lg-12">
                                    <label for="">Comments<span style="color: red;">*</span></label>
                                    <input class="form-control" name="comments" placeholder="Please explain your issue"
                                    required=""
                                           type="text">

                                </div>
                                </div>

                               
                                <br/><br/>

                                <!--<div class="col-lg-12" style="margin-top:">-->
                                <!--    <div class="captcha d-flex align-items-center">-->
                                <!--        <div class="spinner">-->
                                <!--            <label class="d-flex mt-4 me-2" >-->
                                <!--                <input type="checkbox"-->

                                <!--                       onclick="$(this).attr('disabled','disabled');"-->
                                <!--                       required>-->
                                <!--                <span class="checkmark"><span>&nbsp;</span></span>-->
                                <!--            </label>-->
                                <!--        </div>-->
                                <!--        <div class="text1">-->
                                <!--            I'm not a robot-->
                                <!--        </div>-->
                                <!--        <div class="logo">-->
                                <!--            <img src="img/Yourexcel-img/captcha.PNG"/>-->
                                <!--            <p>reCAPTCHA</p>-->
                                            <!-- <small>Privacy - Terms</small> -->
                                <!--        </div>-->
                                <!--    </div>-->

                                <!--</div>-->

                                <div class="row pl-4">
                                    <div class="col-12 text-center">
                                        <br/>
                                        <button
                                          
                                            type="submit" class="vs-btn py-3">Submit
                                        </button>
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
