<!--================ Start Header Menu Area =================-->
@extends('website.app')
<!--================ End Header Menu Area =================-->

<!--================ Start Home Banner Area =================-->
@section('content')
    <style>
        /* Icon set - http://ionicons.com */

        @import url(https://fonts.googleapis.com/css?family=Raleway:400,500);

        figure.snip1249 {
            font-family: 'Raleway', Arial, sans-serif;
            position: relative;
            overflow: hidden;
            margin: 10px;
            min-width: 220px;
            max-width: 310px;
            width: 100%;
            background: #1a1a1a;
            color: #ffffff;
            text-align: left;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
            background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.3) 100%);
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.3) 100%);
        }

        figure.snip1249 * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;
        }

        figure.snip1249 .image {
            position: relative;
        }

        figure.snip1249 img {
            max-width: 100%;
            vertical-align: top;
        }

        figure.snip1249 i {
            position: absolute;
            top: 7px;
            left: 12px;
            font-size: 32px;
            opacity: 0;
            z-index: 2;
            -webkit-transition-delay: 0;
            transition-delay: 0;
        }

        figure.snip1249 h3 {
            margin: 0;
            font-weight: 500;
            text-transform: uppercase;
        }

        figure.snip1249:before,
        figure.snip1249:after {
            width: 120px;
            height: 120px;
            position: absolute;
            top: 0;
            left: 0;
            content: '';
            -webkit-transition: all 0.35s ease;
            transition: all 0.35s ease;
            z-index: 1;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.35) 100%);
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.35) 100%);
            -webkit-transition-delay: 0.2s;
            transition-delay: 0.2s;
        }

        figure.snip1249:before {
            background-color: #20638f;
            -webkit-transform: skew(-45deg) translateX(-150%);
            transform: skew(-45deg) translateX(-150%);
            border-right: 1px solid #20638f;
        }

        figure.snip1249:after {
            background-color: #962d22;
            -webkit-transform: skew(-45deg) translateX(-175%);
            transform: skew(-45deg) translateX(-175%);
            border-right: 1px solid #962d22;
        }

        figure.snip1249 figcaption {
            padding: 25px 80px 25px 25px;
            background-color: #ffffff;
            color: #000000;
            position: relative;
            font-size: 0.9em;
        }

        figure.snip1249 figcaption p {
            margin-bottom: 15px;
        }

        figure.snip1249 figcaption:before {
            width: 150px;
            height: 150px;
            position: absolute;
            bottom: 0;
            right: 0;
            content: '';
            z-index: 1;
            background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.35) 100%);
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.35) 100%);
            background-color: #20638f;
            -webkit-transform: skew(-45deg) translateX(50%);
            transform: skew(-45deg) translateX(50%);
            border-right: 1px solid #20638f;
        }

        figure.snip1249 .add-to-cart {
            display: inline-block;
            width: auto;
            border: 2px solid #20638f;
            padding: 0.4em 0.6em;
            color: #20638f;
            text-decoration: none;
            font-weight: 800;
            font-size: 0.9em;
            text-transform: uppercase;
        }

        figure.snip1249 .add-to-cart:hover {
            background-color: #20638f;
            color: #ffffff;
        }

        figure.snip1249 .price {
            position: absolute;
            right: 0;
            bottom: 0;
            color: #ffffff;
            z-index: 2;
            text-transform: uppercase;
            padding: 20px;
            font-weight: 800;
            font-size: 1.2em;
            text-align: center;
        }

        figure.snip1249 .price s {
            display: block;
            font-size: 0.85em;
            font-weight: 400;
            opacity: 0.8;
        }

        figure.snip1249:hover i,
        figure.snip1249.hover i {
            opacity: 0.7;
            -webkit-transition-delay: 0.3s;
            transition-delay: 0.3s;
        }

        figure.snip1249:hover h3,
        figure.snip1249.hover h3 {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 1;
        }

        figure.snip1249:hover:before,
        figure.snip1249.hover:before {
            -webkit-transition-delay: 0s;
            transition-delay: 0s;
            -webkit-transform: skew(-45deg) translateX(-50%);
            transform: skew(-45deg) translateX(-50%);
        }

        figure.snip1249:hover:after,
        figure.snip1249.hover:after {
            -webkit-transition-delay: 0.1s;
            transition-delay: 0.1s;
            -webkit-transform: skew(-45deg) translateX(-75%);
            transform: skew(-45deg) translateX(-75%);
        }

    </style>
    <section class="view-courses-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <h2 class="text-center" style="margin-top: 150px;">Gallery</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="https://scontent.fkhi2-2.fna.fbcdn.net/v/t39.30808-6/308887721_2992169111075548_6625885615019416446_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeGpRSGdu8HtoLSLwV_AvyEJSz36o1ZXs2xLPfqjVlezbOhJlF2UdLkLaA-xv7dSTEhMHYXF25oWP_I2J71GX24B&_nc_ohc=42X5qHi4CQAAX-e6Xmw&_nc_ht=scontent.fkhi2-2.fna&oh=00_AT_eCj9d-FY6MiFvTVfWc3Zwt0s6Gb5bGAh0PneTuya5Yw&oe=63544B3D" style="height: 300px;width: 360px">
                        </div>

                        <div class="col-md-4">
                            <img src="https://scontent.fkhi2-3.fna.fbcdn.net/v/t39.30808-6/309219042_2998371763788616_6997726531768444101_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeGw6WpNxKkqX4L7KQRHnETcbJ0XMlXlwctsnRcyVeXBy5DbPuhJv-8MnxIVEcq01mvGY_dtRgYU6GmRpMoKNrAQ&_nc_ohc=gh_4GyYL5QcAX9_FGWU&_nc_ht=scontent.fkhi2-3.fna&oh=00_AT9WO7jPzkcZtqmwkosKLnoNUGRWg8AewFnf4QmuJobsZA&oe=6352C92C" style="height: 300px;width: 360px">
                        </div>


                        <div class="col-md-4">
                            <img src="https://scontent.fkhi2-2.fna.fbcdn.net/v/t39.30808-6/306757970_2987534671538992_5263555706597358890_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeGcJkiZ0Z6A2m3cCZoP7xnDhB6AU2HR0nOEHoBTYdHSc-Lbpwn8PXiyB6Z4lsAEo8dFehE7Tn3So1gpwXmo_Zo8&_nc_ohc=yB-BNcK_JeEAX9pdPqI&_nc_ht=scontent.fkhi2-2.fna&oh=00_AT8FbRkc4vKpUrieD-UXv7TG7y57PXQofGPxNT7KRY8hHg&oe=6353823C" style="height: 300px;width: 360px">
                        </div>


                        <div class="col-4">
                            <img src="https://scontent.fkhi2-2.fna.fbcdn.net/v/t39.30808-6/296433027_2953283921630734_8892951406236644559_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHLGvLkZYkfSZqgtI42Fmr8x6dBQkdIL5nHp0FCR0gvmSZvtqk42qjOGVCsgTnz750xrH6E97-Hx6vq07i5vp0z&_nc_ohc=ORz7F5JIwyUAX_xBMI8&_nc_ht=scontent.fkhi2-2.fna&oh=00_AT-D7CnAuvDnkgWWeYNbr0F_k6a0vwIunWAtCJTgVX_PEA&oe=6353EFF8" style="height: 300px;width: 360px">
                        </div>


                        <div class="col-4">
                            <img src="https://scontent.fkhi2-3.fna.fbcdn.net/v/t39.30808-6/298252219_2956575961301530_5148658843942197168_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeFo1RF3UeHdfpPWjpogbN97NaxTITbdoUI1rFMhNt2hQmT-aBw_V2waXTu96utnZM66uXNWbNUipLM-N4x4j2TQ&_nc_ohc=Rk7NuEaLa8YAX9DNSKC&_nc_ht=scontent.fkhi2-3.fna&oh=00_AT8aI5Vl7qwrCUFSyU8WsGhxdMUS9E_BYXpIeFVhQvoGxQ&oe=63530F88" style="height: 300px;width: 360px">
                        </div>


                        <div class="col-4">
                            <img src="https://scontent.fkhi2-2.fna.fbcdn.net/v/t39.30808-6/300790318_2966882566937536_7820361458668778685_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeG1h_cVnK9NfLGZb8fcKB9msVr6eNrxc3GxWvp42vFzcSdJ4P8U6emRuIvAx8zkhAqwZnpOEI1ZB1koOw6OPFbu&_nc_ohc=NxqJmZs5drUAX-xG3Nf&_nc_ht=scontent.fkhi2-2.fna&oh=00_AT_CgkcXZavH54Vg4iNZfd91zTrXXD4RFUmIm0licgDVoQ&oe=63546747" style="height: 300px;width: 360px">
                        </div>



                    </div>





                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <h2 class="text-center" style="margin-top: 150px;">Events Videos</h2>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 20px">
                        <div class="col-md-4">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                        </div>

                        <div class="col-md-4">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                        </div>


                        <div class="col-md-4">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                        </div>


                        <div class="col-md-4">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                        </div>

                        <div class="col-md-4">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                        </div>

                        <div class="col-md-4">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                        </div>

                        <div class="col-md-4">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                        </div>

                        <div class="col-md-4">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                        </div>

                        <div class="col-md-4">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- modal box Lead Form start  -->
            <!-- Modal -->
            <div class="modal fade" id="Lead-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                    onClick="window.location.reload();">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="register_form">
                                <img src="img/Yourexcel-img/excel-logo-new.png" class="Logo" alt="">
                                <h3 style="text-align: left;">Enquire Now</h3>
                                <p style="text-align: left;">our representative will contact you.</p>
                                <form class="form_area" action="{{url('nomanform')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 form_group">
                                            <input name="name" placeholder="Your Name" required="" type="text">
                                            <input name="phone" id="phone" placeholder="Phone No" required=""
                                                   type="tel">
                                            <!-- <input name="datetime" placeholder="Date & Time" required="" type="datetime-local"> -->
                                            <input name="email" placeholder="Your Email Address"
                                                   pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                                   required=""
                                                   type="email">
                                            <!-- <input name="coursesintrested" placeholder="Course You are Intrested In " required=""
                                                type="text"> -->
                                            <!-- <input type="search" placeholder="Type of Courses"> -->
                                            <select class="selectpicker" name="coursesintrested" id="coursesintrested"
                                                    multiple
                                                    aria-label="Default select example" data-live-search="true"
                                                    placeholder="Choose from dropdown list">
                                                <!-- <option value="Choose from dropdown list" selected readonly>Choose from dropdown list</option> -->
                                                <option value="Financial Modeling and Analysis">Financial Modeling and
                                                    Analysis
                                                </option>
                                                <option value="Dashboard Reporting">Dashboard Reporting</option>
                                                <option value="Advanced MS Excel">Advanced MS Excel</option>
                                                <option value="Data Analytics with Tableau">Data Analytics with
                                                    Tableau
                                                </option>
                                                <option value="Computerized Accounting">Computerized Accounting</option>
                                                <option value="Financial Accounting">Financial Accounting</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <input name="comments" placeholder="Comments" type="text" required="">
                                            <div class="captcha">
                                                <div class="spinner">
                                                    <label>
                                                        <input type="checkbox"
                                                               onclick="$(this).attr('disabled','disabled');"
                                                               required>
                                                        <span class="checkmark"><span>&nbsp;</span></span>
                                                    </label>
                                                </div>
                                                <div class="text1">
                                                    I'm not a robot
                                                </div>
                                                <div class="logo">
                                                    <img src="img/Yourexcel-img/captcha.PNG"/>
                                                    <p>reCAPTCHA</p>
                                                    <!-- <small>Privacy - Terms</small> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" id="submit" class="primary-btn primary-btnn">Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal box Lead Form start  -->

        </div>
        <script>

            $(".hover").mouseleave(
                function () {
                    $(this).removeClass("hover");
                }
            );
        </script>
    </section>
@endsection
<!-- ====================== End CEO Area ======================== -->
