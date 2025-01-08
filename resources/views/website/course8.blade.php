@extends('website.app')

@section('title', 'Tax Management with Returns Filing Course in Karachi Pakistan')
@section('meta_description', 'Join the Tax Management with Returns Filing Course in Karachi, Pakistan. Master tax laws, filing procedures, and effective management strategies for businesses and individuals.')
@section('meta_keywords', 'Tax Management with Returns Filing Course in Karachi Pakistan')


@section('content')
    <div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                             <h1 class="breadcumb-title">Fast-Track Your Tax Career: Enrol Now to Master Tax Management & Returns Filing!</h1>
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
                                      
                        <td> <img src="https://youexceltraining.com/img/Yourexcel-img/tax.jpg" /> </td>
                     </tr> 
                                
                            <tr>
                            <td ><i class="far fa-hourglass"></i> Duration:  &nbsp; 40 hours</td>
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
                        <a href="https://youexceltraining.com/enquiry-form/tax-management" class="vs-btn">Enquire Now</a><br/><br/>
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-category wow fadeInUp ">
                           <div class="course-category wow fadeInUp ">
                   <a href="#">Get Started Learning with </a>
                    </div>
                         </div>
                    <h2 class="course-title animate__animated animate__bounceInDown">Tax Management with Returns Filing  </h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                    </div>
                         <div class="mb-3">
                          <img src="https://youexceltraining.com/img/Yourexcel-img/taxb.jpg" /> 
                     </div>
                    <h5 class="border-title2 wow fadeInUp ">Program Overview</h5>
                    <p  class="wow fadeInDown pb-3">Tax Management with Returns Filing will help in understanding the tax laws and will enable the participant to understand and apply the practical implications of tax laws in Pakistan. It will benefit the participant as a tool to make effective taxation management planning strategies by following tax structure and tax laws in Pakistan.

                    </p>  <h5 class="border-title2 wow fadeInUp ">Training Outline</h5>   </div>
                <div class="col-lg-12">

                  <div class="accordion accordion-style4" id="accordionExample">
                        <div class="accordion-item  wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingOne">
                                <button class="accordion-button justify-content-between" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="button-label">Module 1</span>
                                    Salaried income
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            <li class="syllabustext">Taxable salary and benefits</li >
                                            <li class="syllabustext">Allowable deductions</li >
                                            <li class="syllabustext">Reliefs available to salaried individuals</li >
                                            <li class="syllabustext">Section 149 and its impact on employees</li >
                                            <li class="syllabustext">Tax planning for salaried individuals</li >
                                            
                                            

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
                                 Business Income
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Taxable and exempt business income</li >
                                            <li class="syllabustext">Tax withheld on income u/s 153</li >
                                            <li class="syllabustext">Allowable expenses</li >
                                            <li class="syllabustext">Tax depreciation and allowances</li >
                                            <li class="syllabustext">Role of sales tax in business income tax calculations</li >
                                            <li class="syllabustext">Market practice and real FBR cases</li >
                                            <li class="syllabustext">Practical demonstration on Iris portal</li >
                                            <li class="syllabustext">Using portals for verification</li >
                                            <li class="syllabustext">Accounting methodology followed</li >
                                            

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
                                    Property Income
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">Rental income</li >
                                            <li class="syllabustext">Allowances</li >
                                            <li class="syllabustext">Practical case studies and implications</li >
                                            <li class="syllabustext">Tax planning for property income</li >
                                            
                                            
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
                                    <span class="button-label">Module 4</span>
                                    Capital Gains tax
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">Moveable and immovable property</li >
                                            <li class="syllabustext">Holding period definition</li >
                                            <li class="syllabustext">Assets exempt from CGT</li >
                                            <li class="syllabustext">Role of transfer of legal title of asset in capital gains</li >
                                            
                                            


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour1" aria-expanded="false"
                                        aria-controls="collapseFour1">
                                    <span class="button-label">Module 5</span>
                                    Iris portal navigation
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">Iris portal – for income tax, taxation reports on payments and GST filing</li >
                                            <li class="syllabustext">E.fbr – for challan generation</li >
                                            <li class="syllabustext">Bulk challan generation through FBR template</li >
                                            <li class="syllabustext">Maloomat – for tracking tax withheld</li >
                                            <li class="syllabustext">Verification portal – for tax status verification</li >
                                            
                                            
                                            


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour2" aria-expanded="false"
                                        aria-controls="collapseFour2">
                                    <span class="button-label">Module 6</span>
                                     Sales Tax
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">GST rules</li >
                                            <li class="syllabustext">VAT mode – input and output tax rules</li >
                                            <li class="syllabustext">Invoicing requirement (goods code, NTN etc)</li >
                                            <li class="syllabustext">Null return filing</li >
                                            <li class="syllabustext">SRB filing and portal navigation</li >
                                            


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour3" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    <span class="button-label">Module 7</span>
                                    Individual status verification
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour3" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">Active taxpayer list</li >
                                            <li class="syllabustext">Registration certificate</li >
                                            <li class="syllabustext">Sales tax status</li >
                                            <li class="syllabustext">SRB verification</li >
                                            


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour4" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    <span class="button-label">Module 8</span>
                                 Return filing training
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour4" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">Income forms</li >
                                            <li class="syllabustext">Wealth statements</li >
                                            <li class="syllabustext">Reconciliation of income to wealth</li >
                                            <li class="syllabustext">Practical case studies</li >
                                            <li class="syllabustext">Salaried individual filing template and income tax calculator</li >
                                            
                                            


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour5" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    <span class="button-label">Module 9</span>
                                    Registration of Income Tax for an
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour5" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">Individual; Association of persons; Company; Non-profit organizations</li >

                                            


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour6" aria-expanded="false"
                                        aria-controls="collapseFour6">
                                    <span class="button-label">Module 10</span>
                                    Taxation Regimes
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour6" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">Explanation of normal tax, final tax, and minimum tax regimes</p>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour77" aria-expanded="false"
                                        aria-controls="collapseFour7">
                                    <span class="button-label">Module 11</span>
                                    Withholding tax matters
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour77" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">In-depth exploration of withholding tax sections, rates, exemptions, and adjustments</li >
                                            <li class="syllabustext">Responsibilities and rights of withholding agents</li >
                                            <li class="syllabustext">How to prepare and submit withholding tax statements</li >
                                            
                                            


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour7" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    <span class="button-label">Module 12</span>
                                    Departmental Correspondence income tax
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour7" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">Handling departmental notices, proceedings, and audits</li >
                                            <li class="syllabustext">Techniques for effectively responding to inquiries and discussions with tax officers</li >
                                            <li class="syllabustext">Insights into different assessment types and their procedures</li >
                                            


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour8" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    <span class="button-label">Module 13</span>
                                    Practical procedure involve in calming refunds
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour8" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">Explanation of the process to claim tax refunds</li >
                                         
                                            


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour9" aria-expanded="false"
                                        aria-controls="collapseFour9">
                                    <span class="button-label">Module 14</span>
                                    Appeal procedure
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour9" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">Detailed guidance on filing appeals, drafting facts and grounds of appeal</li >
                                            <li class="syllabustext">Applying for a stay and representing before higher courts</li >
                                            
                                            


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour0" aria-expanded="false"
                                        aria-controls="collapseFour0">
                                    <span class="button-label">Module 15</span>
                                    Sale Tax
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour0" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">A comprehensive exploration of the scope of tax on goods and services, covering taxability, registration requirements, and tax liability determination for major sectors</li >
                                            <li class="syllabustext">Exploration of withholding taxes under both federal and provincial laws, with a focus on practical examples</li >
                                            <li class="syllabustext">Detailed understanding of input tax adjustment, including what input taxes are available for suppliers and how to deal with reduced-rate goods and services</li >
                                            
                                            


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
                 <h6 class="process-title">Learning how to read and navigate income tax ordinance</h6>
               
               </div>
            </div>
           <div class="process-style1 d-flex align-items-center">
  <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Navigation of various FBR portals</h6>
              
               </div>
            </div>
                <div class="process-style1 d-flex align-items-center">
        <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">E-filing through IRIS Portal</h6>
            
               </div>
            </div>
            <div class="process-style1 d-flex align-items-center">
             <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Registration in FBR for income tax</h6>
                 
               </div>
            </div>
            
              <div class="process-style1 d-flex align-items-center">
             <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Application of SRB Sales tax</h6>
                 
               </div>
            </div>
                 
              <div class="process-style1 d-flex align-items-center">
             <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Explanation of Taxation regimes</h6>
                 
               </div>
            </div>
                  
              <div class="process-style1 d-flex align-items-center">
             <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Practicality of Withholding tax matters</h6>
                 
               </div>
            </div>
                 
              <div class="process-style1 d-flex align-items-center">
             <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Departmental correspondence of Income Tax</h6>
                 
               </div>
            </div>
                 
              <div class="process-style1 d-flex align-items-center">
             <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Explanation of Taxation regimesEffectively follow Appeal procedures</h6>
                 
               </div>
            </div>
            
               <div class="process-style1 d-flex align-items-center">
             <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Application of Sales Tax matters</h6>
                 
               </div>
            </div>
            
              <div class="process-style1 d-flex align-items-center">
             <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Practical industry-related case studies to provide hands-on simulation experience</h6>
                 
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
              
               
               <p>Tax Regulations covering the tax laws, regulations, and updates to ensure compliance</p>
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                    
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon"></div>
              
                 <p>Tax Planning Strategies for individuals and businesses</p>
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                      
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon"></div>
               <p>Risk Mitigation to help identify and address potential tax-related risks, reducing the likelihood of penalties</p>
             
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
                  <p class="fs-md process-title">Accounting </li >
                 
                  </div>
                        </div>
                        
          </div>
          <div class="col-sm-6 col-xl-4">
              <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title"> Finance Team </p>
                 
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
                  <p class="fs-md process-title ">Basic computer literacy, familiarity with Windows operating system
 </p>
                 
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
<!--         <div class="col-lg-6" style="padding:0">-->
<!--            <div class="title-area mb-4">-->
   
<!--               <h5 class="sec-title mb-3 mb-lg-4" style="    font-size: 30px;-->
<!--">Murtaza Ghazi  </h5>-->
<!--               <p class="about-text pe-xl-5 me-xl-3 fs-md">Murtaza is a Fellow ACCA member. He has completed MBA from Institute of Business Administration Karachi in Marketing. He is a Certified Competent Communicator from Toastmasters International.Murtaza is a Partner IFCMG financial consultants for past 5 years and has extensive experience in taxation advisory services in SME sector. He has over a decade of professional experience in financial services working with KPMG in audit and providing deal advisory in Pakistan and Middle East. He is currently member of ACCA Entrepreneurship committee and member of FPCCI committee on Skills Development.</p>-->
<!--            </div>-->
<!--         </div>-->
<!--            <div class="col-lg-6">-->
<!--            <div class="img-box3 mb-30">-->
<!--               <div class="img-1 mega-hover"><img class="" src="https://youexceltraining.com/img/Yourexcel-img/Osfh9uPk.jpeg" alt="About Img" style="-->
<!--    width: 502px;-->
<!--    border-radius: 50px;-->
<!--"></div>-->
<!--               <div class="shape-dotted jump"></div>-->
<!--            </div>-->
<!--         </div>-->
         
          <div class="col-lg-6">
            <div class="title-area mb-4">
   
               <h5 class="sec-title mb-3 mb-lg-4" style="    font-size: 30px;
">Mahir Alam </h5>
               <p class="about-text pe-xl-5 me-xl-3 fs-md"> Mahir is a managing partner at Haider Shamsi & Co. Chartered Accountants, He has been handling the affairs of the firm since 2018. Further, He has an experience for designing and implementing cost and financial accounting system for different manufacturing and trading companies such as Midas Safety Inc. World Bank Project (PIFRA-II), KPMG TH & Co., Chartered Accountants. He has more than 11 years of theoretical knowledge and practical experience of cost and financial accounting, auditing and taxation.</p>
            </div>
         </div>
            <div class="col-lg-6">
            <div class="img-box3 mb-30">
               <div class="img-1 mega-hover"><img class=""src="{{ asset('/img/trainer/zeeshan.jpeg') }}" alt="About Img" style="
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
               
             <h2 class=" pt-1  text-white">Become smarter in just 40 hours </h2>
             <!--<p class=" pt-1 fs-md text-white">Enter your email id to get latest updates and  amazing discounts</p>-->
               <br>
               
               </div>
               </div>
                  <div class="row gx-100 gy-4 pb-5 justify-content-md-center ">
               
                <div class="col-lg-10 col-xl-10 col-xxl-10 pb-5 ">   
                
                <form class="newsletter-form d-flex flex-row justify-content-center align-items-center">
                   <a href="../Registration-Form/Tax Management with Returns Filing" class="vs-btn style2"><i class="far fa-angle-right"></i>GET REGISTERED HERE</a>
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
