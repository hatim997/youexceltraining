@extends('website.app', ['title' => 'Advanced Excel'])

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Go Beyond the Basics: Advanced Excel Training for Professionals. Enrol Now for
                    Dashboard Reporting skills!</h1>
                {{--                <p class="breadcumb-text">Search over 200 individual encyclopedias and reference books.</p> --}}
                <!--<div class="breadcumb-menu-wrap">-->
                <!--    <ul class="breadcumb-menu">-->
                <!--        <li><a href="{{ url('/') }}">Home</a></li>-->
                <!--        <li>Dashboard Reporting & Analysis with Power BI</li>-->
                <!--    </ul>-->
                <!--</div>-->
            </div>
        </div>
    </div> <!--==============================
                  Course Area
              ==============================-->
    <section class="course-details pt-4 pb-5 ">
        <div class="container">

            <div class="row flex-row-reverse">
                <div class="col-lg-4">
                    <div class="course-meta-box wow fadeInUp ">
                        <table>
                            <tbody>
                                <tr class=" mb-4">

                                    <td> <img src="https://youexceltraining.com/img/Yourexcel-img/ae.jpg" /> </td>
                                </tr>

                                <tr>
                                    <td><i class="far fa-hourglass"></i> Duration: &nbsp; 24 hours</td>
                                </tr>
                                <tr style="padding-top: 8px;">
                                    <td>
                                        <i class="far fa-suitcase"></i>Difficulty Level: &nbsp; Intermediate to Advanced
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="far fa-suitcase"></i>This Training also includes:</td>
                                </tr>
                                <tr>
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
                        @if ($pdf == '')
                        @else
                            <a href="{{ $pdf }}" class="vs-btn"><i class="fas fa-hand-point-down"></i> Download
                                Brochure Now</a><br /><br />
                        @endif
                        <a href="https://youexceltraining.com/enquiry-form/advanced-excel" class="vs-btn">Enquire
                            Now</a><br /><br />
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>






                </div>
                <div class="col-lg-8">
                    <div class="course-category wow fadeInUp ">
                        <a href="#">Get Started Learning With</a>
                    </div>
                    <h2 class="course-title animate__animated animate__bounceInDown"> Advanced MS Excel: Business
                        Intelligence with Data Visualization </h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                    </div>
                    <div class="mb-3">
                        <img src="https://youexceltraining.com/img/Yourexcel-img/emab.jpg" />
                    </div>
                    <h5 class="border-title2 wow fadeInUp ">Program Overview:</h5>
                    <p class="wow fadeInDown pb-3">Unleash the Power of MS Excel to master all the essential functions,
                        tools and features taking your efficiency to Advance level. Introducing Co-Pilot and AI features in
                        MS Excel taking this program to whole new level of competence and expertise.

                        Upon completion of this program, participants will become competent to use the advance level of
                        Microsoft Excel, making them an invaluable resource for their companies; accelerate their
                        productivity; and improve organizational performance.
                    </p>
                    <h5 class="border-title2 wow fadeInUp ">Training Outline</h5>
                </div>
                <div class="col-lg-12">
                    <div class="accordion accordion-style4" id="accordionExample">

                        <div class="accordion-item active wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingOne">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <span class="button-label">Module 1</span>
                                    Manage Workbook
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li>Overview (Interface/Tools/Options)</li>
                                                <li>Security (Editing/Restricted sharing/Book-Sheet-Cell Protection)</li>
                                                <li>Tips & Tricks (Short cut keys/Techniques)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingTwo">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <span class="button-label">Module 2</span>
                                    Transformation and Data Cleaning Formulas
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                                <div class="accordion-body wow fadeInUp">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li>Cleaning Formulas
                                                    (Text/Trim/IsText/Right/Left/Mid/Upper/Lower/Proper/Len/Clean/Find)</li>
                                                <li>Wrap Rows/Wrap Columns/Group By/VStack/HStack/Filter
                                                    Unique/Distinct/Sequence/Sort/Substitute</li>
                                                <li>Subtotal/Aggregate</li>
                                                <li>Flash Fill/Fill Series</li>
                                                <li>Text to Column (Fixed/Delimited)</li>
                                                <li>Remove Duplicate (By Conditional Formatting)</li>
                                                <li>Tips & Tricks (Short Keys/Techniques)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="accordion-item">
                            <div class="accordion-header d-flex" id="headingThree">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <span class="button-label">Module 3</span>
                                    Manage Integrity
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                                <div class="accordion-body wow fadeInUp">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li>Data Validation</li>
                                                <li>Group/UnGroup Data</li>
                                                <li>Conditional Formatting (Simple/Advance)</li>
                                                <li>Data Consolidations</li>
                                                <li>Filtering (Simple/Advance)</li>
                                                <li>Tips & Tricks (Short Keys/Techniques)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingFour44">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour44" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 4</span>
                                    Managing Formulas
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour44" class="accordion-collapse collapse" aria-labelledby="headingFour">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li>Logical Operation Functions
                                                    (IF/IFS/OR/NOT/AND/SUMIFS/COUNTIFS/AVGIFS/MAXIFS/MINIFS/SWITCH)</li>
                                                <li>Look-Ups (Fuzzy Lookup/VLOOKUP/HLOOKUP/INDEX/MATCH)</li>
                                                <li>Time Intelligence (DATEDIF/NETWORKDAYS)</li>
                                                <li>Troubleshoot Formulas</li>
                                                <li>Tips & Tricks (Shortcut Keys/Techniques)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingFour4">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour4" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 5</span>
                                    Formula Management with Copilot 2025 UPDATE
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour4" class="accordion-collapse collapse" aria-labelledby="headingFour4">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li>Predictive Analysis: Using Copilot for trend and pattern detection.</li>
                                                <li>Taking the leverage of COPILOT for Insights/Analysis/Interpretation</li>
                                                <li>Simplify Complex Calculation to enhance Productivity techniques</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingFour3">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour3" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 6</span>
                                    Managing Forecasting
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour3" class="accordion-collapse collapse" aria-labelledby="headingFour3">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li>What If Analysis (Data Tables, Scenario Manager, Solver, Goal Seek)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingFour2">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour2" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 7</span>
                                    Excel Power System
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour2">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li>Power Query – ETL (Extract Transform Load)</li>
                                                <li>Automate Daily Task</li>
                                                <li>Table/Pivot Tables/Power Tables</li>
                                                <li>Tips & Tricks (Short cut Keys/Techniques)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingFour11">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour11" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 8</span>
                                    Dashboard and Reporting
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour11" class="accordion-collapse collapse" aria-labelledby="headingFour11">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li>Theory discussion on types of visuals (KPI’s
                                                    card/Charts/Visuals/Slicer/Timeliner)</li>
                                                <li>Create Automated System</li>
                                                <li>Create Automated Dashboards</li>
                                                <li>Tips & Tricks (Short cut Keys/Techniques)</li>
                                            </ul>
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

    <section class="pb-5" id="div2">
        <div class="container">
            <div class="text-left">
                <h5 class="border-title2">Learning Outcomes</h5>
            </div>
            <div class="row align-items-start">
                <div class="col-md-6 col-lg process-inner1 order-2 order-lg-1">
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <h6 class="process-title">Leverage tools and functions to clean, format and prepare data in MS
                                Excel</h6>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <h6 class="process-title">Integrate data from various sources by using Power Query in MS Excel
                            </h6>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <h6 class="process-title">Represent data by highlighting trends using Pivot Tables</h6>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <h6 class="process-title">Apply Data Security features to protect and distribute MS Excel files
                            </h6>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <h6 class="process-title">Design user-friendly automated Dashboards with interactive features,
                                time-based analysis and customizable views</h6>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <h6 class="process-title">Leverage Copilot to generate automated insights, simplify complex
                                data analysis, and create interactive visualizations</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-3 pb-3 background-image">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 m-auto">
                    <div class="title-area -animated" data--delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s;">
                        <h5 class="border-title2">Salient Features</h5>
                    </div>
                </div>
            </div>
            <div class="row -animated" data--delay="0.4s" style="visibility: visible; animation-delay: 0.4s;">
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="d-flex justify-content-end"></div>
                        <div class="media-icon">
                            <img src="https://youexceltraining.com/img/icon/training-icon-1-1.svg" alt="icon">
                        </div>
                        <h5 class="media-title">Spreadsheet Organization</h5>
                        <p>Create, manage, and organize data in rows and columns efficiently</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="d-flex justify-content-end"></div>
                        <div class="media-icon">
                            <img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon">
                        </div>
                        <h5 class="media-title">Formulas and Functions</h5>
                        <p>Use built-in formulas to automate data calculation for reporting</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="d-flex justify-content-end"></div>
                        <div class="media-icon">
                            <img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon">
                        </div>
                        <h5 class="media-title">Advanced Data Analysis Tools</h5>
                        <p>Sort, filter, and analyze data with tools like PivotTables</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="d-flex justify-content-end"></div>
                        <div class="media-icon">
                            <img src="https://youexceltraining.com/img/icon/training-icon-1-4.svg" alt="icon">
                        </div>
                        <h5 class="media-title">Conditional Formatting</h5>
                        <p>Apply formatting rules based on cell values, making it easy to highlight important data points
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="d-flex justify-content-end"></div>
                        <div class="media-icon">
                            <img src="https://youexceltraining.com/img/icon/training-icon-1-5.svg" alt="icon">
                        </div>
                        <h5 class="media-title">Data Visualization</h5>
                        <p>Visualize data patterns and trends by creating various charts, graphs and Dashboards</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="d-flex justify-content-end"></div>
                        <div class="media-icon">
                            <img src="https://youexceltraining.com/img/icon/training-icon-1-6.svg" alt="icon">
                        </div>
                        <h5 class="media-title">Power Query</h5>
                        <p>Easily discover, connect, and transform data from various sources for analysis and reporting</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="d-flex justify-content-end"></div>
                        <div class="media-icon">
                            <img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon">
                        </div>
                        <h5 class="media-title">Power Pivot</h5>
                        <p>Excel's Power Pivot enables users to create data models, perform complex data analysis, and
                            manage larger datasets more efficiently</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="pt-3 pb-3">
        <div class="container">
            <div class="row gx-80 align-items-center">
                <div class="col-md-12">
                    <h5 class="border-title2 pb-3">Target Audience</h5>
                </div>
                <div class="col-xl-10">
                    <div class="row gx-80 align-items-center">
                        <div class="col-sm-6 col-xl-4">
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">Sales and Marketing Analysis</p>
                                </div>
                            </div>
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">Business Analysts</p>
                                </div>
                            </div>
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">Finance & Accounts</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">Data Analysts and Data Scientists</p>
                                </div>
                            </div>
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">Project Managers</p>
                                </div>
                            </div>
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">Operations and Logistics Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">HR Professionals</p>
                                </div>
                            </div>
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">IT Professionals</p>
                                </div>
                            </div>
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">Students</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-3">
        <div class="container">
            <div class="row gx-80 align-items-center">
                <div class="col-xl-12">
                    <h5 class="border-title2 pb-2">Prerequisites</h5>
                </div>
                <div class="col-xl-12">
                    <div class="title-area mb-4">
                        <div class="process-style1 d-flex align-items-center">
                            <span class="process-number"><i class="fas fa-circle"></i></span>
                            <div class="process-content">
                                <p class="fs-md process-title ">Anyone can join</p>
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
                <div class="col-xl-12">
                    <h5 class="border-title2 pb-3">Trainer Profile</h5>
                </div>
                <div class="col-lg-6" style="padding:0">
                    <div class="title-area mb-4">
                        <h5 class="sec-title mb-3 mb-lg-4" style="font-size: 30px;">Uzair Rasheed</h5>
                        <p class="about-text pe-xl-5 me-xl-3 fs-md">
                            Uzair Rasheed: Overall more than 7 years of experience in FMCG, Telecom Industry, IT Group, HR Consultation, and the textile sector. He has also worked on designing, developing, and implementing Power BI/Tableau solutions, including data models, handling large data sets, managing slowly changing dimensions, visualizations, and dashboards.
                        </p>
                        <p>
                            <ul>
                                <li>Experience with Tableau, calculated fields, calculated parameters, Tableau measures, Power BI measures, Power Query, DAX, calculated columns, dashboard creation, and graph interpretation.</li>
                            </ul>
                            He is currently associated with Systems Limited in the capacity of Associate Manager – Business Intelligence. Additionally, he serves as a seasonal consultant for Arthur Lawrence Group LLC (USA) as a Business Analyst. Uzair has previously served in Hilal Food Group Pvt Ltd and Zelbury Textiles Limited.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-box3 mb-30">
                        <div class="img-1 mega-hover">
                            <img src="{{ asset('/img/Yourexcel-img/uzair.jpg') }}" alt="About Img" style="width: 502px; border-radius: 50px;">
                        </div>
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

                    <h2 class=" pt-1  text-white">Become smarter in just 24 hours </h2>
                    <!--<p class=" pt-1 fs-md text-white">Enter your email id to get latest updates and  amazing discounts</p>-->
                    <br>

                </div>
            </div>
            <div class="row gx-100 gy-4 pb-5 justify-content-md-center ">

                <div class="col-lg-10 col-xl-10 col-xxl-10 pb-5 ">

                    <form class="newsletter-form d-flex flex-row justify-content-center align-items-center">
                        <a href="../Registration-Form/Advanced MS Excel" class="vs-btn style2"><i
                                class="far fa-angle-right"></i>GET REGISTERED HERE</a>
                        <!--<button type="submit" class="vs-btn mx-3">GET REGISTERED HERE</button>-->
                    </form>
                </div>

            </div>
        </div>

    </section>

    <div class="modal bd-example-modal-lg" id="myModal" style="z-index:99 ">
        <div class="modal-dialog" style="width:100% ; background-color: #f7a530;" role="document">
            <div class="modal-content"style="
                background-color: transparent;
            ">
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
                                    <input type="text" name="name" id="name"
                                        placeholder="Complete Name"required>
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
                                    <input name="city" placeholder="Your City" required="" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">

                            <input name="comments" placeholder="Comments" type="text">
                        </div>
                        <div class="captcha d-flex item-center mb-4">
                            <div class="spinner d-flex item-center">
                                <label class="mb-0 mt-3 mx-3">

                                    <input type="checkbox" onclick="$(this).attr('disabled','disabled');" required>
                                    <span class="checkmark"><span>&nbsp;</span></span>
                                </label>
                            </div>
                            <div class="text1">
                                I'm not a robot
                            </div>
                            <div class="logo">

                                <img src="https://youexceltraining.com/img/Yourexcel-img/captcha.PNG" />
                                <p>reCAPTCHA</p>
                                <small>Privacy - Terms</small>
                            </div>
                        </div>

                        <button id="spin-btn" class="vs-btn">Spin the wheel</button>

                        <div class="shape-mockup rotate d-none d-xxl-block" data-right="19%" data-bottom="8%">
                            <div class="vs-polygon2"></div>
                        </div>
                        <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="11%" data-bottom="8%">
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
