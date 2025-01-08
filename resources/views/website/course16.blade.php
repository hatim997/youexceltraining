@extends('website.app')

@section('title', 'E Dukaan Specialist Course in Karachi Pakistan')
@section('meta_description', 'Enroll in the E Dukaan Specialist Course in Karachi, Pakistan. Learn to set up, manage, and optimize your online store for success in the e-commerce world.')
@section('meta_keywords', 'E Dukaan Specialist Course in Karachi Pakistan')


@section('content')
    <div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                             <h1 class="breadcumb-title">E-Dukaan Specialist - Get empowered to Launch your online store with ease and succeed in the digital marketplace!
</h1>
                {{--                <p class="breadcumb-text">Search over 200 individual encyclopedias and reference books.</p>--}}
                <!--<div class="breadcumb-menu-wrap">-->
                <!--    <ul class="breadcumb-menu">-->
                <!--        <li><a href="{{url("/")}}">Home</a></li>-->
                <!--        <li>Dashboard Reporting & Analysis with Power BI</li>-->
                <!--    </ul>-->
                <!--</div>-->
            </div>
        </div>
    </div> <!--==============================
      Course Area
  ==============================-->
    <section class="course-details pt-3 pb-5">
        <div class="container">
           <div class="row flex-row-reverse">
                <div class="col-lg-4">
                    <div class="course-meta-box wow fadeInUp ">
                        <table>
                            <tbody>
                               <tr class=" mb-4">
                                      
                        <td> <img src="https://youexceltraining.com/img/Yourexcel-img/eduqanp.jpeg" /> </td>
                     </tr> 
                                
                            <tr>
                            <td ><i class="far fa-hourglass"></i> Duration:  &nbsp; 48 hours</td>
                           </tr>
                            <tr style="padding-top: 8px;">
                                <td>
                                <i class="far fa-suitcase"></i>Difficulty Level:  &nbsp;  Basic  to Intermediate</td>
                             </tr>  
                                                         <tr>
                                <td><i class="far fa-suitcase"></i>This Training also includes:</td>
                                 </tr>    <tr>
                                <td>
                                    <li> <i class="fas fa-check"></i> Physical On-Campus and Online Training</li>
                                       <li> <i class="fas fa-check"></i> Hands-On Case Study based learning</li>
                                          <li> <i class="fas fa-check"></i> Expert Guidance</li>
                                             <li> <i class="fas fa-check"></i> Lifetime WhatsApp support</li>
                                                <li> <i class="fas fa-check"></i> Networking community access</li>
                                     <li> <i class="fas fa-check"></i> Government Endorsed Certificate</li>
                                     
                                   </td>
                            </tr>
                          
                            </tbody>
                        </table>
                          @if($pdf == "" )
                                      
                                      @else
                        <a href="{{$pdf}}" class="vs-btn"><i class="fas fa-hand-point-down"></i> Download Brochure Now</a><br/><br/>
                        
                          @endif
                        <a href="https://youexceltraining.com/enquiry-form/e-dukaan-specialist" class="vs-btn">Enquire Now</a><br/><br/>
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-category wow fadeInUp ">
                                               <a href="#">Get Started Learning with</a>
                    </div>
                    <h2 class="course-title animate__animated animate__bounceInDown">E-Dukaan Specialist   </h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                    </div>
                         <div class="mb-3">
                          <img src="https://youexceltraining.com/img/Yourexcel-img/eduqannb.jpeg" /> 
                     </div>
                    <h5 class="border-title2 wow fadeInUp ">Program Overview</h5>
                    <p  class="wow fadeInDown pb-3">
                        YouExcel is bringing an innovative training that aims to equip participants with the necessary skills and knowledge to establish and manage an online store effectively. The program focuses on practical, hands-on training that covers all aspects of e-commerce, from setting up the store to running campaigns online through Digital Marketing, Search Engine Marketing and Optimization.
                    </p>  <h5 class="border-title2 wow fadeInUp ">Training Outline</h5>   </div>
                <div class="col-lg-12">

                  <div class="accordion accordion-style4" id="accordionExample">
                        <div class="accordion-item  wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingOne">
                                <button class="accordion-button justify-content-between" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="button-label">Module 1</span>
                                E-Commerce – Setting up your E-Dukaan
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                             <li class="syllabustext">Introduction to E-Commerce</li>
    <li class="syllabustext">Designing e-commerce store logos via Canva</li>
    <li class="syllabustext">Detailed explanation of Drop shipping</li>
    <li class="syllabustext">Advantages and Disadvantages of E-Commerce</li>
    <li class="syllabustext">Explanation of the 4p’s of Marketing</li>
    <li class="syllabustext">Types of E-Commerce Business Models</li>
    <li class="syllabustext">Step By Step Guide on Setting Up E-Commerce Stores Online</li>
    <li class="syllabustext">Choosing the right E-Commerce platform for your business</li>
    <li class="syllabustext">Explanation of Content Management System (CMS)</li>
    <li class="syllabustext">Using Wix and Wordpress as a CMS to create websites</li>
    <li class="syllabustext">Introduction to Daraz</li>
    <li class="syllabustext">Creating a seller account on Daraz</li>
    <li class="syllabustext">Daraz drop shipping process</li>
    <li class="syllabustext">Using Shopify as an E-Commerce Content Management System</li>
    <li class="syllabustext">Shopify product listing process</li>
    <li class="syllabustext">Shopify theme customization steps</li>
    <li class="syllabustext">Introduction to Amazon Affiliates</li>
    <li class="syllabustext">Setting up an online store on Amazon</li>
    <li class="syllabustext">Importance of shipping and courier management gateways</li>
    <li class="syllabustext">Uploading products on online stores</li>
    <li class="syllabustext">Application of Website Domain and Hosting</li>
    <li class="syllabustext">Linking domains with online stores</li>
    <li class="syllabustext">Search Engine Marketing Introduction</li>
    <li class="syllabustext">Google Ads Campaign Setup for E-Commerce</li>
    <li class="syllabustext">Payment methods for Shopify</li>
    <li class="syllabustext">Product listing strategies</li>
    <li class="syllabustext">Product hunting strategies</li>
    <li class="syllabustext">Explanation of MLM and Affiliate Marketing business models in E-Commerce</li>
    <li class="syllabustext">SWOT Analysis for an E-Commerce Business</li>
    <li class="syllabustext">Payment Gateways for E-Commerce Stores</li>
    <li class="syllabustext">Operations and Logistics Management in E-Commerce</li>
    <li class="syllabustext">Choosing winning products and launching an E-Commerce Store</li>
    <li class="syllabustext">Identifying Key Performance Indicators (KPI’s) for E-Commerce</li>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingTwo">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="button-label">Module 2</span>
                                Social Media Marketing – Marketing your E-dukaan
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                        
                                            
<li class="syllabustext">Steps to follow for Facebook, Instagram, Pinterest, YouTube, Tiktok:
        <ul>
            <li class="syllabustext">Create Page by adding your Logo and Description</li>
            <li class="syllabustext">Announcement Post and Posting Structure for Organic Traffic Generation Strategy</li>
            <li class="syllabustext">Running Paid Marketing Campaigns on Facebook</li>
            <li class="syllabustext">Application of key policies for leading Digital Marketing Platforms like Facebook, YouTube, and Google</li>
        </ul>
    </li>
    <li class="syllabustext">Copywriting with Artificial Intelligence</li>
    <li class="syllabustext">Using WhatsApp Business for promoting products and services</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header d-flex" id="headingThree">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    <span class="button-label">Module 3</span>
                                 E-Commerce Search Engine Optimization
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                        
    <li class="syllabustext">Search Engine Optimization (SEO) for E-Commerce Detailed Explanation</li>
    <li class="syllabustext">On Page SEO Factors</li>
    <li class="syllabustext">Off Page SEO Factors</li>
    <li class="syllabustext">Technical SEO Factors</li>
    <li class="syllabustext">SEO Audit Report</li>
  
</ul>
                                            
</li>
                                            
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                         
                    </div>
                    

   </div>
            </div>
        </div>
    </section>

  <section class=" pb-5" id="div2">
   <div class="container">
      <div class=" text-left">
         <h5 class="border-title2">Learning Outcomes</h5>
      </div>
      <div class="row align-items-start">
         <div class="col-md-6 col-lg process-inner1 order-2 order-lg-1">
              <div class="process-style1 d-flex align-items-center">
               <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                 <h6 class="process-title">Set up online stores on Shopify, Daraz, or custom your own platform by applying strategies of E-Commerce</h6>
               
               </div>
            </div>
           <div class="process-style1 d-flex align-items-center">
  <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Create and manage campaigns on Facebook, Instagram, TikTok, and Pinterest by applying strategies of Digital Marketing </h6>
              
               </div>
            </div>
                <div class="process-style1 d-flex align-items-center">
        <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Implement strategies for audience engagement and brand building</h6>
            
               </div>
            </div>
            <div class="process-style1 d-flex align-items-center">
             <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Develop strategies for Search Engine Marketing (SEM) and paid advertising </h6>
                 
               </div>
            </div>
            
              <div class="process-style1 d-flex align-items-center">
             <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Create and optimize Google Ads and Facebook Ads campaigns</h6>
                 
               </div>
            </div>
                   <div class="process-style1 d-flex align-items-center">
             <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Monitor and evaluate online store performance to increase income growth opportunities</h6>
                 
               </div>
            </div> 
              
         </div>
      
        
      </div>
   </div>
</section>

            <section class=" pb-5" id="div2">
   <div class="container">
      <div class=" text-left">
         <h5 class="border-title2">Platforms and Applications:</h5>
      </div>
      <div class="row align-items-start">
         <div class="col-md-4 col-lg process-inner1 order-2 order-lg-1">
              <div class="process-style1 d-flex align-items-center">
               <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                 <h6 class="process-title">Website hosting </h6>
               
               </div>
            </div>
            
              <div class="process-style1 d-flex align-items-center">
               <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                 <h6 class="process-title"> Shopify</h6>
               
               </div>
            </div>
              <div class="process-style1 d-flex align-items-center">
               <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                 <h6 class="process-title">Amazon </h6>
               
               </div>
            </div>
              <div class="process-style1 d-flex align-items-center">
               <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                 <h6 class="process-title">Daraz </h6>
               
               </div>
            </div>
             <div class="process-style1 d-flex align-items-center">
               <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                 <h6 class="process-title">Wordpress </h6>
               
               </div>
            </div>
         </div>  
           <div class="col-md-4 col-lg process-inner1 order-2 order-lg-1">
              <div class="process-style1 d-flex align-items-center">
               <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                 <h6 class="process-title">Canva </h6>
               
               </div>
            </div>
            
              <div class="process-style1 d-flex align-items-center">
               <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                 <h6 class="process-title"> Instagram</h6>
               
               </div>
            </div>
              <div class="process-style1 d-flex align-items-center">
               <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                 <h6 class="process-title">Facebook </h6>
               
               </div>
            </div>
              <div class="process-style1 d-flex align-items-center">
               <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                 <h6 class="process-title">WhatsApp Business </h6>
               
               </div>
            </div>
               <div class="process-style1 d-flex align-items-center">
               <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                 <h6 class="process-title">Tiktok </h6>
               
               </div>
            </div>
         </div>    <div class="col-md-4 col-lg process-inner1 order-2 order-lg-1">
              <div class="process-style1 d-flex align-items-center">
               <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                 <h6 class="process-title">Pinterest </h6>
               
               </div>
            </div>
            
              <div class="process-style1 d-flex align-items-center">
               <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                 <h6 class="process-title"> Google Ads</h6>
               
               </div>
            </div>
              <div class="process-style1 d-flex align-items-center">
               <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                 <h6 class="process-title">Meta Ads </h6>
               
               </div>
            </div>
              <div class="process-style1 d-flex align-items-center">
               <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                 <h6 class="process-title">Wix.com </h6>
               
               </div>
            </div>
            
         </div>
        
      </div>
   </div>
</section>   <section class="pt-3 pb-3">
   <div class="container" >
      <div class="row gx-80 align-items-center">
          <div class="col-md-12" >
                      <h5 class="border-title2 pb-3">Target Audience</h5>
      </div>
         <div class="col-xl-10" >
               <div class="row gx-80 align-items-center">
            <div class="col-sm-6 col-xl-4">
                  <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title">Anyone who wants to earn online</P >
                  </div>
                        </div>

                        <div class="process-style1 d-flex align-items-center">
                            <span class="process-number"><i class="fas fa-circle"></i></span>
                             <div class="process-content">
                                <p class="fs-md process-title">Students</P >
                                </div>
                                      </div>
          </div>
          <div class="col-sm-6 col-xl-4">
              <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title">Housewives</p>
                  </div>
                        </div>
                        
                        <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                        <p class="fs-md process-title">	Business enthusiasts </p>
                        </div>
                        </div>    

                           <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                        <p class="fs-md process-title">Aspiring Freelancers </p>
                        </div>
                        </div> 
               </div>
               
          </div>
    </div>
        </section>  
                 <section class="pb-3">
   <div class="container" >
      <div class="row gx-80 align-items-center">
          <div class="col-xl-12" >
                      <h5 class="border-title2 pb-2">Prerequisites</h5>
      </div>
         <div class="col-xl-12" >
            <div class="title-area mb-4">
                 <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title ">	Basic IT literacy is mandatory </p>
                 
                  </div>
                        </div>
              
                  </div>
                     <div class="title-area mb-4">
                 <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title ">		Minimum Intermediate preferrable</p>
                 
                  </div>
                        </div>
              
                  </div>
              </div>
          </div>
    </div>
        </section> 
                    
                    
        <section class="pb-3">
            <div class="container">
               <div class="row">
                     <div class="col-xl-12" >
                               <h5 class="border-title2 ">Trainer Profile</h5>
                </div>
                  <div class="col-lg-6" style="padding:0">
                     <div class="title-area mb-4">
            
                        <h5 class="sec-title mb-3 mb-lg-4" style="font-size: 30px;
         ">Syed Asif Ashraf </h5>
                        <p class="fs-md about-text pe-xl-5 me-xl-3">
Syed Asif Ashraf is a learning and development and Digital Marketing Professional with an overall experience of 20 years. His education consists of an MBA in Marketing and an M.A. in Mass Communication.  Asif is also a Google certified digital marketing professional.  He has previously worked in renowned companies such as BOL Network, Polaris Consultants, Federal Urdu University, The Access to Future Foundation (TAF), Click 5 institute amongst others and has also been lead effective training in NAVTTC, Govt. Of Pakistan training projects         
         </p> 
         <br>
         <br><br>
       
                     </div>
                           <h5>Professional Certifications:</h5>-->
            <div class="list-style1 vs-list mb-30">
               <ul>
                 <li>	Digital Marketing and E-Commerce Certification from Google</li>
    <li>Certification in E-Commerce from Digiskills Pakistan</li>
    <li>Cloud Computing Certification from PIAIC</li>
    
               </ul>
            </div>
                  </div>
                     <div class="col-lg-6" style="padding:0">
                     <div class="img-box3 mb-30">
                        <div class="img-1 mega-hover"><img class="" src="https://youexceltraining.com/img/Yourexcel-img/asd.jpg" alt="About Img" style="
             width: 502px;
             border-radius: 50px;
         "></div>
                        <div class="shape-dotted jump"></div>
                     </div>
                  </div>
               </div>
            </div>
         </section>   
  <section class="pb-5">
        <div class="shape-mockup jump d-none d-xxl-block" data-right="10%" data-bottom="12%">
            <div class="shape-dotted"></div>
        </div>
        <div class="shape-mockup rotate d-none d-xxl-block" data-right="48%" data-top="17%">
            <div class="vs-polygon1"></div>
        </div>
        <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="51%" data-top="21%">
            <div class="vs-rounded1"></div>
        </div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-12 col-xxl-5">
                    <div class="title-area wow fadeInUp" data-wow-delay="0.3s">
                     
                        <h2 class="sec-title h1">REAL PEOPLE REAL TESTIMONIALS</h2>
                        
                    </div>

<div class="elfsight-app-180aecff-7be3-49b6-9603-28a80d740006"></div>
                    
                
            </div>
        </div>
    </section>
    
  
    
    <section class="pb-5">
           <div class="container pb-3">
               
        
                </div>
                          <div class="container cta-style2" style="
    border: 3px solid #fbce4d;
">
              <div class=" row gx-100 gy-4  ">
             <div class="col-lg-12 col-xl-12 col-xxl-12 pt-2 pb-5 text-center">         
               
             <h2 class=" pt-1  text-white">Become smarter in just 48 hours </h2>
             <!--<p class=" pt-1 fs-md text-white">Enter your email id to get latest updates and  amazing discounts</p>-->
               <br>
               
               </div>
               </div>
                  <div class="row gx-100 gy-4 pb-5 justify-content-md-center ">
               
                <div class="col-lg-10 col-xl-10 col-xxl-10 pb-5 ">   
                
                <form class="newsletter-form d-flex flex-row justify-content-center align-items-center">
                   <a href="../Registration-Form/e-dukaan-specialist" class="vs-btn style2"><i class="far fa-angle-right"></i>GET REGISTERED HERE</a>
                    <!--<button type="submit" class="vs-btn mx-3">GET REGISTERED HERE</button>-->
                    </form>
                </div>
               
                  </div>
                  </div>
               
        </section>
    
    <div class="modal bd-example-modal-lg" id="myModal"  style="z-index:99 " >
  <div class="modal-dialog" style="width:100% ; background-color: #f7a530;" role="document">
    <div class="modal-content"style="
    background-color: transparent;
" >
      <div class="modal-body" style="position:relative;height: 106vh;">
          <span class="close">&times;</span>
          <div class="wrapper">
      <div class="container">
        <canvas id="wheel"></canvas>
        <!--<button id="spin-btn">Spin</button>-->
        <i class="fas fa-caret-left img" style=" color: #fdcf3b;font-size:80px"></i>
      </div>
      <div id="final-value">
        <p>Click On The Spin Button To Start</p>
      </div>
    </div>
       <form action="mail.php" class="form-stylea ajax-contact">
                        <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="11%" data-top="10%">
            <div class="vs-rounded2"></div>
        </div>
               <div class="shape-mockup rotate d-none d-xxl-block" data-right="19%" data-top="13%">
            <div class="vs-polygon2"></div>
        </div>
                   <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="30%" data-top="13%">
            <div class="vs-rounded2"></div>
        </div>
             
                        <h2 class="">SPIN TO WIN </h2>
                     <h5 class="border-title2 fs-md ">Test your might!</h5>
                     
                     <div class="row">
                     
                     
                     <div class="col-md-6 ">
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Complete Name"required >
                        </div>
                        </div>
                        <div class="col-md-6">
                        
                        <div class="form-group">
                            <input type="text" name="number" id="number" placeholder="Cell No.">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="number" id="number" placeholder="WhatsApp No. ">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="email" id="email" placeholder="Email Address">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <select name="subject" id="subject">
                                <option selected hidden disabled>Select Course</option>
                               <option value="Other">Other</option>
                                <option value="Apply Scholarship">Apply Scholarship</option>
                                <option value="Private Tutor">Private Tutor</option>
                                <option value="Admission Session">Admission Session</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
     <input name="city" placeholder="Your City"                                            required=""
                                               type="text">
                        </div>
                        </div>
                       </div>
                           <div class="form-group">
                               
                         <input  name="comments" placeholder="Comments" type="text">
                        </div>
                         <div class="captcha d-flex item-center mb-4">
                                            <div class="spinner d-flex item-center">
                                                <label class="mb-0 mt-3 mx-3">
                                                    
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
                                                
                                                <img src="https://youexceltraining.com/img/Yourexcel-img/captcha.PNG"/>
                                                <p>reCAPTCHA</p>
                                                 <small>Privacy - Terms</small> 
                                            </div>
                                        </div>
                        
                         <button id="spin-btn"  class="vs-btn">Spin  the wheel</button>
                         
                      <div class="shape-mockup rotate d-none d-xxl-block" data-right="19%" data-bottom="8%">
            <div class="vs-polygon2"></div>
        </div>    <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="11%" data-bottom="8%">
            <div class="vs-rounded2"></div>
            </div>
              <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="30%" data-bottom="8%">
            <div class="vs-rounded2"></div>
            </div>
        </div>
        </div>
        </div>
                <p class="form-messages"><span class="sr-only">For message will display here</span></p>
                    </form>
          
   
      </div>
    </div>
  </div>
</div>
@endsection