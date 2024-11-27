@extends('website.app', ['title'=>'MS Office Management'])

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                             <h1 class="breadcumb-title">Work smartly to save your precious time at work by learning essential tools</h1>
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
                                      
                        <td> <img src="https://youexceltraining.com/img/Yourexcel-img/ai.jpg" /> </td>
                     </tr> 
                                
                            <tr>
                            <td ><i class="far fa-hourglass"></i> Duration:  &nbsp; 16 hours</td>
                           </tr>
                            <tr style="padding-top: 8px;">
                                <td>
                                <i class="far fa-suitcase"></i>Difficulty Level:  &nbsp;  Beginner to Advanced</td>
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
                        <a href="https://youexceltraining.com/enquiry-form/ms-office-management" class="vs-btn">Enquire Now</a><br/><br/>
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>


                  



                </div>
                <div class="col-lg-8">
                    <div class="course-category wow fadeInUp ">
                        <a href="">Get Started Learning With</a>
                    </div>
                    <h2 class="course-title animate__animated animate__bounceInDown">MS Office Management – (MS Excel, MS Word, MS PowerPoint and MS Outlook)</h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                    </div>
                    
                       <div class="mb-3">
                          <img src="https://youexceltraining.com/img/Yourexcel-img/aib.jpg" /> 
                     </div>
                         
                    <h5 class="border-title2 wow fadeInUp ">Program Overview:</h5>
                    <p  class="wow fadeInDown pb-3">Simplify your day to day tasks at work and academics to improve productivity with Microsoft Office professional training program. This Microsoft Office course focuses on the most important and most popular features of Microsoft Office, providing you with skills to be productive and efficient in Microsoft Word, Microsoft Excel, Microsoft PowerPoint, and Microsoft Outlook. You’ll also learn to link data between these applications. The program is 100% hands-on, with exercises to help the participants practice the new skills they learn.

                    </p>    <h5 class="border-title2 wow fadeInUp ">Training Outline</h5>
                    
                    </div>
                <div class="col-lg-12">
                    

                    <div class="accordion accordion-style4" id="accordionExample">
                        <div class="accordion-item  wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingOne">
                                <button class="accordion-button justify-content-between" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="button-label">Module 1</span>
                                     MS Excel
                                <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                           <li class="syllabustext">Data Management tools</li>
<li class="syllabustext">Formatting tricks</li>
<li class="syllabustext">Data Protection & Security techniques</li>
<li class="syllabustext">Advanced Filter</li>
<li class="syllabustext">Printing Techniques</li>
<li class="syllabustext">Working with Formula & Functions</li>
<li class="syllabustext">Formatting and styling Charts</li>
<li class="syllabustext">In-cell charts practices</li>
<li class="syllabustext">Pivot Table & Pivot Charts</li>
<li class="syllabustext">Working with Slicer</li>

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
                                    MS Word
                                <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                       <li class="syllabustext">Using Outline View & Styles</li>
<li class="syllabustext">Creating a Table of Contents</li>
<li class="syllabustext">Working with Headers & Footers</li>
<li class="syllabustext">Using Footnotes & Endnotes</li>
<li class="syllabustext">Inserting Graphics & SmartArt</li>
<li class="syllabustext">Working with Drawing Objects</li>
<li class="syllabustext">Using Newsletter-style Columns</li>
<li class="syllabustext">Using Chart Creation Features</li>
<li class="syllabustext">Working with Table & Formula</li>
<li class="syllabustext">Using Templates</li>
<li class="syllabustext">Working with Lists</li>
<li class="syllabustext">Using Mail Merge</li>


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
                                    MS PowerPoint
                                <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
<li class="syllabustext">Creating presentations</li>
<li class="syllabustext">Creating and using Tables and charts</li>
<li class="syllabustext">Preparing and printing presentations</li>
<li class="syllabustext">Slide masters and transitions</li>
<li class="syllabustext">Exporting Outlines and Slides</li>
<li class="syllabustext">Editing Notes and Handout Masters</li>
<li class="syllabustext">Applying Special Effects</li>
<li class="syllabustext">Setting Up the Slide Show</li>
<li class="syllabustext">Action buttons and equations</li>
<li class="syllabustext">Expanding a Slide Show</li>
<li class="syllabustext">Using SmartArt</li>
<li class="syllabustext">Inserting a Photo Album</li>
<li class="syllabustext">Sound, Animation & Movies</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    <span class="button-label">Module 4</span>MS Outlook
                                <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                           <li class="syllabustext">The Outlook 2016 Interface</li>
<li class="syllabustext">Performing Popular Tasks</li>
<li class="syllabustext">Using Signature and Themes</li>
<li class="syllabustext">Managing Your Inbox</li>
<li class="syllabustext">Working with Multiple Email Accounts</li>
<li class="syllabustext">Working with Messages</li>
<li class="syllabustext">Working with the Calendar</li>
<li class="syllabustext">Organizing Contacts</li>


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
                 <h6 class="process-title">Efficiently use MS Word to create professional documents</h6>
               
               </div>
            </div>
           <div class="process-style1 d-flex align-items-center">
  <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Effectively apply MS PowerPoint to create presentations at a professional level</h6>
              
               </div>
            </div>
                <div class="process-style1 d-flex align-items-center">
        <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Use MS Outlook to manage all aspects of email communication</h6>
            
               </div>
            </div>
            <div class="process-style1 d-flex align-items-center">
             <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Apply AI integration techniques in MS Office tools and Chat GPT to enhance productivity</h6>
                 
               </div>
            </div>
                
         </div>
      
        
      </div>
   </div>
</section>

            <section class="pt-3 pb-3 background-image" >
   <div class="container">
      <div class="row">
         <div class="col-xl-12 m-auto">
            <div class="title-area   -animated" data--delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: ;">
             
              
               <!--<span class="sec-subtitle">IDEAL TUTOR FOR EVERYONE</span>-->
               <h5 class="border-title2">Features and Benefits</h5>
            </div>
         </div>
      </div>
      <div class="row   -animated" data--delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: ;">
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
              
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-1.svg" alt="icon"></div>
              
               
               <p>Spreadsheet Organization: Create, manage, and organize data in rows and columns efficiently in MS Excel</p>
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                    
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon"></div>
           
                 <p>Formulas and Functions: Use built-in formulas to automate data calculation for reporting in MS Excel</p>
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                      
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon"></div>
               <p>Format word content: Create and edit memos, letters and reports containing text and images in new ways that enhance your productivity.</p>
             
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                        
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-4.svg" alt="icon"></div>
                 <p>Email management: Easily Organize your email communication system and schedule meetings using calendar </p>
               
            </div>
         </div>
      </div>
   </div>
</section>
        

                  
             <section class="pt-3 pb-3">
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
                  <p class="fs-md process-title">Sales </p>
                 
                  </div>
                        </div>
                        
                          <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title"> Marketing Analysis </p>
                 
                  </div>
                        </div>
                          <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title"> Business Analysts </p>
                 
                  </div>
                        </div>  <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title"> Finance Analysts</p>
                 
                  </div>
                        </div>
          </div>
          <div class="col-sm-6 col-xl-4">
              <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title">Accountants </p>
                 
                  </div>
                        </div>
                        
                          <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title">Data Analysts</p>
                 
                  </div>
                        </div>
                          <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title"> Data Scientists</p>
                 
                  </div>
                        </div>  <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title"> IT Professionals</p>
                 
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
               <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title ">	Minimum Intermediate preferrable </p>
                 
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
                   <h5 class="border-title2 pb-3">Recommended For:</h5>
                   
                   
                 </div>
                   <div class="col-xl-12" >             
                   <p class="pb-3">
                       
                      Sales and Marketing Analysis, Business Analysts, Finance & Accounts, Data Analysts and Data Scientists, Project Managers, Operations and Logistics Manager, HR Professionals, IT Professionals, Students</p>
                   
                   
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
         ">Farhan Shahid Qazi</h5>
                        <p class="fs-md about-text pe-xl-5 me-xl-3">Farhan Shahid Qazi is Founder and Chief Visionary Officer at YouExcel. He is a member of Association of Chartered Certified Accountant (ACCA) by profession. He has graduated in Applied Accounting from Oxford Brookes University, UK. He has also completed ‘Train the Trainer’ certificate from Association of Talent Development, USA.
         
         </p> 
         <br>
  
         <p class="fs-md about-text pe-xl-5 me-xl-3">
         Farhan’s cross-cultural 12 plus years of international business exposure of working in London, Dubai and Karachi in various organization including in a Fortune 500 company has enabled him to positively influence youth on achieving their career goals and learning employability skills through his educational entrepreneurial venture registered as YouExcel.
         </p> 
                     </div>
                              <h5>Professional Certifications:</h5>
            <div class="list-style1 vs-list mb-30">
               <ul>
                 <li>Professional Certification in ‘Train the Trainer’, Association of Talent Development, USA</li>
    <li>Professional Certification in ‘Certified Digital Marketer’, Eureka Digital Marketing, Pakistan </li>
    <li>Professional Certification in ‘Personality Development’, Nadia Training Institute, UAE</li>
    <li>Professional Certification in ‘Certificate in Career Counselling’, HR WALAY, An HR Family, Pakistan</li>
 
               </ul>
            </div>
                 
                 
                  </div>
                     <div class="col-lg-6" style="padding:0">
                     <div class="img-box3 mb-30">
                        <div class="img-1 mega-hover"><img class="" src="https://youexceltraining.com/img/Yourexcel-img/farhan.jpg" alt="About Img" style="
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
               
             <h2 class=" pt-1  text-white">Become smarter in just 20 hours </h2>
             <!--<p class=" pt-1 fs-md text-white">Enter your email id to get latest updates and  amazing discounts</p>-->
               <br>
               
               </div>
               </div>
                  <div class="row gx-100 gy-4 pb-5 justify-content-md-center ">
               
                <div class="col-lg-10 col-xl-10 col-xxl-10 pb-5 ">   
                
                <form class="newsletter-form d-flex flex-row justify-content-center align-items-center">
                   <a href="../Registration-Form/ms-office-management" class="vs-btn style2"><i class="far fa-angle-right"></i>GET REGISTERED HERE</a>
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
