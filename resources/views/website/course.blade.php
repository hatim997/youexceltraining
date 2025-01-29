@extends('website.app')

@section('title', 'Dashboard Reporting & Analysis with Power BI Course in Karachi')
@section('meta_description', 'Enroll in the Dashboard Reporting & Analysis with Power BI Course in Karachi. Learn to
    create interactive dashboards and advanced reports to elevate your data skills.')
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
                                    <td><i class="far fa-hourglass"></i> Duration: &nbsp; 36 hours</td>
                                </tr>
                                <tr style="padding-top: 8px;">
                                    <td>
                                        <i class="far fa-suitcase"></i>Difficulty Level: &nbsp; Beginner to Advanced
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
                    <h5 class="border-title2 wow fadeInUp ">Program Overview</h5>

                    <p class="wow fadeInDown">Master Power BI attractive Dashboard Reporting by integrating data from
                        various sources, configuring and optimizing. It emphasizes data cleaning, transformation, and
                        loading using Power Query.</p>
                    <p class="wow fadeInDown">Develop robust data models and manage relationships between databases. The
                        program also focuses on DAX functions for calculations, advanced reporting with visuals and AI
                        features, and effective workspace and dataset management, including security and data refresh.</p>


                    <h5 class="border-title2 wow fadeInUp ">Training Outline</h5>

                </div>
                <div class="col-lg-12">

                    <div class="accordion accordion-style4" id="accordionExample">

                        <div class="accordion-item active wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingOne">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <span class="button-label">Module 01</span>
                                    Connecting to Power BI Data
                                    <i class="fas fa-angle-down"></i> 
                                </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <strong>1. Sourcing Data</strong>
                                            <ul>
                                                <li class="syllabustext">Get data from a file</li>
                                                <li class="syllabustext">Get data from a local db</li>
                                                <li class="syllabustext">Get data from SQL</li>
                                                <li class="syllabustext">Get data from other applications</li>
                                                <li class="syllabustext">Connecting with shared data</li>
                                            </ul>
                        
                                            <strong>2. Configuring Data</strong>
                                            <ul>
                                                <li class="syllabustext">Working with source data settings</li>
                                                <li class="syllabustext">Configuring Power BI storage modes</li>
                                                <li class="syllabustext">Modifying Power BI privacy levels</li>
                                                <li class="syllabustext">Updating field properties</li>
                                                <li class="syllabustext">Resolving import errors</li>
                                                <li class="syllabustext">Fixing performance issues</li>
                                            </ul>
                        
                                            <strong>3. Advanced Data Sourcing</strong>
                                            <ul>
                                                <li class="syllabustext">Connecting to a Dataverse</li>
                                                <li class="syllabustext">Connecting with a NoSQL database</li>
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
                                    <span class="button-label">Module 02</span>
                                    Cleaning, Transforming and Loading Data in Power BI
                                    <i class="fas fa-angle-down"></i> 
                                </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInUp">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <strong>1. Understanding Your Power BI Data</strong>
                                            <ul>
                                                <li class="syllabustext">The data treatment process on Power BI</li>
                                                <li class="syllabustext">Profiling Power BI data</li>
                                                <li class="syllabustext">Cleaning, transforming, and loading the data</li>
                                                <li class="syllabustext">Profiling and loading your data</li>
                                            </ul>
                        
                                            <strong>2. Transforming Rows and Columns on Power Query</strong>
                                            <ul>
                                                <li class="syllabustext">Cleaning up your data</li>
                                                <li class="syllabustext">Row and column transformations</li>
                                            </ul>
                        
                                            <strong>3. Manipulating Queries and Tables on Power Query</strong>
                                            <ul>
                                                <li class="syllabustext">Identifying keys on your Power BI model</li>
                                                <li class="syllabustext">Shaping and transforming tables</li>
                                                <li class="syllabustext">Referencing and duplicating queries</li>
                                                <li class="syllabustext">Working with tables and queries</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingThree">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <span class="button-label">Module 03</span>
                                    Design and Develop a Power BI Data Model
                                    <i class="fas fa-angle-down"></i> 
                                </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInUp">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <strong>1. Designing a Power BI Data Model</strong>
                                            <ul>
                                                <li class="syllabustext">Understanding Data Models</li>
                                                <li class="syllabustext">Star and Snowflake Schemas</li>
                                                <li class="syllabustext">Filtering Out Unnecessary Data</li>
                                                <li class="syllabustext">Report Granularity</li>
                                                <li class="syllabustext">Configuring Metadata</li>
                                                <li class="syllabustext">Manipulating Tables on a Power BI Data Model</li>
                                                <li class="syllabustext">Configuring Table and Column Properties</li>
                                            </ul>
                        
                                            <strong>2. Working With Relationships</strong>
                                            <ul>
                                                <li class="syllabustext">Creating and Configuring Relationships</li>
                                                <li class="syllabustext">Configuring Cross Filter Direction</li>
                                                <li class="syllabustext">Working with Date Tables</li>
                                                <li class="syllabustext">Role-Playing Dimensions on Power BI</li>
                                                <li class="syllabustext">Configuring Relationships</li>
                                                <li class="syllabustext">Working with Role-Playing Dimensions</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour66" aria-expanded="false"
                                    aria-controls="collapseFour66">
                                    <span class="button-label">Module 04</span>
                                    Creating Model Calculations Using DAX
                                    <i class="fas fa-angle-down"></i> 
                                </button>
                            </div>
                            <div id="collapseFour66" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <strong>1. DAX Aggregate Functions</strong>
                                            <ul>
                                                <li class="syllabustext">Create a Measure with Sum</li>
                                                <li class="syllabustext">Understanding DAX Syntax</li>
                                                <li class="syllabustext">Display the Measure in a Matrix</li>
                                                <li class="syllabustext">Format a Measure</li>
                                                <li class="syllabustext">Create Measures with Count and CountRows</li>
                                                <li class="syllabustext">Delete or Edit a Measure</li>
                                                <li class="syllabustext">Check Your Data with CountBlank</li>
                                                <li class="syllabustext">Create a Measure with DistinctCount</li>
                                            </ul>
                        
                                            <strong>2. Measures and Calculated Columns</strong>
                                            <ul>
                                                <li class="syllabustext">Add a Calculated Column</li>
                                                <li class="syllabustext">Understand Explicit vs. Implicit Measures</li>
                                                <li class="syllabustext">Create a Measure with Operators</li>
                                                <li class="syllabustext">Create a Measure with Divide</li>
                                                <li class="syllabustext">Iterators and Row Context SUMX</li>
                                                <li class="syllabustext">Basic DAX Date and Time Functions</li>
                                            </ul>
                        
                                            <strong>3. DAX Logical and Filter Functions</strong>
                                            <ul>
                                                <li class="syllabustext">Use FIND</li>
                                                <li class="syllabustext">Use IF</li>
                                                <li class="syllabustext">Use OR to Handle Case Sensitivity</li>
                                                <li class="syllabustext">Use CALCULATE to Create a Simple Filter</li>
                                                <li class="syllabustext">Use SWITCH</li>
                                            </ul>
                        
                                            <strong>4. Using DAX Time Intelligence Functions</strong>
                                            <ul>
                                                <li class="syllabustext">DAX Time Intelligence Functions</li>
                                                <li class="syllabustext">Summarize Year-to-Date with DATESYTD</li>
                                                <li class="syllabustext">Visualize Cumulative YTD Data</li>
                                                <li class="syllabustext">Compare Totals with SAMEPERIODLASTYEAR</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingFive">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    <span class="button-label">Module 05</span> Creating Reports in Power BI
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <strong>1. Creating Reports</strong>
                                            <ul>
                                                <li class="syllabustext">Getting Started with a Visual</li>
                                                <li class="syllabustext">How to Know Which Visual is Best</li>
                                                <li class="syllabustext">Tailor Your Visual</li>
                                                <li class="syllabustext">Adding Custom Visualizations</li>
                                                <li class="syllabustext">Adding R and Python Visualizations</li>
                                                <li class="syllabustext">Working with Filters</li>
                                                <li class="syllabustext">Working with Slicers</li>
                                            </ul>
                        
                                            <strong>2. Doing More with Reports</strong>
                                            <ul>
                                                <li class="syllabustext">Working with Report Themes</li>
                                                <li class="syllabustext">Conditional Formatting</li>
                                                <li class="syllabustext">Customize Your Layout</li>
                                                <li class="syllabustext">Working with Paginated Reports</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingSix">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                    aria-controls="collapseSix">
                                    <span class="button-label">Module 06</span> Advanced Reporting in Power BI
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <strong>1. The Analytics Features of Power BI</strong>
                                            <ul>
                                                <li class="syllabustext">Grouping, Binning, and Clustering</li>
                                                <li class="syllabustext">Working with Groups, Bins, and Clusters</li>
                                                <li class="syllabustext">The Power BI Analytics Pane</li>
                                                <li class="syllabustext">Working with the Analytics Pane</li>
                                            </ul>
                        
                                            <strong>2. The AI Capabilities of Power BI</strong>
                                            <ul>
                                                <li class="syllabustext">The AI Capabilities of Power BI</li>
                                                <li class="syllabustext">Power BI AI Visuals</li>
                                                <li class="syllabustext">AI Charts on Power BI Desktop</li>
                                                <li class="syllabustext">Text-Based AI on Power BI Desktop</li>
                                                <li class="syllabustext">AI Features on the Power BI Service</li>
                                            </ul>
                        
                                            <strong>3. Advanced Visual Interactions</strong>
                                            <ul>
                                                <li class="syllabustext">Advanced Visual Interactions</li>
                                                <li class="syllabustext">Working with Visual Interactions</li>
                                                <li class="syllabustext">Hierarchies and Drill Downs</li>
                                                <li class="syllabustext">Working with Hierarchies</li>
                                            </ul>
                        
                                            <strong>4. Power BI Report Navigation</strong>
                                            <ul>
                                                <li class="syllabustext">Report Navigation on Power BI</li>
                                                <li class="syllabustext">Creating a Navigation Page</li>
                                                <li class="syllabustext">The Adventure Works Gazette</li>
                                                <li class="syllabustext">Mobile and Export Options</li>
                                                <li class="syllabustext">Working with Other Formats and Devices</li>
                                                <li class="syllabustext">Advanced Visual Interactions</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingSeven">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                                    aria-controls="collapseSeven">
                                    <span class="button-label">Module 07</span> Manage Workspaces
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <strong>1. Understanding Workspaces</strong>
                                            <ul>
                                                <li class="syllabustext">Getting Started with Workspaces</li>
                                                <li class="syllabustext">Configure Workspace Settings</li>
                                                <li class="syllabustext">Customize Workspace Roles</li>
                                            </ul>
                        
                                            <strong>2. Configuring Workspace Assets</strong>
                                            <ul>
                                                <li class="syllabustext">Getting Started with Workspace Assets</li>
                                                <li class="syllabustext">Import and Configure Workspace Assets</li>
                                                <li class="syllabustext">Create Dashboards</li>
                                                <li class="syllabustext">Creating Even More Workspace Assets</li>
                                                <li class="syllabustext">Distribute Your Workspace Assets</li>
                                                <li class="syllabustext">Create and Configure a Workspace App</li>
                                            </ul>
                        
                                            <strong>3. Configuring Content Value</strong>
                                            <ul>
                                                <li class="syllabustext">Get Familiar with Content Sensitivity Labels</li>
                                                <li class="syllabustext">Configure Workspace Content Endorsement</li>
                                            </ul>
                        
                                            <strong>4. Doing More with Workspaces</strong>
                                            <ul>
                                                <li class="syllabustext">Establish Alerts and Subscriptions</li>
                                                <li class="syllabustext">Navigate Workspace Usage Metrics</li>
                                                <li class="syllabustext">Working with Lineage View</li>
                                                <li class="syllabustext">Deep Dive Using Analyze in Excel</li>
                                                <li class="syllabustext">Customize Workspace Roles</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingEight">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                                    aria-controls="collapseEight">
                                    <span class="button-label">Module 08</span> Managing Datasets in Power BI
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <strong>1. Power BI Datasets</strong>
                                            <ul>
                                                <li class="syllabustext">What Are Power BI Datasets</li>
                                                <li class="syllabustext">Working With Shared Datasets</li>
                                                <li class="syllabustext">Configuring Dataset Permissions and Settings</li>
                                                <li class="syllabustext">Securing and Endorsing Power BI Datasets</li>
                                            </ul>
                        
                                            <strong>2. Refreshing Your Power BI Data</strong>
                                            <ul>
                                                <li class="syllabustext">Power BI Gateways</li>
                                                <li class="syllabustext">Scheduling Dataset Refreshes</li>
                                                <li class="syllabustext">Configuring Power BI Data Refreshes</li>
                                            </ul>
                        
                                            <strong>3. Working with Row Level Security</strong>
                                            <ul>
                                                <li class="syllabustext">Understanding Row Level Security</li>
                                                <li class="syllabustext">Configuring RLS on Power BI</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingNine">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false"
                                    aria-controls="collapseNine">
                                    <span class="button-label">Module 09</span> SQL with Power BI Training
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Understanding SQL and its Role in Data Analysis</li>
                                                <li class="syllabustext">Connecting Power BI to SQL Server</li>
                                                <li class="syllabustext">Exploring Power BI Interface and Data Model</li>
                                                <li class="syllabustext">Using SQL Queries in Power BI</li>
                                                <li class="syllabustext">Basic SQL Querying in Power BI</li>
                                                <li class="syllabustext">Advanced SQL Queries in Power BI</li>
                                                <li class="syllabustext">Using SQL Views</li>
                                                <li class="syllabustext">Optimizing Query Performance</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingTen">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false"
                                    aria-controls="collapseTen">
                                    <span class="button-label">Module 10</span> Python Integration in Power BI
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Chapter Introduction - Python Integration in Power BI</li>
                                                <li class="syllabustext">Download & Connect Python to Power BI</li>
                                                <li class="syllabustext">Create Data with a Python Script</li>
                                                <li class="syllabustext">Import External Data with Python</li>
                                                <li class="syllabustext">Run a Python Script in Power Query</li>
                                                <li class="syllabustext">Create a Visual with Matplotlib</li>
                                                <li class="syllabustext">Data Cleaning with Python</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingEleven">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false"
                                    aria-controls="collapseEleven">
                                    <span class="button-label">Module 11</span> Introducing Machine Learning integration in Power BI
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <strong>Power BI</strong>
                                            <ul>
                                                <li class="syllabustext">What Is Machine Learning</li>
                                                <li class="syllabustext">What Is Supervised Learning</li>
                                                <li class="syllabustext">How To Format Data For Scikit Learn</li>
                                                <li class="syllabustext">Linear Regression Using Scikit Learn</li>
                                                <li class="syllabustext">Train Test Split</li>
                                                <li class="syllabustext">Logistic Regression Using Scikit Learn</li>
                                                <li class="syllabustext">Logistic Regression For Multiclass Classification</li>
                                                <li class="syllabustext">What Is Unsupervised Learning</li>
                                                <li class="syllabustext">K Means Clustering</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingTwelve">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false"
                                    aria-controls="collapseTwelve">
                                    <span class="button-label">Module 12</span> Introduction to MS Fabric
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Building Workspaces and Lakehouses</li>
                                                <li class="syllabustext">Creating Flows in Fabric</li>
                                                <li class="syllabustext">Auto Create a Report in Power BI</li>
                                                <li class="syllabustext">Enabling Fabric Preview</li>
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


    <section class="pb-3" id="div2">
        <div class="container">
            <div class="text-left">
                <h5 class="border-title2">Learning Outcomes</h5>
            </div>
            <div class="row align-items-start">
                <div class="col-md-12 col-lg process-inner1 order-2 order-lg-1">
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Gain the ability to Source data from files, databases, SQL, NoSQL, and Dataverse</p>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Learn to Manage storage modes, privacy levels, and troubleshoot issues</p>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Develop skills in Cleaning, transforming, and loading data using Power Query</p>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Build and optimize data models with metadata and relationships</p>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Apply DAX for measures, calculated columns, and time intelligence</p>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Design interactive reports with visuals, filters, and AI tools</p>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Configure workspaces, permissions, refresh schedules, and security</p>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Leverage AI and advanced analytics for actionable insights</p>
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
                    <div class="title-area -animated" data--delay="0.3s" style="visibility: visible; animation-delay: 0.3s;">
                        <h5 class="border-title2">Salient Features</h5>
                    </div>
                </div>
            </div>
            <div class="row -animated" data--delay="0.4s" style="visibility: visible; animation-delay: 0.4s;">
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="d-flex justify-content-end"></div>
                        <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-1.svg" alt="icon"></div>
                        <p class="fs-md">Data Integration</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="d-flex justify-content-end"></div>
                        <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon"></div>
                        <p class="fs-md">Interactive Real-time visual Analytics</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="d-flex justify-content-end"></div>
                        <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon"></div>
                        <p class="fs-md">Smart Narrative using AI Capabilities</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="d-flex justify-content-end"></div>
                        <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-4.svg" alt="icon"></div>
                        <p class="fs-md">Collaborative Reporting</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="d-flex justify-content-end"></div>
                        <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-5.svg" alt="icon"></div>
                        <p class="fs-md">Scalable Solutions</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="d-flex justify-content-end"></div>
                        <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-5.svg" alt="icon"></div>
                        <p class="fs-md">Cross-platform Access</p>
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
                                    <p class="fs-md process-title">Data Analysts</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">Business Intelligence Professionals</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">IT Professionals</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">Decision Makers and Managers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">Developers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">Finance Professionals</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">Project Managers</p>
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
                                <p class="fs-md process-title ">Familiarity with Microsoft Excel and Analytical Mindset</p>
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
                         
                        <h5 class="sec-title mb-3 mb-lg-4" style="font-size: 30px;">Tahir Ali</h5>
                        <p class="fs-md about-text pe-xl-5 me-xl-3">Tahir Ali is a<b> highly motivated corporate trainer with experience 
                            in training small and large groups </b>
                            across diverse industries. <b> Proven success with over 16 years </b>of professional experience of
                            industry in leveraging educational theories and methodologies 
                            to design, develop, and deliver successful training programs and integrate instructional
                            technology to provide onsite and virtual training.
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
                        <div class="img-1 mega-hover"><img class="" src="{{ asset('img/trainer/tahir.jpeg') }}"width: 502px;border-radius: 50px;"></div>
                        <div class="shape-dotted jump"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-3" id="div2">
        <div class="container">
            <div class="text-left">
                <h5 class="border-title2">Value Added Services</h5>
            </div>
            <div class="row align-items-start">
                <div class="col-md-12 col-lg process-inner1 order-2 order-lg-1">
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Lifetime video recorded session with personalized Learning Management System (LMS) access login ID for months</p>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Lifetime WhatsApp post-training support</p>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">100% job and business-oriented training</p>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Certificate of completion recognized from Trade Testing Board, Government of Pakistan</p>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Fully equipped training center venue for on-campus trainings readily available with laptops, projectors, and air-conditioning</p>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Live physical on-campus and online sessions facility</p>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="fs-md process-title">Claim Continuing Professional Development (CPD) hours for the training</p>
                        </div>
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

                    <h2 class=" pt-1  text-white">Become smarter in just 36 hours </h2>
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
