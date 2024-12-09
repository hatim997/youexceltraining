@extends('website.app', ['title' => 'Registration Form'])
@section('title', 'Registration Form')
@section('content')
    <div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Registration Form</h1>
            </div>
        </div>
    </div>
    <section class="">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-12 ">
                        <div class="text-center mb-5">
                            <h1 class="font-register-h1">YouExcel Training Course Registration Form</h1>
                        </div>
                    </div> -->
                <div class="col-lg-1"></div>
                <div class="col-lg-10 main-banner-padding">
                    <div class="card mb-5">

                        <div class="card-body ">
                            <div class="col-lg-12 text-center mb-4">
                                <img src="{{ url('/img/Yourexcel-img/excel-logo-new.png') }}" alt=""
                                    style="width: 170px;">
                            </div>


                            <form action="{{ route('Registration-Form') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Email<span style="color: red;">*</span></label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                aria-describedby="emailHelp" placeholder="Enter email"
                                                pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-2">
                                        <h5>Please choose Programme: <span style="color: red;">*</span></h5>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                @if (isset($course))

                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Program:</label>

                                                        <input type="text" class="form-control" id="cfma"
                                                            name="cfma" placeholder="CourseName" required
                                                            value="{{ $course }}" readonly>
                                                    </div>
                                                @else
                                                    <select class="form-control" name="cfma" id="cfma"
                                                        aria-label="Default select example" data-live-search="true"
                                                        required>
                                                        <!-- <option value="Choose from dropdown list" selected>Choose from dropdown list</option> -->
                                                        @foreach ($courses as $cour)
                                                            <option value="{{ $cour->duration }}">{{ $cour->coursename }}
                                                            </option>
                                                        @endforeach
                                                        <option value="Other">Other</option>
                                                    </select>
                                                @endif


                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <br>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Complete Name (As per your last education
                                                document)</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Name" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Father's Name/Husband's Name <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="fname" name="fname"
                                                placeholder="Father's Name/Husband's Name" required>
                                        </div>
                                    </div>

                                    <!-- <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Date & Time <span
                                                        style="color: red;">*</span></label>
                                                <input type="datetime-local" class="form-control" id="datetime" name="datetime"
                                                    placeholder="Date & Time" required>
                                            </div>
                                        </div> -->

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Complete Address <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder="Complete Address" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">City <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="city" name="city"
                                                placeholder="City" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Employer Name <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="empname" name="empname"
                                                placeholder="Employer Name" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Designation <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="designation "
                                                name="designation" placeholder="Designation" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Cell / WhatsApp Number<span
                                                    style="color: red;">*</span></label>
                                            <input {{--                                                data-inputmask="'mask': '0399-9999999'" --}} placeholder="Mobile No(XXXX-XXXXXXX)"
                                                type="text" class="form-control" id="phone" name="cellnumber"
                                                required="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Date of Birth (MM-DD-YYYY) <span
                                                    style="color: red;">*</span></label>
                                            <input type="date" class="form-control" id="date " name="date"
                                                placeholder="Date Of Birth" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">CNIC/National ID No: <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" class="form-control"
                                                data-inputmask="'mask': '99999-9999999-9'" placeholder="XXXXX-XXXXXXX-X"
                                                id="cnic " name="cnic" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Qualificatifghons <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="qualification  "
                                                name="qualification" placeholder="Qualification" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Upload Your Image </label>
                                            <input type="file" class="form-control" id="file1"
                                                name="file1" style="border:none" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Upload the Payment Proof / Screenshot here</label>
                                            <input type="file" class="form-control" id="file2" name="file2"
                                                style="border:none" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-4" style="display: inline-flex;">
                                    <h6 class="">Declaration</h6>
                                    <div class="col-lg-12 pl-0">

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" required
                                                name="check" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1">
                                                I confirm that the information given on this form is
                                                complete and accurate and
                                                nothing has been omitted. I accept that if I don’t fully comply with the
                                                requirement
                                                of the institute it can reject my application at any stage. I understand
                                                that
                                                all
                                                the dues I have paid are non-refundable, and that I shall abide by the <a
                                                    style="color: blue;" href="student-policy">student policy</a> of
                                                YouExcel.
                                                I, hereby, give my consent to the <a href="Privacy-Policy"
                                                    style="color: blue;">privacy policy </a>of
                                                YouExcel.
                                            </label>
                                        </div>
                                        <div class="form-check" style="
    padding-bottom: 4px;
">


                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-12 mt-4 text-center">
                                    <button type="submit" class="vs-btn py-3">Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
