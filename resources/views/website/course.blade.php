@extends('website.app')

@section('title', 'Dashboard Reporting & Analysis with Power BI Course in Karachi')
@section('meta_description', 'Enroll in the Dashboard Reporting & Analysis with Power BI Course in Karachi. Learn to create interactive dashboards and advanced reports to elevate your data skills.')
@section('meta_keywords', 'Dashboard Reporting & Analysis with Power BI Course in Karachi')


@section('content')
    <div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Stop Guessing, Start knowing Your Data: Take Admission to Master Power BI
                    Visualization Skills</h1>
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
    <section class="course-details pb-3 pt-3">
        <div class="container">

            <div class="row flex-row-reverse">
                <div class="col-lg-4">
                    <div class="course-meta-box wow fadeInUp ">
                        <table>
                            <tbody>
                                <tr class=" mb-4">

                                    <td> <img src="https://youexceltraining.com/img/Yourexcel-img/pbi.jpg" /> </td>
                                </tr>

                                <tr>
                                    <td><i class="far fa-hourglass"></i> Duration: &nbsp; 48 hours</td>
                                </tr>
                                <tr style="padding-top: 8px;">
                                    <td>
                                        <i class="far fa-suitcase"></i>Difficulty Level: &nbsp; Beginner to Advance
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
                            </tbody>
                        </table>
                        @if ($pdf == '')
                        @else
                            <a href="{{ $pdf }}" class="vs-btn"><i class="fas fa-hand-point-down"></i>Download
                                Brochure Now</a><br /><br />
                        @endif
                        <a href="https://youexceltraining.com/enquiry-form/dashboard-reporting-powerbi-analysis"
                            class="vs-btn">Enquire Now</a><br /><br />
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-category wow fadeInUp ">
                        <a href="#">Get Started Learning with </a>
                    </div>
                    <h2 class="course-title animate__animated animate__bounceInDown">Dashboard Reporting & Analysis with
                        Power BI </h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                    </div>
                    <div class="mb-3">
                        <img src="https://youexceltraining.com/img/Yourexcel-img/pbib.jpg" />
                    </div>
                    <h5 class="border-title2 wow fadeInUp ">Overview</h5>
                    <p class="wow fadeInDown">Become proficient in the field of Data Analysis by enabling yourself to make
                        confident decisions using up-to-the-minute analytics.
                        Gain the knowledge and apply skills to import and merge large amounts of data, summarize and
                        aggregate data, present strategic data and empower informed decision-making.</p>
                    <p class="wow fadeInDown">This training program also covers advanced tools and techniques which include
                        Data Normalization,
                        Data Modeling Analysis, Visualization, SQL for Power BI, Python integration, and using Built-in
                        Artificial Intelligence features in Power-BI.
                    </p>
                    <p class="wow fadeInDown">Now introducing MS Fabric for enhanced data analytics. Learn how to build
                        workspaces and Lakehouses. Further you will be able to learn apply on how to Auto-Create a report in
                        Power BI.</p>




                    <h5 class="border-title2 wow fadeInUp ">Training Outline</h5>

                </div>
                <div class="col-lg-12">

                    <div class="accordion accordion-style4" id="accordionExample">
                        <div class="accordion-item active wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingOne">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <span class="button-label">Module 1</span>
                                    Using
                                    Pivot
                                    Table in MS Excel
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">


                                        <div class="syllabus-content">
                                            <li class="syllabustext">Introduction to Pivot Table</li>
                                            <li class="syllabustext">Create a Basic Pivot Table Report</li>
                                            <li class="syllabustext">Rearranging a Pivot Table Report</li>
                                            <li class="syllabustext">Customizing a Pivot Table</li>
                                            <li class="syllabustext">Adding and Removing Subtotals</li>
                                            <li class="syllabustext">Sorting in a Pivot Table</li>
                                            <li class="syllabustext">Filtering in a Pivot Table</li>
                                            <li class="syllabustext">Create Report Filter Pages</li>
                                            <li class="syllabustext">Using Slicers in Pivot Table</li>
                                            <li class="syllabustext"> Working with Pivot Chart</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingTwo">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <span class="button-label">Module 2</span>
                                    Application of PowerPivot and Power BI
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Introducing Busniess Intelligence for MS Excel</li>
                                            <li class="syllabustext">Understanding BI Data</li>
                                            <li class="syllabustext">Creating Data Models</li>
                                            <li class="syllabustext">Defining a Report</li>
                                            <li class="syllabustext">Understanding and Creating PowerPivot Data
                                                reports</li>
                                            <li class="syllabustext">Creating DAX (Data Analysis Expressions)
                                                Functions</li>
                                            <li class="syllabustext">Mining for information with date and time
                                                analysis</li>
                                            <li class="syllabustext">Dates and Hierarchies and Shaping Reports</li>
                                            <li class="syllabustext">Creating Calendar Table</li>
                                            <li class="syllabustext">Working with multiple date columns</li>
                                            <li class="syllabustext">Apply ETL (Extraction, Transformation & Loading)
                                                process using Power Query</li>
                                            <li class="syllabustext">Query Editor Transformations</li>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <div class="accordion-header d-flex" id="headingThree">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <span class="button-label">Module 3</span>
                                    Introduction
                                    to Power BI Desktop
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Getting started with Power BI Desktop</li>
                                            <li class="syllabustext">Data Sources in Power BI Desktop</li>
                                            <li class="syllabustext">Connect to live Web Data </li>
                                            <li class="syllabustext">Import Excel Workbooks</li>
                                            <li class="syllabustext">Analysis Services Tabular Data</li>
                                            <li class="syllabustext">Shape and Combine Data</li>
                                            <li class="syllabustext">Data Categorization</li>
                                            <li class="syllabustext">Relationship View</li>
                                            <li class="syllabustext">Create and manage relationships in Power BI
                                                Desktop</li>
                                            <li class="syllabustext">Data Type in Power BI Desktop</li>
                                            <li class="syllabustext">Measures in Power BI Desktop</li>
                                            <li class="syllabustext">Calculated Columns and Tables</li>
                                            <li class="syllabustext">Report View</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour66" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 4</span>Power BI Desktop
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour66" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Tips and tricks for creating reports</li>
                                            <li class="syllabustext">Import and display KPIs</li>
                                            <li class="syllabustext">Creating Tables in Power BI</li>
                                            <li class="syllabustext">Matrix Visualization</li>
                                            <li class="syllabustext">Tables and Matrices</li>
                                            <li class="syllabustext">Methods of Aggregation</li>
                                            <li class="syllabustext">Exploring New Card Visual</li>
                                            <li class="syllabustext">Exploring New Button Visual</li>
                                            <li class="syllabustext">Creating and Using Bookmarks to create stunning
                                                visuals</li>
                                            <li class="syllabustext">Cards and Multi Row Cards</li>
                                            <li class="syllabustext">Percentage Calculations</li>
                                            <li class="syllabustext">Filtering Data - Using Slicers, Visual Filters, Page
                                                Filters, Drill Down and Drill Through Filter</li>
                                            <li class="syllabustext">Clustered Column Graphs</li>
                                            <li class="syllabustext">Stacked and 100% Graphs</li>
                                            <li class="syllabustext">Graph Options</li>
                                            <li class="syllabustext">Trend Analysis Graphs</li>
                                            <li class="syllabustext">Area Graphs</li>
                                            <li class="syllabustext">Ribbon Graphs</li>
                                            <li class="syllabustext">Scatterplots and Bubble plots</li>
                                            <li class="syllabustext">Using Smart Narrative feature in Power BI</li>
                                            <li class="syllabustext">Creating Dashboard report using Q&A feature</li>
                                            <li class="syllabustext">Publish from Power BI Desktop</li>
                                            <li class="syllabustext">Share Dashboards through Power BI Desktop and Mobile
                                                Application</li>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour6" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 5</span>Advanced Power Query
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour6" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Chapter Introduction - Advanced Power Query</li>
                                            <li class="syllabustext">M Language Basic Syntax</li>
                                            <li class="syllabustext">M Language IntelliSense</li>
                                            <li class="syllabustext">Query Editor Concepts</li>
                                            <li class="syllabustext">Query Order of Operations</li>
                                            <li class="syllabustext">Query Parameters</li>
                                            <li class="syllabustext">Extracting Table headers dynamically using M Code</li>
                                            <li class="syllabustext">Understand the Underscore Parameter</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour77" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 6</span>Advanced Data Modeling & DAX
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour77" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Chapter Introduction - Advanced Data Modeling & DAX
                                            </li>
                                            <li class="syllabustext">DAX Functions for Advanced Data Modeling</li>
                                            <li class="syllabustext">Build the Visual Dimension</li>
                                            <li class="syllabustext">Create the Visual Measure with USERELATIONSHIP()</li>
                                            <li class="syllabustext">Create the Visual Measure with CONTAINSSTRING()</li>
                                            <li class="syllabustext">Creating and Using Calculation Groups from within
                                                powerbi desktop</li>
                                            <li class="syllabustext">Using New DAX Query View</li>
                                            <li class="syllabustext">Using visual level calculations (New)</li>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour7" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 7</span>Artificial Intelligence in Power BI
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour7" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Artificial Intelligence in Power BI</li>
                                            <li class="syllabustext">Generate a Summary with a Smart Narrative</li>
                                            <li class="syllabustext">Create a Q&A Visual</li>
                                            <li class="syllabustext">Configure the Q&A Visual</li>
                                            <li class="syllabustext">Analyze to Explain the Increase or Decrease</li>
                                            <li class="syllabustext">Identify the Key Influencers</li>
                                            <li class="syllabustext">Creating a Decomposition Tree</li>
                                            <li class="syllabustext">Generate Insights in Power BI Service</li>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour8" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 8</span>SQL with Power BI Training
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour8" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Understanding SQL and its Role in Data Analysis</li>
                                            <li class="syllabustext">Connecting Power BI to SQL Server</li>
                                            <li class="syllabustext">Exploring Power BI Interface and Data Model</li>
                                            <li class="syllabustext">Using SQL Queries in Power BI</li>
                                            <li class="syllabustext">Basic SQL Querying in Power BI</li>
                                            <li class="syllabustext">Advance SQL Queries in Power BI</li>
                                            <li class="syllabustext">Using SQL Views</li>
                                            <li class="syllabustext">Optimizing Query Performance</li>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour99" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 9</span>Python Integration in Power BI
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour99" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Chapter Introduction - Python Integration in Power BI
                                            </li>
                                            <li class="syllabustext">Download & Connect Python to Power BI</li>
                                            <li class="syllabustext">Create Data with a Python Script</li>
                                            <li class="syllabustext">Import External Data with Python</li>
                                            <li class="syllabustext">Run a Python Script in Power Query</li>
                                            <li class="syllabustext">Create a Visual with Matplotlib</li>
                                            <li class="syllabustext">Data Cleaning with Python</li>
                                            <li class="syllabustext">What is Fabric?</li>
                                            <li class="syllabustext">Enabling fabric preview</li>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour9" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 10</span>Introduction to MS Fabric
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour9" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">What is Fabric?</li>
                                            <li class="syllabustext">Enabling fabric preview</li>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour0" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 11</span>: Building Workspaces and Lakehouses
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour0" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Onelake and Lake house</li>
                                            <li class="syllabustext">Workspace Creation</li>
                                            <li class="syllabustext">Creating a Lakehouse for Power BI Data</li>
                                            <li class="syllabustext">Exploring the Lakehouse</li>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour00" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 12</span>Creating Flows in Fabric
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour00" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Adding Users to a Workspace</li>
                                            <li class="syllabustext">Dataflow Creation</li>
                                            <li class="syllabustext">Loading Dataflow to Lakehouse</li>
                                            <li class="syllabustext">Notebook creation</li>
                                            <li class="syllabustext">Building Data Pipelines</li>
                                            <li class="syllabustext">Creating Data mart</li>
                                            <li class="syllabustext">Building Models in the Data mart</li>
                                            <li class="syllabustext">Building SQL Queries and Visual Queries</li>
                                            <li class="syllabustext">Creating and Using Datasets</li>
                                            <li class="syllabustext">Adding DAX Measures and Selecting Tables</li>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour00" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 13</span>Auto Create a Report in Power BI
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour00" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Auto creating a Report in Fabric</li>
                                            <li class="syllabustext">Creating a Report from Scratch</li>
                                            <li class="syllabustext">Promoting or Certifying Your Report</li>

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


    <section class=" pb-3" id="div2">
        <div class="container">
            <div class=" text-left">


                <h5 class="border-title2">Learning Outcomes</h5>
            </div>
            <div class="row align-items-start">
                <div class="col-md-6 col-lg process-inner1 order-2 order-lg-1">
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Integrate existing data with Power BI seamlessly with any source
                            </p>

                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Apply Artificial Intelligence features in Power BI to automate
                                the repetitive tasks in a workflow to boost efficiency

                            </p>

                        </div>
                    </div>

                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title"> Create advanced queries using query editor in Power BI

                            </p>

                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Add user-controlled elements in dashboards



                            </p>

                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Integrate Python as a data source in Power BI

                            </p>

                        </div>
                    </div>


                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Create interactive dashboards in Power BI to see whole company
                                data in one snap-shot</p>

                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Develop familiarity with core concepts of Microsoft Fabrics for
                                data analytics and engineering


                            </p>

                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Create and customize workspaces in Fabric, utilizing Lake houses
                                for efficient Power BI data storage.



                            </p>

                        </div>
                    </div>

                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Develop skills in data flow creation, building data pipelines,
                                and optimizing data models within Fabric for advanced analytics and reporting in Power BI.
                            </p>
                        </div>
                    </div>
                </div>
                <!--<div class="col-lg-5 order-3 order-lg-2 mb-30 mb-md-5 mb-lg-0">-->
                <!--  <div class="img-box3 mb-30">-->
                <!--      <div class="img-1 mega-hover"><img src="https://html.vecurosoft.com/educino/demo/assets/img/about/about-2-1.png" alt="banner"></div>-->
                <!--      <div class="shape-dotted jump"></div>-->
                <!--   </div>-->


                <!--</div>-->

            </div>
        </div>
    </section>
    <section class=" pt-3 pb-3 background-image">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 m-auto">
                    <div class="title-area   -animated" data--delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: ;">


                        <!--<span class="sec-subtitle">IDEAL TUTOR FOR EVERYONE</span>-->
                        <h5 class="border-title2">Salient Features </h5>
                    </div>
                </div>
            </div>
            <div class="row   -animated" data--delay="0.4s"
                style="visibility: visible; animation-delay: 0.4s; animation-name: ;">
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="d-flex justify-content-end">
                        </div>
                        <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-1.svg"
                                alt="icon"></div>


                        <p class="fs-md">Integrate smoothly with existing applications using DAX Function
                        <p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="d-flex justify-content-end">
                        </div>
                        <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg"
                                alt="icon"></div>

                        <p class="fs-md">Personalized Dashboards</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="d-flex justify-content-end">
                        </div>
                        <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg"
                                alt="icon"></div>

                        <p class="fs-md">No Memory and Speed Constraints</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="d-flex justify-content-end">
                        </div>
                        <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-4.svg"
                                alt="icon"></div>
                        <!--<h5 class="media-title">Conditional Formatting </h5>  -->
                        <p class="fs-md">Simple and Performance Oriented</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="d-flex justify-content-end">
                        </div>
                        <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-5.svg"
                                alt="icon"></div>
                        <!--<h5 class="media-title">Data Visualization</h5>-->
                        <p class="fs-md">Secure Reports</p>
                    </div>
                </div>


                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="d-flex justify-content-end">
                        </div>
                        <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-5.svg"
                                alt="icon"></div>
                        <!--<h5 class="media-title">Data Visualization</h5>-->
                        <p class="fs-md">No Specialized or External Support Required</p>
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
                                    <p class="fs-md process-title">Sales Analysis</p>

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
                            </div>
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title"> Finance & Accounts</p>

                                </div>
                            </div>
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title"> Data Analysts</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">Project Managers </p>

                                </div>
                            </div>

                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">Operations and Logistics Manager</p>

                                </div>
                            </div>
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title"> HR Professionals</p>

                                </div>
                            </div>
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title"> IT Professionals</p>

                                </div>
                            </div>
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title"> Data Scientists</p>

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
                                <p class="fs-md process-title ">Basic computer literacy, familiarity with Windows operating
                                    system
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
                <div class="col-xl-12">
                    <h5 class="border-title2 ">Trainer Profile</h5>
                </div>
                <div class="col-lg-6" style="padding:0">
                    <div class="title-area mb-4">

                        <h5 class="sec-title mb-3 mb-lg-4" style="font-size: 30px;
">Tahir Ali</h5>
                        <p class="fs-md about-text pe-xl-5 me-xl-3">Tahir Ali is a highly motivated corporate trainer with
                            experience in training small and large groups across diverse industries. Proven success in
                            leveraging educational theories and methodologies to design, develop, and deliver successful
                            training programs and integrate instructional technology to provide onsite and virtual training.
                        </p>
                    </div>
                    <h5>Professional Certifications:</h5>
                    <div class="list-style1 vs-list mb-30">
                        <ul>
                            <li>Microsoft Certified Trainer</li>
                            <li>Microsoft Office Specialist Master – 2013 & 2016</li>
                            <li>Microsoft Excel Expert - 2013 & 2016</li>
                            <li>Microsoft Word Expert - 2016</li>
                            <li>Microsoft Office Specialist - 2013 & 2016</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" style="padding:0">
                    <div class="img-box3 mb-30">
                        <div class="img-1 mega-hover"><img class="" src="{{ asset('img/trainer/tahir.jpeg') }}"
                                alt="About Img" style="
    width: 502px;
    border-radius: 50px;
"></div>
                        <div class="shape-dotted jump"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <br>
    <br>
    <br>

    <!--                    <div class="container pt-5 ">-->
    <!--                    <h5 class="border-title2">Value Added Services:</h5>-->

    <!--                    <div class="list-style1 vs-list   ">-->
    <!--                  <ul>-->
    <!--                    <li>Experienced professional trainers with practical field exposure</li>-->
    <!--                    <li>100% job and business oriented training.</li>-->
    <!--                    <li>Certificate of completion recognized from Trade Testing Board, Government of Pakistan.</li>-->
    <!--                    <li>Claim Continuing Professional Development (CPD) hours for the training.</li>-->
    <!--                    <li>Video recorded session with personalized Learning Management System (LMS) access login id for 6 months</li>-->
    <!--                    <li>Fully equipped training center venue for on-campus trainings readily available with laptops, projectors and air-conditioning</li>-->
    <!--                    <li>Live physical on-campus and online sessions</li>-->
    <!--</ul>-->

    <!--                    </div>-->
    <!--</div>-->


    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->








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
                        <a href="../Registration-Form/Dashboard Reporting & Analysis with Power BI"
                            class="vs-btn style2"><i class="far fa-angle-right"></i>GET REGISTERED HERE</a>
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








    <!--==============================
@endsection
