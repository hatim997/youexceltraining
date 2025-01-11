@extends('website.app')

@section('title', 'Financial Modeling and Analysis Course in Karachi Pakistan')
@section('meta_description',
    'Enroll in the Financial Modeling and Analysis Course in Karachi, Pakistan. Master
    financial forecasting, budgeting, and modeling techniques to advance your career.')
@section('meta_keywords', 'Financial Modeling and Analysis Course in Karachi Pakistan')


{{-- @push('style')
    .custom-img-size {
        height: 250px; /* Adjust this value to set the desired image height */
        object-fit: cover; /* Ensure the image fills the container without stretching */
    }
@endpush --}}
@section('content')
    <div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Transform Your Financial Analysis Skills to Next Level: Learn Financial Modeling
                    & Valuation Now!</h1>
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
    <section class="course-details pt-3 pb-3">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-4">
                    <div class="course-meta-box wow fadeInUp ">
                        <table>
                            <tbody>
                                <tr class=" mb-4">

                                    <td> <img src="https://youexceltraining.com/img/Yourexcel-img/fma.jpg" /> </td>
                                </tr>

                                <tr>
                                    <td><i class="far fa-hourglass"></i> Duration: &nbsp; 36 hours</td>
                                </tr>
                                <tr style="padding-top: 8px;">
                                    <td>
                                        <i class="far fa-suitcase"></i>Difficulty Level: &nbsp; Beginner to Intermediate
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
                        <a href="https://youexceltraining.com/enquiry-form/financial-modeling" class="vs-btn">Enquire
                            Now</a><br /><br />
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-category wow fadeInUp ">
                        <a href="#">Get Started Learning with</a>
                    </div>
                    <h2 class="course-title animate__animated animate__bounceInDown">Financial Modeling and Analysis
                        (Fundamental Level) </h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                    </div>
                    <div class="mb-3">
                        <img src="https://youexceltraining.com/img/Yourexcel-img/fmab.jpg" />
                    </div>
                    <h5 class="border-title2 wow fadeInUp ">Program Overview:</h5>
                    <p class="wow fadeInDown pb-3">
                        Transform your data into decisions with Financial Modeling & Power BI! This competency-based course
                        equips you to translate complex business insights into actionable strategies using advanced
                        financial dashboards and data visualization tools. Gain mastery in delivering concise, impactful
                        presentations to business leaders while leveraging Power BI's machine learning models to forecast
                        trends and drive decisions with precision.
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
                                    Basics of Modeling and Analysis
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Understanding data types, cell references, ranges,
                                                    and calculation blocks</li>
                                                <li class="syllabustext">Utilizing basic and advanced functions</li>
                                                <li class="syllabustext">Utilizing data tools for effective data
                                                    organization</li>
                                                <li class="syllabustext">Applying IF() conditions for consistent formulas
                                                </li>
                                                <li class="syllabustext">Income statement quick analysis</li>
                                                <li class="syllabustext">Creating charts and optimization</li>
                                                <li class="syllabustext">Creating dynamic charts to represent project
                                                    timelines</li>
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
                                    Accounting Model and Data Visualization
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInUp">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Connect databases and integrate records</li>
                                                <li class="syllabustext">Develop a trial balance to ensure accurate
                                                    financial representation</li>
                                                <li class="syllabustext">Compile a comprehensive summary of stock details
                                                </li>
                                                <li class="syllabustext">Highlight and analyze the top 5 balances for
                                                    strategic insights</li>
                                                <li class="syllabustext">Create summaries for presentation on a dashboard
                                                </li>
                                                <li class="syllabustext">Develop and design an effective dashboard for data
                                                    visualization and monitoring</li>
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
                                    Feasibility Model
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInUp">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Conduct preliminary research to gather essential
                                                    data for the new business</li>
                                                <li class="syllabustext">Analyze financial ratios to assess the financial
                                                    health and performance of the business</li>
                                                <li class="syllabustext">Evaluate investment parameters to determine the
                                                    potential return on investment</li>
                                                <li class="syllabustext">Examine finance parameters to understand the
                                                    financial requirements and structure of the business</li>
                                                <li class="syllabustext">Consider shareholdings and dividends to determine
                                                    ownership structure and shareholder returns</li>
                                                <li class="syllabustext">Perform an in-depth analysis of income statements
                                                    to understand revenue, expenses, and profitability</li>
                                                <li class="syllabustext">Analyze balance sheets to assess the financial
                                                    position, assets, liabilities, and equity</li>
                                                <li class="syllabustext">Evaluate cash flows to understand the inflows and
                                                    outflows of cash within the business</li>
                                                <li class="syllabustext">Perform ratio analysis to identify key financial
                                                    metrics</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 4</span>
                                    Comparative Case Study
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Establish a centralized database for company
                                                    financials</li>
                                                <li class="syllabustext">Perform comparative annual income statement and
                                                    balance sheet analysis</li>
                                                <li class="syllabustext">Perform comparative quarterly income statement and
                                                    balance sheet analysis</li>
                                                <li class="syllabustext">Utilize comparative graphical analysis and
                                                    valuation ratios</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour1" aria-expanded="false"
                                    aria-controls="collapseFour1">
                                    <span class="button-label">Module 5</span>
                                    DCF Valuation and Sensitivity Analysis
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Discount the FCFs (NPV of explicit period)</li>
                                                <li class="syllabustext">DCF calculator assumptions</li>
                                                <li class="syllabustext">WACC vs Share price sensitivity</li>
                                                <li class="syllabustext">Share price at Perpetual Growth</li>
                                                <li class="syllabustext">Share price at Exit EBITDA Multiple</li>
                                                <li class="syllabustext">Sensitivity analysis and impact of changes in
                                                    assumptions</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour2" aria-expanded="false"
                                    aria-controls="collapseFour2">
                                    <span class="button-label">Module 6</span>
                                    Financial Dashboards & Dynamic Connections
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Develop a comprehensive forecast of the company's
                                                    future revenues</li>
                                                <li class="syllabustext">Estimate the direct costs associated with
                                                    producing or delivering the company's products or services</li>
                                                <li class="syllabustext">Identify and project the various operating
                                                    expenses incurred by the company</li>
                                                <li class="syllabustext">Consider any additional sources of income or
                                                    expenses that may impact the company's financial performance</li>
                                                <li class="syllabustext">Analyze and forecast the company's working capital
                                                    needs</li>
                                                <li class="syllabustext">Create a detailed schedule of the company's assets
                                                </li>
                                                <li class="syllabustext">Evaluate and project the company's long-term
                                                    investments</li>
                                                <li class="syllabustext">Analyze the company's long-term borrowing
                                                    activities</li>
                                                <li class="syllabustext">Consider the company's equity structure</li>
                                                <li class="syllabustext">Prepare a comprehensive income statement</li>
                                                <li class="syllabustext">Develop a balance sheet that outlines the
                                                    company's assets, liabilities, and shareholders' equity</li>
                                                <li class="syllabustext">Prepare a cash flow statement</li>
                                                <li class="syllabustext">Determine the value of the company using various
                                                    valuation techniques</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour3" aria-expanded="false"
                                    aria-controls="collapseFour3">
                                    <span class="button-label">Module 7</span>
                                    Power Dashboards
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour3" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Create dynamic and Power dashboards</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingEight">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseEight8" aria-expanded="false"
                                    aria-controls="collapseEight8">
                                    <span class="button-label">Module 8</span>
                                    Introduction To Power BI Desktop
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseEight8" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Overview of Power BI Desktop, Power BI Service,
                                                    and Power BI Mobile</li>
                                                <li class="syllabustext">Data Importing from various data sources like
                                                    Excel, SQL Server, and online services to Power BI</li>
                                                <li class="syllabustext">Data Transformation through Power Query Editor for
                                                    cleaning and transforming data</li>
                                                <li class="syllabustext">Creating a Report with simple dashboards
                                                    visualizations techniques using built-in Power BI features</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingNine">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseNine9" aria-expanded="false"
                                    aria-controls="collapseNine9">
                                    <span class="button-label">Module 9</span>
                                    Creating Financial Models In Power BI
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseNine9" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Financial Data Modeling Techniques using tables,
                                                    relationships, and calculated columns</li>
                                                <li class="syllabustext">Introduction to Data Analysis Expressions (DAX)
                                                    formulas for creating complex calculations and financial metrics</li>
                                                <li class="syllabustext">Scenario and Sensitivity Analysis for various
                                                    financial scenarios and perform sensitivity analysis within Power BI
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingTen">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTen10" aria-expanded="false"
                                    aria-controls="collapseTen10">
                                    <span class="button-label">Module 10</span>
                                    Storytelling of Financial Models Analysis through Power BI
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseTen10" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Creating Charts, Graphs, and custom visuals to
                                                    enhance insights</li>
                                                <li class="syllabustext">Building Advanced visuals like waterfall charts,
                                                    gauge charts, and scatter plots to represent financial data</li>
                                                <li class="syllabustext">Interactivity and Drill-Down techniques to add
                                                    interactivity and dynamic filtering to financial reports</li>
                                                <li class="syllabustext">Storytelling strategies to communicate financial
                                                    insights effectively through dashboards and narratives</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingEleven">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseEleven11" aria-expanded="false"
                                    aria-controls="collapseEleven11">
                                    <span class="button-label">Module 11</span>
                                    Introduction to AI and Machine Learning Visualization in Power BI
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseEleven11" class="accordion-collapse collapse"
                                aria-labelledby="headingEleven" data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Apply 'Forecast' feature to predict future trends
                                                    based on historical data</li>
                                                <li class="syllabustext">Evaluate Anomaly Detection to identify
                                                    discrepancies and outliers in datasets</li>
                                                <li class="syllabustext">Trend Analysis to interpret trends within plotted
                                                    data for better insights</li>
                                                <li class="syllabustext">Exploratory Data Analysis (EDA) for mean, median,
                                                    minimum, maximum, and percentiles on visuals to explore and analyze
                                                    their impact on data</li>
                                                <li class="syllabustext">Regression Models with 'Measures' to predict
                                                    values and derive insights</li>
                                                <li class="syllabustext">Decomposition Tree to break down the dimensions of
                                                    a particular matrix</li>
                                                <li class="syllabustext">Apply in-built machine learning algorithm to
                                                    identify Key Influencer Visual</li>
                                                <li class="syllabustext">Examine data through Q&A visual by writing natural
                                                    language queries and ask questions about your data interactively</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour4" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">BONUS 1</span>
                                    Budget Forecasting
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour4" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Actual v/s Budget comparison</li>
                                                <li class="syllabustext">Variance Analysis</li>
                                                <li class="syllabustext">Linear forecast</li>
                                                <li class="syllabustext">Seasonality forecast</li>
                                                <li class="syllabustext">Forecast sheet</li>
                                                <li class="syllabustext">Dynamic v/s static reports</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour5" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">BONUS 2</span>
                                    Data Handling with Macros
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour5" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Create a macro for Sales Summary - sort and
                                                    subtotal</li>
                                                <li class="syllabustext">Create a macro for posting records - locked cell
                                                    and sheet protection</li>
                                                <li class="syllabustext">Add records in database - use relative references
                                                </li>
                                                <li class="syllabustext">Edit a macro for password protection</li>
                                                <li class="syllabustext">Bulk record postings</li>
                                                <li class="syllabustext">Fetch records from different database - Advanced
                                                    filter with macro</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour6" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">BONUS 3</span>
                                    Inventory Model
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour6" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Inventory Inwards and Outwards Setup</li>
                                                <li class="syllabustext">Picture lookup for items display</li>
                                                <li class="syllabustext">Locations for Available Stock</li>
                                                <li class="syllabustext">Automate Dispatch program</li>
                                                <li class="syllabustext">Stock Summary</li>
                                                <li class="syllabustext">Navigation Tabs</li>
                                                <li class="syllabustext">Object-oriented Dashboard</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item wow fadeInUp">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour7" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">BONUS 4</span>
                                    Interview Model
                                    <i class="fas fa-angle-down"></i>
                                </button>
                            </div>
                            <div id="collapseFour7" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <ul>
                                                <li class="syllabustext">Database – Questions with MCQs</li>
                                                <li class="syllabustext">Record a Macro</li>
                                                <ul>
                                                    <li class="syllabustext">To Start Interview</li>
                                                    <li class="syllabustext">To Lock Answer</li>
                                                    <li class="syllabustext">To Next Question</li>
                                                    <li class="syllabustext">To Stop Interview and Save Statistics</li>
                                                </ul>
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
                <div class="col-md-6 col-lg process-inner1 order-2 order-lg-1">
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="process-title">Build Financial Models and Valuations interactive Dashboards with MS
                                Excel and Power BI</p>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="process-title">Predict and Analyze Trends using Power BI's Machine Learning
                                techniques to forecast and detect anomalies in financial models</p>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <p class="process-title">Deliver Strategic Insights by crafting concise presentations that turn
                                complex data into actionable business strategies for business leaders</p>
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
                        style="visibility: visible; animation-delay: 0.3s; animation-name: ;">
                        <!--<span class="sec-subtitle">IDEAL TUTOR FOR EVERYONE</span>-->
                        <h5 class="border-title2">Salient Features</h5>
                    </div>
                </div>
            </div>
            <div class="row -animated" data--delay="0.4s"
                style="visibility: visible; animation-delay: 0.4s; animation-name: ;">
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-1.svg"
                                alt="icon"></div>
                        <p>Build a Strong Foundation in Financial Modeling</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg"
                                alt="icon"></div>
                        <p>Create Accurate Financial Valuations</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-4.svg"
                                alt="icon"></div>
                        <p>Leverage Advanced Power BI Visualizations</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-5.svg"
                                alt="icon"></div>
                        <p>Integrate Machine Learning Models</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg"
                                alt="icon"></div>
                        <p>Real-World Business Valuation</p>
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
                                    <p class="fs-md process-title">Accounting</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">Finance Team</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">Finance/Business Analysts</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
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
                                    <p class="fs-md process-title">Data Analysts</p>
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
            <div class="row ">
                <h5 class="border-title2 pb-3">Trainer Profile</h5>

                <div class="col-lg-6" style="padding:0">
                    <div class="title-area mb-4">
                        <h5 class="sec-title mb-3 mb-lg-4" style="font-size: 30px;">Financial Modeling:</h5>
                        <p class="about-text pe-xl-5 me-xl-3 fs-md">Tanweer Bukhsh is a Masters degree holder in Economics
                            from Karachi University. He is currently serving as GM Finance at Richko Group and is a visiting
                            faculty member at YouExcel. He has vast practical experience of working in the equity market,
                            which has enabled him to apply tools and techniques in Financial Modeling and Analysis training.
                            He is passionate about sharing his practical experience of over 19 years in the industry with
                            his students to help them learn from real-life case studies.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-box3 mb-30">
                        <div class="img-1 mega-hover"><img class="" src="{{ asset('img/trainer/tanweer.png') }}"
                                alt="About Img" style="width: 502px; border-radius: 50px;"></div>
                        <div class="shape-dotted jump"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-3">
        <div class="container">
            <div class="row">
                {{-- <div class="col-xl-12">
                    <h5 class="border-title2 ">Trainer Profile</h5>
                </div> --}}
                <div class="col-lg-6" style="padding:0">
                    <div class="title-area mb-4">

                        <h5 class="sec-title mb-3 mb-lg-4" style="font-size: 30px;">Power BI:</h5>
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
    {{-- slider content start --}}
    <section class="space-top space-extra-bottom">
        <div class="container-lg">
            <div class="title-area text-center wow fadeInUp" data-wow-delay="0.3s">
                <h2 class="sec-title">Financial Modeling Previews</h2>
            </div>
            <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.4s" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="2" data-center-mode="true" data-dots="true">
                
                <!-- First Slide -->
                <div class="col-sm-6 col-xl-4">
                    <div style="position: relative; overflow: hidden; border-radius: 20px 20px 0 0; height: 314px;">
                        <a href="">
                            <img class="w-100 custom-img-size" src="{{ asset('img/Yourexcel-img/fm1.PNG') }}" alt="Course Img" 
                                 style="pointer-events: none; object-fit: cover; width: 100%; height: 100%; opacity: 1;">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div style="position: relative; overflow: hidden; border-radius: 20px 20px 0 0; height: 314px;">
                        <a href="">
                            <img class="w-100" src="{{ asset('img/Yourexcel-img/fm2.PNG') }}" alt="Course Img" 
                                 style="pointer-events: none; object-fit: cover; width: 100%; height: 100%;">
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-4">
                    <div style="position: relative; overflow: hidden; border-radius: 20px 20px 0 0; height: 314px;">
                        <a href="">
                            <img class="w-100 custom-img-size" src="{{ asset('img/Yourexcel-img/fm3.PNG') }}" alt="Course Img" 
                                 style="pointer-events: none; object-fit: cover; width: 100%; height: 100%; opacity: 1;">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div style="position: relative; overflow: hidden; border-radius: 20px 20px 0 0; height: 314px;">
                        <a href="">
                            <img class="w-100" src="{{ asset('img/Yourexcel-img/fm4.PNG') }}" alt="Course Img" 
                                 style="pointer-events: none; object-fit: cover; width: 100%; height: 100%;">
                        </a>
                    </div>
                </div>
                
                 {{-- <div class="course-style1 has-border" style="pointer-events: none; position: relative; overflow: hidden; border-radius: 20px 20px 0 0; height: 314px;">
                        <!-- Disable hover effect -->
                        <div class="course-img" style="position: relative; overflow: hidden;">
                            <a href="">
                                <img class="w-100 custom-img-size" src="{{ asset('img/Yourexcel-img/fm3.PNG') }}" alt="Course Img" 
                                     style="pointer-events: none; object-fit: contain; width: 100%; height: 100%; opacity: 1;">
                            </a>
                        </div>
                    </div> --}}
                
                <!-- Second Slide -->
                {{-- <div class="col-sm-6 col-xl-4">
                    <div class="course-style1 has-border" style="pointer-events: none;"> <!-- Disable hover effect -->
                        <div class="course-img">
                            <a href="">
                                <img class="w-100 custom-img-size" src="{{ asset('img/Yourexcel-img/fm2.PNG') }}" alt="Course Img" style="pointer-events: none;">
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Third Slide -->
                <div class="col-sm-6 col-xl-4">
                    <div class="course-style1 has-border" style="pointer-events: none; "> <!-- Disable hover effect -->
                        <div class="course-img">
                            <a href="">
                                <img class="w-100 custom-img-size" src="{{ asset('img/Yourexcel-img/fm3.PNG') }}" alt="Course Img" style="pointer-events: none;">
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Fourth Slide -->
                <div class="col-sm-6 col-xl-4">
                    <div class="course-style1 has-border" style="pointer-events: none;"> <!-- Disable hover effect -->
                        <div class="course-img">
                            <a href="">
                                <img class="w-100 custom-img-size" src="{{ asset('img/Yourexcel-img/fm4.PNG') }}" alt="Course Img" style="pointer-events: none;">
                            </a>
                        </div>
                    </div>
                </div> --}}
    
            </div>
        </div>
    </section>
    
    
    
    
    {{-- slider content end --}}



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
                        <a href="../Registration-Form/Financial Modeling and Analysis" class="vs-btn style2"><i
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
