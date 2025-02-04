@extends('website.app', ['title' => 'Data Science and Analytics '])

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Data Science & Analytics (Excel, Power BI, Tableau, Python, SQL, R, Machine
                    Learning, GitHub, Deployment) : Harness the Power of Data: Excel to R from the Ultimate Data Toolkit
                </h1>
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
    <section class="course-details pt-3 pb-5">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-4">
                    <div class="course-meta-box wow fadeInUp ">
                        <table>
                            <tbody>
                                <tr class=" mb-4">

                                    <td> <img src="https://youexceltraining.com/img/Yourexcel-img/dsci.jpg" /> </td>
                                </tr>

                                <tr>
                                    <td><i class="far fa-hourglass"></i> Duration: &nbsp; 60 hours</td>
                                </tr>
                                <tr style="padding-top: 8px;">
                                    <td>
                                        <i class="far fa-suitcase"></i>Difficulty Level: &nbsp; Beginners to Intermediate
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
                        <a href="https://youexceltraining.com/enquiry-form/data-science" class="vs-btn">Enquire
                            Now</a><br /><br />
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-category wow fadeInUp ">
                        <a href="#">Get Started Learning with </a>
                    </div>
                    <h2 class="course-title animate__animated animate__bounceInDown">Data Science & Analytics (Excel, Power
                        BI, Tableau, Python, SQL, R, Machine Learning, GitHub, Deployment) </h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                    </div>
                    <div class="mb-3">
                        <img src="https://youexceltraining.com/img/Yourexcel-img/dscib.jpg" />
                    </div>
                    <h5 class="border-title2 wow fadeInUp">Program Overview</h5>
<p class="wow fadeInDown pb-3">
    This training equips aspiring data professionals with hands-on skills in MS Excel, MS Power BI, Tableau, Python, SQL, R Language, and Machine Learning Model to transform, analyze, and visualize data to extract trends and insights. Focused on real-world applications and projects, it prepares you for data science, upskilling, or machine learning deployment in a data-driven world.
</p>

                    <h5 class="border-title2 wow fadeInUp ">Training Outline</h5>
                </div>
                <div class="col-lg-12">

                    <div class="accordion accordion-style4" id="accordionExample">

                        <div class="accordion-item wow fadeInUp">
    <div class="accordion-header d-flex" id="headingOne">
        <button class="accordion-button justify-content-between" type="button"
            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
            aria-controls="collapseOne">
            <span class="button-label">Module 1</span>
            Introduction to Data Science
            <i class="fas fa-angle-down"></i>
        </button>
    </div>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
        data-bs-parent="accordionExample">
        <div class="accordion-body wow fadeInDown">
            <div class="syllabus-list">
                <div class="syllabus-content">
                    <li class="syllabustext">Definition and importance</li>
                    <li class="syllabustext">Data science workflow</li>
                    <li class="syllabustext">Applications in various industries</li>
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
            Data Analysis with Excel
            <i class="fas fa-angle-down"></i>
        </button>
    </div>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-bs-parent="accordionExample">
        <div class="accordion-body wow fadeInUp">
            <div class="syllabus-list">
                <div class="syllabus-content">
                    <li class="syllabustext">Advanced Excel functions and formulas</li>
                    <li class="syllabustext">Data cleaning and preparation in MS Excel</li>
                    <li class="syllabustext">PivotTables and Pivot Charts</li>
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
            <span class="button-label">Module 3</span>
            Data Visualization with Power BI
            <i class="fas fa-angle-down"></i>
        </button>
    </div>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
        data-bs-parent="accordionExample">
        <div class="accordion-body wow fadeInUp">
            <div class="syllabus-list">
                <div class="syllabus-content">
                    <li class="syllabustext">Overview of Power BI interface</li>
                    <li class="syllabustext">Connecting to data sources</li>
                    <li class="syllabustext">Creating and customizing visualizations</li>
                    <li class="syllabustext">Building interactive dashboards</li>
                    <li class="syllabustext">Sharing and publishing reports</li>
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
            Power BI with Tools
            <i class="fas fa-angle-down"></i>
        </button>
    </div>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
        data-bs-parent="accordionExample">
        <div class="accordion-body wow fadeInDown">
            <div class="syllabus-list">
                <div class="syllabus-content">
                    <li class="syllabustext">Power Query advanced applications</li>
                    <li class="syllabustext">Data modeling with Power Pivot</li>
                    <li class="syllabustext">DAX for data analysis</li>
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
            <span class="button-label">Module 5</span>
            Advanced Data Visualization with Tableau
            <i class="fas fa-angle-down"></i>
        </button>
    </div>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
        data-bs-parent="accordionExample">
        <div class="accordion-body wow fadeInDown">
            <div class="syllabus-list">
                <div class="syllabus-content">
                    <li class="syllabustext">Getting started with Tableau</li>
                    <li class="syllabustext">Data connections and preparation</li>
                    <li class="syllabustext">Creating advanced visualizations</li>
                    <li class="syllabustext">Dashboard design best practices</li>
                    <li class="syllabustext">Storytelling with data</li>
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
            <span class="button-label">Module 6</span>
            Fundamentals of Python Programming
            <i class="fas fa-angle-down"></i>
        </button>
    </div>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
        data-bs-parent="accordionExample">
        <div class="accordion-body wow fadeInDown">
            <div class="syllabus-list">
                <div class="syllabus-content">
                    <li class="syllabustext">Python programming basics (Clarity of What, Why, and How)</li>
                    <li class="syllabustext">Input, Output Concepts</li>
                    <li class="syllabustext">Variables, Loops Concepts</li>
                    <li class="syllabustext">Functions, Packages, Modules Concepts</li>
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
            <span class="button-label">Module 7</span>
            Programming for Data Science with Python
            <i class="fas fa-angle-down"></i>
        </button>
    </div>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
        data-bs-parent="accordionExample">
        <div class="accordion-body wow fadeInDown">
            <div class="syllabus-list">
                <div class="syllabus-content">
                    <li class="syllabustext">Key libraries (NumPy, pandas, matplotlib, seaborn, markdown)</li>
                    <li class="syllabustext">Data manipulation and analysis</li>
                    <li class="syllabustext">End-to-End Data Analysis Project</li>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="accordion-item wow fadeInUp">
    <div class="accordion-header d-flex" id="headingEightA">
        <button class="accordion-button justify-content-between" type="button"
            data-bs-toggle="collapse" data-bs-target="#collapseEightA" aria-expanded="false"
            aria-controls="collapseEightA">
            <span class="button-label">Module 8A</span>
            Foundation of SQL and Databases
            <i class="fas fa-angle-down"></i>
        </button>
    </div>
    <div id="collapseEightA" class="accordion-collapse collapse" aria-labelledby="headingEightA"
        data-bs-parent="accordionExample">
        <div class="accordion-body wow fadeInDown">
            <div class="syllabus-list">
                <div class="syllabus-content">
                    <li class="syllabustext">What is SQL and why is it used?</li>
                    <li class="syllabustext">Flavors of SQL</li>
                    <li class="syllabustext">Tables, rows, and columns</li>
                    <li class="syllabustext">Concept of ERD (Entity Relationship Diagram)</li>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="accordion-item wow fadeInUp">
    <div class="accordion-header d-flex" id="headingEightB">
        <button class="accordion-button justify-content-between" type="button"
            data-bs-toggle="collapse" data-bs-target="#collapseEightB" aria-expanded="false"
            aria-controls="collapseEightB">
            <span class="button-label">Module 8B</span>
            Statements, Functions, and Analysis using SQL
            <i class="fas fa-angle-down"></i>
        </button>
    </div>
    <div id="collapseEightB" class="accordion-collapse collapse" aria-labelledby="headingEightB"
        data-bs-parent="accordionExample">
        <div class="accordion-body wow fadeInDown">
            <div class="syllabus-list">
                <div class="syllabus-content">
                    <li class="syllabustext">Syntax Familiarity of Select Statements and Techniques of Ordering and Filtering Results</li>
                    <li class="syllabustext">Using WHERE clause</li>
                    <li class="syllabustext">Sum, Count, Min, Max, Data Types, Functions, and Calculations</li>
                    <li class="syllabustext">SQL for Data Analytics (Project-based Learning)</li>
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
            <span class="button-label">Module 9</span>
            Data Analysis and Visualization with R
            <i class="fas fa-angle-down"></i>
        </button>
    </div>
    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
        data-bs-parent="accordionExample">
        <div class="accordion-body wow fadeInDown">
            <div class="syllabus-list">
                <div class="syllabus-content">
                    <li class="syllabustext">Introduction to R programming</li>
                    <li class="syllabustext">Data manipulation with dplyr</li>
                    <li class="syllabustext">Data visualization with ggplot2</li>
                    <li class="syllabustext">Statistical analysis and modeling</li>
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
            <span class="button-label">Module 10</span>
            Introduction to Machine Learning
            <i class="fas fa-angle-down"></i>
        </button>
    </div>
    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
        data-bs-parent="accordionExample">
        <div class="accordion-body wow fadeInDown">
            <div class="syllabus-list">
                <div class="syllabus-content">
                    <li class="syllabustext">Definition, scope, and key concepts</li>
                    <li class="syllabustext">Real-world examples of ML applications</li>
                    <li class="syllabustext">Comparison with traditional programming</li>
                    <li class="syllabustext">Supervised, unsupervised, and reinforcement learning</li>
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
            <span class="button-label">Module 11</span>
            Executable Machine Learning / ML Model Development
            <i class="fas fa-angle-down"></i>
        </button>
    </div>
    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
        data-bs-parent="accordionExample">
        <div class="accordion-body wow fadeInDown">
            <div class="syllabus-list">
                <div class="syllabus-content">
                    <li class="syllabustext">Importance of reproducibility in ML projects</li>
                    <li class="syllabustext">Introduction to tools like Jupyter Notebook, Google Colab, or IDEs (e.g., PyCharm)</li>
                    <li class="syllabustext">Data Preprocessing and Feature Engineering</li>
                    <li class="syllabustext">Importing datasets using libraries like Pandas</li>
                    <li class="syllabustext">Cleaning and preprocessing data: Handling missing values, scaling, encoding categorical variables</li>
                    <li class="syllabustext">Feature selection and engineering techniques</li>
                    <li class="syllabustext">Train-test split and cross-validation setup</li>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="accordion-item wow fadeInUp">
    <div class="accordion-header d-flex" id="headingTwelveA">
        <button class="accordion-button justify-content-between" type="button"
            data-bs-toggle="collapse" data-bs-target="#collapseTwelveA" aria-expanded="false"
            aria-controls="collapseTwelveA">
            <span class="button-label">Module 12a</span>
            Machine Learning and CI/CD Pipeline for Deployment
            <i class="fas fa-angle-down"></i>
        </button>
    </div>
    <div id="collapseTwelveA" class="accordion-collapse collapse" aria-labelledby="headingTwelveA"
        data-bs-parent="accordionExample">
        <div class="accordion-body wow fadeInDown">
            <div class="syllabus-list">
                <div class="syllabus-content">
                    <li class="syllabustext">Continuous Integration: Automating the testing and integration of code</li>
                    <li class="syllabustext">Continuous Deployment: Automating the deployment process</li>
                    <li class="syllabustext">Overview of Git for version control:</li>
                    <ul>
                        <li class="syllabustext">Repositories, commits, branches, and pull requests</li>
                        <li class="syllabustext">Setting up a GitHub repository for ML projects</li>
                        <li class="syllabustext">Collaborating on code and managing updates in ML workflow</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="accordion-item wow fadeInUp">
    <div class="accordion-header d-flex" id="headingTwelveB">
        <button class="accordion-button justify-content-between" type="button"
            data-bs-toggle="collapse" data-bs-target="#collapseTwelveB" aria-expanded="false"
            aria-controls="collapseTwelveB">
            <span class="button-label">Module 12b</span>
            Deployment of ML Models (2025 Update)
            <i class="fas fa-angle-down"></i>
        </button>
    </div>
    <div id="collapseTwelveB" class="accordion-collapse collapse" aria-labelledby="headingTwelveB"
        data-bs-parent="accordionExample">
        <div class="accordion-body wow fadeInDown">
            <div class="syllabus-list">
                <div class="syllabus-content">
                    <li class="syllabustext">On-Premises Deployment: Running the model locally using Flask/Streamlit.</li>
                    <li class="syllabustext">Serverless platform for ML-based application Deployment</li>
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
                            <h6 class="process-title">Create Impactful Visualizations using advanced data analysis and cleaning with Excel, Power BI, and SQL.</h6>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <h6 class="process-title">Gain skills in Python for data manipulation and analysis using popular libraries like Pandas, NumPy, Matplotlib, and Seaborn for data science projects.</h6>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <h6 class="process-title">Design and interact with relational databases using SQL queries for data analysis and decision-making.</h6>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <h6 class="process-title">Learn the fundamentals of machine learning, including supervised, unsupervised, and reinforcement learning.</h6>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <h6 class="process-title">Deploy machine learning applications using Flask, Streamlit, or serverless platforms.</h6>
                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <h6 class="process-title">Gain practical experience by completing hands-on projects in data analysis, visualization, and machine learning.</h6>
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
                        style="visibility: visible; animation-delay: 0.3s; animation-name:;">
                        <h5 class="border-title2">Salient Features</h5>
                    </div>
                </div>
            </div>
            <div class="row -animated" data--delay="0.4s"
                style="visibility: visible; animation-delay: 0.4s; animation-name:;">
                
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="media-icon">
                            <img src="https://youexceltraining.com/img/icon/training-icon-1-1.svg" alt="icon">
                        </div>
                        <h5 class="media-title">Full-Stack Data Science Training</h5>
                        <p>Covers data wrangling, visualization, SQL queries, Python libraries, and R programming.</p>
                    </div>
                </div>
    
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="media-icon">
                            <img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon">
                        </div>
                        <h5 class="media-title">Advanced Data Processing</h5>
                        <p>Includes Power Query, DAX, feature engineering, and data modeling for optimized analytics.</p>
                    </div>
                </div>
    
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="media-icon">
                            <img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon">
                        </div>
                        <h5 class="media-title">ML & AI Integration</h5>
                        <p>Covers supervised and unsupervised learning, ML pipelines, and AI-driven analytics.</p>
                    </div>
                </div>
    
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="media-icon">
                            <img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon">
                        </div>
                        <h5 class="media-title">Real-World Applications</h5>
                        <p>Hands-on projects in data analytics, dashboarding, and ML workflows, ensuring industry-relevant expertise.</p>
                    </div>
                </div>
    
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="media-icon">
                            <img src="https://youexceltraining.com/img/icon/training-icon-1-1.svg" alt="icon">
                        </div>
                        <h5 class="media-title">Programming with Python</h5>
                        <p>Master data analysis, automation, and machine learning using Python.</p>
                    </div>
                </div>
    
                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="media-icon">
                            <img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon">
                        </div>
                        <h5 class="media-title">R Programming Proficiency</h5>
                        <p>Perform statistical analysis and data visualization using R and its libraries.</p>
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
                    {{-- <div class="row gx-80 align-items-center"> --}}
                        <div class="col-sm-6 col-xl-4">
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">Business & Finance Professionals</P>
                                </div>
                            </div>

                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">IT & Software Professionals</P>
                                </div>
                            </div>

                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title"> Aspiring Students & Job Seekers seeking to a carer as Data Analysts & Scientists</P>
                                </div>
                            </div>




                        </div>
                        {{-- <div class="col-sm-6 col-xl-4">




                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title"> Data Visualization Specialist </p>
                                </div>
                            </div>
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title"> Business Intelligence Analyst </p>
                                </div>
                            </div>









                        </div> --}}

                    </div>
                </div>
    </section>
    {{-- <section class="pb-3">
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
                                <p class="fs-md process-title "> Basic understanding of programming concepts</p>
                                <p class="fs-md process-title "> Familiarity with statistics and mathematics</p>
                                <p class="fs-md process-title ">Experience with data handling and analysis is beneficial
                                    but not required</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="pb-3">
        <div class="container">
            <div class="row gx-80 align-items-center">
                <div class="col-xl-12">
                    <h5 class="border-title2 pb-2">Pre-Requisite</h5>
                </div>
                <div class="col-xl-12">
                    <div class="title-area mb-4">
                        <div class="process-style1 d-flex align-items-center">
                            <span class="process-number"><i class="fas fa-circle"></i></span>
                            <div class="process-content">
                                <p class="fs-md process-title ">Basic computer literacy</p>
                            </div>
                        </div>
                    </div>

                    <div class="title-area mb-4">
                        <div class="process-style1 d-flex align-items-center">
                            <span class="process-number"><i class="fas fa-circle"></i></span>
                            <div class="process-content">
                                <p class="fs-md process-title ">familiarity with Windows operating system</p>
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

                        <h5 class="sec-title mb-3 mb-lg-4" style="font-size: 30px;"> M. Rafay Shaikh</h5>
                        <p class="fs-md about-text pe-xl-5 me-xl-3">
                            M. Rafay Shaikh’s technical expertise includes Data Science, Power BI, PySpark, Python,
                            Photoshop, Computer Vision, Machine Learning, Web Development, and Azure DevOps. He has led
                            projects like a Book Recommender System, an NLP-based medical diary, and Lungs Cancer Detection
                            using CNN. He holds an MS in Software Engineering and a BS in Software Engineering from Sir Syed
                            University
                            Rafay Shaikh is a skilled Lecturer at Sir Syed University of Engineering and Technology, where
                            he teaches Web Engineering and Introduction to Computing. He also coordinates the departmental
                            CMS, oversees the AI Lab, and advises the IEEE Computational Society at SSUET. Rafay was
                            recognized with 2nd place in the Faculty Training Program by Sindh HEC.

                        </p>
                        <br>
                        <br><br>
                        <p class="fs-md about-text pe-xl-5 me-xl-3">
                            Rafay has also held leadership roles in IEEE Karachi Section, organizing numerous events and
                            sessions. He is the Founding Advisor of the IEEE Computational Intelligence Society at SSUET.
                        </p>
                        <p class="fs-md about-text pe-xl-5 me-xl-3">Previously, Rafay was an IT Support Engineer at Dumb
                            TV, managing websites, domains, servers, and social media. </p>
                    </div>

                </div>
                <div class="col-lg-6" style="padding:0">
                    <div class="img-box3 mb-30">
                        <div class="img-1 mega-hover"><img class=""
                                src="https://youexceltraining.com/img/Yourexcel-img/Rafay.jpg" alt="About Img"
                                style="
             width: 502px;
             border-radius: 50px;
         "></div>
                        <div class="shape-dotted jump"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" style="padding:0">
                    <h5>Value Added Services</h5>
                    <div class="list-style1 vs-list mb-30">
                        <ul>
                            <li>Lifetime video recorded sessions with personalized Learning Management System (LMS) access login ID for months.</li>
                            <li>Lifetime WhatsApp post-training support.</li>
                            <li>100% job and business-oriented training.</li>
                            <li>Certificate of completion recognized from Trade Testing Board, Government of Pakistan.</li>
                            <li>Fully equipped training center venue for on-campus trainings, readily available with laptops, projectors, and air-conditioning.</li>
                            <li>Live physical on-campus and online sessions facility.</li>
                            <li>Claim Continuing Professional Development (CPD) hours for the training.</li>
                        </ul>
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

                    <h2 class=" pt-1  text-white">Become smarter in just 60 hours </h2>
                    <!--<p class=" pt-1 fs-md text-white">Enter your email id to get latest updates and  amazing discounts</p>-->
                    <br>

                </div>
            </div>
            <div class="row gx-100 gy-4 pb-5 justify-content-md-center ">

                <div class="col-lg-10 col-xl-10 col-xxl-10 pb-5 ">

                    <form class="newsletter-form d-flex flex-row justify-content-center align-items-center">
                        <a href="../Registration-Form/data-science" class="vs-btn style2"><i
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
