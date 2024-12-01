@extends('website.app' , ['title'=>'Contact Us'])

@section('content')
    <div class="breadcumb-wrapper " style="margin-top: 80px;" >
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contac Us</h1>
                <p class="breadcumb-text">Search our FAQ section or visit/speak to us to learn more.</p>
               
            </div>
        </div>
    </div><!--==============================
  Contact Area
  ==============================-->
    <section class=" space-top space-extra-bottom">
        <div class="container">
            <!--<div class="row">-->
            <!--     <div class="course-meta-box text-center ">-->
                     
            <!--            <a href="faqs"><h2 class="h3 ">Frequently Asked Questions</h3></a>-->
            <!--        </div>-->
            <!--</div>-->
            
            
            <div class="row gx-80">
                <div class="col-lg-6 col-xl-6 mb-30 mb-lg-0">
                    <h2 class="h1 mt-n2">Got a question for us?</h2>
                    <p class="fs-md mb-4 pb-2">
                        
   You’ve come to the right place.The team at YouExcel wants to make sure you achieve career excellence through our training programs.</p>
                    <!--<h3 class="border-title2 h5">Regional Office</h3>-->
                    <p class="contact-info">
                        <i class="fas fa-question"></i>
                       <a href="faqs">Frequently Asked Questions </a>  </p>   
                       <p class="contact-info">Our FAQs are packed full of every question and answer you could have about YouExcel,
                       including how to get admission, features and benefits of training programs, training mode offered etc.
                    </p>
                    <p class="contact-info">
                        <i class="fas fa-clock"></i>
                        Office hours are 10am – 5pm <br> Monday-Sunday .
                    </p>
                    <p class="contact-info">
                     </p>
                    <p class="contact-info">
                        <i class="fas fa-whatsapp-square"></i>
                        <a class="text-inherit" href="tel:+923313016699">+92-331-3016699</a>
                    </p>
                    
                      <p class="contact-info">
                  <i class="fab fa-phone-alt"></i>
                        <a class="text-inherit" href="tel:+922137121738">+92-21-37121738</a>
                    </p>
                    <p class="contact-info">
                        <i class="fas fa-envelope"></i>
                        <a class="text-inherit" href="mailto:info@youexceltraining.com">info@youexceltraining.com</a>
                    </p>
                    <div class="mega-hover rounded-20 mt-4 mt-lg-5 mb-4"><img src="assets/img/4D9-OamA.jpeg" alt="office" class="w-100"></div>
                    <!--<p class="font-title text-title fs-md fw-medium pt-xl-2 mb-2">Membership enquiries: <a href="tel:+04432907612" class="text-decoration-underline">+0443-290 7612</a></p>-->
                    <!--<p class="font-title text-title fs-md fw-medium mb-4">Principal Support: <a href="tel:+2256366989" class="text-decoration-underline">+225636-6989</a></p>-->
                </div>
                <div class="col-lg-6 col-xl-6">
                    <form action="{{ route('contactForm') }}" method="post" class="form-style5">
                        @csrf
                        <div class="vs-circle"></div>
                        <h3 class="form-title">Speak to us</h3>
                        <p class="form-text">Creating the right learning environment to get the most out of each learning session.</p>
                        <div class="form-group my-4">
                            <input type="text" name="name" id="name" placeholder="Complete Name">
                        </div>
                        <div class="form-group my-4">
                            <input type="text" name="email" id="email" placeholder="Email Address">
                        </div>
                        <div class="form-group my-4">
                            <input type="text" name="number" id="number" placeholder="Phone No">
                        </div>
                           
                        <div class="form-group my-4">
                            <select name="subject" id="subjectY">
                                <option selected hidden disabled>Select Course</option>
                            </select>
                        </div>
                        <div class="form-group my-4">
                            <textarea name="message" id="message" placeholder="Write your message"></textarea>
                        </div> <button type="submit" class="vs-btn">Apply Today</button>
                        <p class="form-messages"><span class="sr-only">For message will display here</span></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="overflow-hidden rounded-20 space-bottom">
        <div class="container">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.808841149856!2d67.07564891500374!3d24.904501284033127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x86df1120fe0a52b9!2sYouExcel!5e0!3m2!1sen!2s!4v1638602168765!5m2!1sen!2s" width="100%" height="100%" style="border:0; height:40rem" allowfullscreen="" loading="lazy"></iframe>        </div>
    </div><!-- FAQ Area -->
    
@endsection
