@extends('website.app', ['title' => 'Computerized Accounting'])

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                             <h1 class="breadcumb-title">Computerized Accounting (MS Excel, QuickBook, Tally, Power Point) - Learn,
Earn, and Grow with practical training
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
                                      
                        <td> <img src="https://youexceltraining.com/img/Yourexcel-img/ca.jpeg" /> </td>
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
                        <a href="https://youexceltraining.com/enquiry-form/computerized-accounting" class="vs-btn">Enquire Now</a><br/><br/>
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-category wow fadeInUp ">
                                               <a href="#">Get Started Learning with</a>
                    </div>
                    <h2 class="course-title animate__animated animate__bounceInDown">Computerized Accounting   </h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                    </div>
                         <div class="mb-3">
                          <img src="https://youexceltraining.com/img/Yourexcel-img/cab.jpeg" /> 
                     </div>
                    <h5 class="border-title2 wow fadeInUp ">Program Overview</h5>
                    <p  class="wow fadeInDown pb-3">
Launch your career in accountancy by learning and applying modern Accounting software.
Gain the professional skills you need to succeed by learning bookkeeping, full accounting cycle, accounting terminologies, transactions 
recording process flow, use of double-entry accounting system till the publishing of Final Accounts report in a fully integrated
computerized accounting software. The software covered in this training are Financial Accounting, MS Excel, Quickbook, Tally and Portfolio Building on LinkedIn.
                    </p>  <h5 class="border-title2 wow fadeInUp ">Training Outline</h5>   </div>
                <div class="col-lg-12">

                  <div class="accordion accordion-style4" id="accordionExample">
                        <div class="accordion-item  wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingOne">
                                <button class="accordion-button justify-content-between" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="button-label">Module 1</span>
                                   Financial Accounting
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            <li>Introduction to Accounting and Basic Concepts
                                               <ul>
    <li class="syllabustext">Definition and Purpose of Accounting</li>
    <li class="syllabustext">Role in Business Decision-making</li>
    <li class="syllabustext">Entity Concept, Money Measurement, Duality Principle</li>
    <li class="syllabustext">Going Concern, Accounting Period</li>
    <li class="syllabustext">Introduction to GAAP</li>
</ul>
                                            </li>
                                            <li>Accounting Equation and Double Entry Bookkeeping
<ul>
    <li class="syllabustext">Component: Assets, Liabilities, Equity</li>
    <li class="syllabustext">Relationship and Balance of the Accounting Equation</li>
    <li class="syllabustext">Double Entry Bookkeeping (Principals and Application)</li>
    <li class="syllabustext">Journal Entries</li>
    <li class="syllabustext">Ledger Accounts</li>
</ul>
                                            </li>
                                              <li>Financial Statements Preparation
<ul>
  <li class="syllabustext">Steps in the Accounting Cycle</li>
    <li class="syllabustext">Adjusting Entries and the Trial Balance</li>
    <li class="syllabustext">Income Statement</li>
    <li class="syllabustext">Balance Sheet (Statement of Financial Position)</li>
    <li class="syllabustext">Cash Flows</li>
    <li class="syllabustext">Statement of Changes in Equity</li>
    <li class="syllabustext">Closing Entries</li>
</ul>
                                            </li>
                                              <li>Analysis of Business Transactions and Financial Statements
                                               <ul>
  <li class="syllabustext">Accrual Vs Cash Basis Accounting</li>
    <li class="syllabustext">Prepayments</li>
    <li class="syllabustext">Matching Principles</li>
    <li class="syllabustext">Bad Debts</li>
    <li class="syllabustext">Inventory Valuation (Methods: FIFO, LIFO, W-AVG)    </li>
    <li class="syllabustext">Petty Cash Management and Bank Reconciliation</li>
    <li class="syllabustext">Common size Financial Statements</li>
    <li class="syllabustext">Horizontal and Vertical Analysis</li>
    <li class="syllabustext">Depreciation</li>
    <li class="syllabustext">Ratio Analysis</li>
</ul>
                                            </li>

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
                                 Microsoft Excel
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Introduction to Microsoft Excel
                                            <ul>
    <li class="syllabustext">Overview of Excel interface</li>
    <li class="syllabustext">Understanding workbooks, worksheets, rows, columns and cells</li>
    <li class="syllabustext">Navigation techniques (Scrolling, zooming, selection)</li>
    <li class="syllabustext">Basic data entry and editing</li>
    <li class="syllabustext">Saving and Opening Workbooks</li>
    <li class="syllabustext">Introduction to Formulas and Functions</li>
</ul>
                                            
                                            </li>
                                            <li class="syllabustext">Data Collaboration
                                            <ul>
    <li class="syllabustext">Sharing Workbooks</li>
    <li class="syllabustext">Protecting Worksheets and Workbooks</li>
    <li class="syllabustext">Using Hyperlink for Navigation</li>
</ul>
                                            
                                            </li>
                                            
                                            <li class="syllabustext">Data Management
                                            <ul>
    <li class="syllabustext">Sorting Data (Single and Multiple Level)</li>
    <li class="syllabustext">Filtering Data (Auto and Advanced Filter)</li>
    <li class="syllabustext">Using Tables for data organization</li>
    <li class="syllabustext">Data Validation</li>
</ul>
                                            
                                            </li>
                                            <li class="syllabustext">Advanced Formulas and Functions
                                                <ul class="syllabustext">
                                                  <li class="syllabustext">Logical Functions (IF, AND, OR)</li>
    <li class="syllabustext">Lookup Functions (LOOKUP, VLOOKUP, HLOOKUP, INDEX, MATCH)</li>
    <li class="syllabustext">Text Functions (LEN, LEFT, RIGHT, MID, CONCATENATE)</li>
    <li class="syllabustext">Date and Time Functions (TODAY, NOW, DATE, TIME)</li>
    <li class="syllabustext">Financial Functions (PMT, RATE, NPER, PV, FV)</li>
    <li class="syllabustext">Financial Accounting application in MS Excel</li>
                                                </ul>
                                            </li>
                                            

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
                                  QuickBooks Accounting Software
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">Introduction to QuickBooks

                                                <ul class="syllabustext">
                                                      <li class="syllabustext">Overview of QuickBooks</li>
    <li class="syllabustext">Navigating the QuickBooks Interface</li>
    <li class="syllabustext">Opening a sample company</li>
    <li class="syllabustext">QuickBooks Menus</li>
    <li class="syllabustext">Company Preferences and Setting</li>
                                                </ul>
                                            </li>
                                            <li class="syllabustext">New Company Set-up Wizard
                                            <ul>
    <li class="syllabustext">Entering Company Info</li>
    <li class="syllabustext">Setting up QuickBooks preferences</li>
    <li class="syllabustext">Choosing a start date</li>
    <li class="syllabustext">Setting up income and expense accounts</li>
    <li class="syllabustext">Finishing the Interview</li>
    <li class="syllabustext">Getting help while using QuickBooks</li>
</ul>
</li>
                                            <li class="syllabustext">Basic Functions
                                            <ul>
    <li class="syllabustext">Creating, editing and managing Accounts</li>
    <li class="syllabustext">Journal entry</li>
    <li class="syllabustext">General ledger</li>
</ul></li>
                                            <li class="syllabustext">Managing Customer and Sales
                                            <ul>
    <li class="syllabustext">Customer Center</li>
    <li class="syllabustext">Creating and managing Customers</li>
    <li class="syllabustext">Creating Customer Invoices</li>
    <li class="syllabustext">Recording Sales Receipts</li>
    <li class="syllabustext">Managing Estimates and Sales Orders</li>
    <li class="syllabustext">Credit Memos/ Refund</li>
    <li class="syllabustext">Transportation & other charges</li>
    <li class="syllabustext">Customers and Receivables Reports</li>
</ul>
                                            </li>
                                            <li class="syllabustext">Managing Vendors and Purchases
                                           <ul>
    <li class="syllabustext">Vendor Center</li>
    <li class="syllabustext">Creating and managing Vendors</li>
    <li class="syllabustext">Entering Bills and Paying Vendors</li>
    <li class="syllabustext">Managing Purchase Orders and receiving Inventory</li>
    <li class="syllabustext">Handle Vendor credits and refunds</li>
    <li class="syllabustext">Vendors and Payable Reports</li>
</ul>
                                            
</li>
                                            
                                            
                                            
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
                                   Tally Accounting Software
                                  <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">What to start with?</li>
                                            <li class="syllabustext">Introduction to Tally
                                              <ul>
    <li class="syllabustext">Understanding the user interface</li>
    <li class="syllabustext">Creating and editing Ledger, stock items, unit of measure</li>
    <li class="syllabustext">Stock categories and Godowns</li>
</ul>
                                            </li>
                                            <li class="syllabustext">Voucher Entries
                                            <ul>
    <li class="syllabustext">Types of Vouchers (Payment, receipt, Contra, Journal, Sales, Credit Note, Purchase, Debit Note, Purchase Order, Sales Order)</li>
    <li class="syllabustext">Accounting and Inventory Vouchers</li>
    <li class="syllabustext">Purchase/ Sale Discount</li>
</ul>
                                            </li>
                                            <li class="syllabustext">Inventory Management
                                             <ul>
    <li class="syllabustext">Managing Stock Items and Unit of Measure</li>
    <li class="syllabustext">Bill of Material and Manufacturing Journal</li>
</ul>
                                            </li>
                                         <li class="syllabustext"> <li class="syllabustext">Inventory Management
                                             <ul>
 <li class="syllabustext">Configuring Payroll Masters</li>
    <li class="syllabustext">Salary Details and Earning /Deductions</li>
    <li class="syllabustext">Processing Payroll and Generating Payroll Reports</li>
</ul>
                                            </li> 
                                               <li class="syllabustext">Utilities and Additional Features
                                             <ul>
  <li class="syllabustext">Data Backup and Restore</li>
    <li class="syllabustext">Security and Access Controls</li>
    <li class="syllabustext">Integration with MS Excel</li>
    <li class="syllabustext">Taxation</li>
    <li class="syllabustext">Real Life Case studies and Scenarios</li>
</ul>
                                            </li>
                                             <li class="syllabustext">Reports 
                                             <ul>
    <li class="syllabustext">Financial Statements</li>
    <li class="syllabustext">Day Book</li>
    <li class="syllabustext">Statements of Accounts</li>
    <li class="syllabustext">Accounts Books</li>
    <li class="syllabustext">Statements of Inventory</li>
    <li class="syllabustext">Inventory Books</li>
</ul>
                                            </li>
                                          

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
                                  Portfolio Building on LinkedIn                             <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6>--}}
                                            <li class="syllabustext">Introduction to Microsoft PowerPoint
<ul>
    <li class="syllabustext">Using LinkedIn as Portfolio Platform</li>
    <li class="syllabustext">Optimizing LinkedIn Profile</li>
    <li class="syllabustext">Adding Projects and Certifications</li>
    <li class="syllabustext">Writing Effective Posts and Articles</li>
    <li class="syllabustext">Engaging with Industry-specific Content</li>
    <li class="syllabustext">Showcasing Skills with Endorsements and Recommendations</li>
    <li class="syllabustext">Networking with Industry Professionals</li>
    <li class="syllabustext">Seeking Freelancing Opportunities</li>
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
                 <h6 class="process-title">Understand and apply fundamental accounting principles</h6>
               
               </div>
            </div>
           <div class="process-style1 d-flex align-items-center">
  <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Prepare and analyze financial statements </h6>
              
               </div>
            </div>
                <div class="process-style1 d-flex align-items-center">
        <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Utilize Microsoft Excel for data management and financial analysis</h6>
            
               </div>
            </div>
            <div class="process-style1 d-flex align-items-center">
             <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Navigate and use QuickBooks & Tally for business transactions and financial reporting </h6>
                 
               </div>
            </div>
            
              <div class="process-style1 d-flex align-items-center">
             <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <h6 class="process-title">Create an effective Resume and Portfolio to gain income-generating Opportunities by providing Computerized Accounting related services</h6>
                 
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
              
               
               <p>Learn to apply accounting knowledge through real-world examples, enhancing your practical skills</p>
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                    
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon"></div>
              
                 <p>Learn to efficiently manage, sort, and filter large datasets, improving data organization</p>
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                      
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon"></div>
               <p>Create charts, tables, and SmartArt graphics for clear and effective data presentation</p>
             
            </div>
         </div>    
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                      
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon"></div>
               <p>Navigate QuickBooks easily, making it accessible even for beginners</p>
             
            </div>
         </div> 
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
              
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-1.svg" alt="icon"></div>
              
               
               <p>Develop a well-rounded skill set covering essential accounting software and tools</p>
            </div>
         </div>
             <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
              
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-1.svg" alt="icon"></div>
              
               
               <p>Enhance your job/business prospects with proficiency in multiple accounting software</p>
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                    
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon"></div>
              
                 <p>Gain skills that are crucial for career advancement in accounting, finance, and business management</p>
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
                  <p class="fs-md process-title">Start career in Finance and Accounting</P >
                  </div>
                        </div>

                        <div class="process-style1 d-flex align-items-center">
                            <span class="process-number"><i class="fas fa-circle"></i></span>
                             <div class="process-content">
                                <p class="fs-md process-title">	Fresh Graduates</P >
                                </div>
                                      </div>

                     

                        
                        
          </div>
          <div class="col-sm-6 col-xl-4">
              <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title">	Fresh Intermediates</p>
                  </div>
                        </div>
                        
                        <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                        <p class="fs-md process-title">Professionals involved in Accounting field </p>
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
                  <p class="fs-md process-title ">Anyone can join </p>
                 
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
         ">Farhan Shahid Qazi</h5>
                        <p class="fs-md about-text pe-xl-5 me-xl-3">Farhan Shahid Qazi is Founder and Chief Visionary Officer at YouExcel. He is a member of Association of Chartered Certified Accountant (ACCA) by profession. He has graduated in Applied Accounting from Oxford Brookes University, UK. He has also completed ‘Train the Trainer’ certificate from Association of Talent Development, USA.
         
         </p> 
         <br>
         <br><br>
         <p class="fs-md about-text pe-xl-5 me-xl-3">
         Farhan’s cross-cultural 12 plus years of international business exposure of working in London, Dubai and Karachi in various organization including in a Fortune 500 company has enabled him to positively influence youth on achieving their career goals and learning employability skills through his educational entrepreneurial venture registered as YouExcel.
         </p> 
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
               
             <h2 class=" pt-1  text-white">Become smarter in just 48 hours </h2>
             <!--<p class=" pt-1 fs-md text-white">Enter your email id to get latest updates and  amazing discounts</p>-->
               <br>
               
               </div>
               </div>
                  <div class="row gx-100 gy-4 pb-5 justify-content-md-center ">
               
                <div class="col-lg-10 col-xl-10 col-xxl-10 pb-5 ">   
                
                <form class="newsletter-form d-flex flex-row justify-content-center align-items-center">
                   <a href="../Registration-Form/computerized-accounting " class="vs-btn style2"><i class="far fa-angle-right"></i>GET REGISTERED HERE</a>
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