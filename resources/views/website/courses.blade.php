@extends('website.app')

@section('title', 'Power bi Course & Certification in Karachi | Python & SQL')
@section('meta_description', 'Enroll in our Power BI Course in Karachi, SQL, Python certification, and Big Data Analytics courses. Get certified in Python, Power BI, and more')
@section('meta_keywords', 'power bi course in karachi, power bi certification karachi, sql course in karachi, big data analytics course in karachi, python certification course, python course in karachi')


@section('content')
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper ">
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Our Training Program Offerings in a Snapshot</h1>
                <!--<p class="breadcumb-text">Training Program Offerings in a snapshot</p>-->
               
            </div>
        </div>
    </div> <!--==============================
      Course Area
  ==============================-->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
               
                <div class="col-sm-6 col-xl-4">
                    <div class="course-style1 has-border">
                        <div class="course-img" onclick="window.open('courses/excel-mastery');">
                            <a href="excel-mastery"><img class="w-100" src="https://youexceltraining.com/img/Yourexcel-img/Excelmastery.jpg" alt="Course Img"></a>
                            
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="vs-btn style2 popup-video"><i class="fas fa-play"></i>Preview Course</a>
                        </div>
                        <div class="course-content">
                            <div class="course-top">
                                <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>(4.0)</div>
                                
                            </div>
                            <h3 class="h5 course-name"><a href="courses/excel-mastery" class="text-inherit">Microsoft Excel Mastery</a></h3>
                       
                        </div>
                        <div class="course-meta">
                            <span><i class="fal fa-users"></i>670 Students</span>
                            <span><i class="fal fa-clock"></i>12h</span>
                            
                        </div>
                           <div class=" my-3">
                              <a href="enquiry-form/excel-mastery" class="vs-btn style4 py-3 me-3">Enquire Now</a>
                             <a href="courses/excel-mastery"  class="vs-btn style4 py-3 "> Learn More </a>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-6 col-xl-4">
                    <div class="course-style1 has-border" onclick="window.open('courses/advanced-excel');">
                        <div class="course-img">
                            <a href="advanced-excel"><img class="w-100" src="https://youexceltraining.com/img/Yourexcel-img/advancedExcel.jpg" alt="Course Img"></a>
                            <div class="course-category"><a href="course.html">ADVANCE LEARNING</a></div>
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="vs-btn style2 popup-video"><i class="fas fa-play"></i>Preview Course</a>
                        </div>
                        <div class="course-content">
                            <div class="course-top">
                                <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>(4.5)</div>
                             
                            </div>
                            <h3 class="h5 course-name"><a href="courses/advanced-excel" class="text-inherit">Advanced MS Excel: Business Intelligence with Data Visualization</a></h3>
                         
                        </div>
                        <div class="course-meta">
                            <span><i class="fal fa-users"></i>880 Students</span>
                            <span><i class="fal fa-clock"></i>24h</span>
                         
                        </div>
                          <div class=" my-3">
                              <a href="enquiry-form/advanced-excel" class="vs-btn style4 py-3 me-3">Enquire Now</a>
                             <a href="courses/advanced-excel" class="vs-btn style4 py-3 "> Learn More </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-xl-4">
                    <div class="course-style1 has-border" onclick="window.open('courses/dashboard-reporting-powerbi-analysis');">
                        <div class="course-img">
                            <a href="dashboard-reporting-powerbi-analysis"><img class="w-100" src="https://youexceltraining.com/img/Yourexcel-img/powerBI.jpg" alt="Course Img"></a>
                        
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="vs-btn style2 popup-video"><i class="fas fa-play"></i>Preview Course</a>
                        </div>

                        <div class="course-content">
                            <div class="course-top">
                                <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>(5.0)</div>
                               
                            </div>
                            <h3 class="h5 course-name"><a href="{{url("courses/dashboard-reporting-powerbi-analysis")}}" class="text-inherit">Dashboard Reporting & Analysis with Power BI</a></h3>
                    
                        </div>

                        <div class="course-meta">
                            <span><i class="fal fa-users"></i>950 Students</span>
                            <span><i class="fal fa-clock"></i>48h</span>
                           
                        </div>
                          <div class=" my-3">
                              <a href="{{url("enquiry-form/dashboard-reporting-powerbi-analysis")}}" class="vs-btn style4 py-3 me-3">Enquire Now</a>
                             <a href="{{url("courses/dashboard-reporting-powerbi-analysis")}}"  class="vs-btn style4 py-3 "> Learn More </a>
                        </div>
                    </div>
                </div>
                <!--sql-->
                <div class="col-sm-6 col-xl-4">
                    <div class="course-style1 has-border" onclick="window.open('courses/sql-analytics');">
                        <div class="course-img">
                            <a href="sql-analytics"><img class="w-100" src="https://youexceltraining.com/img/Yourexcel-img/sql.jpg" alt="Course Img"></a>
                        
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="vs-btn style2 popup-video"><i class="fas fa-play"></i>Preview Course</a>
                        </div>
                        <div class="course-content">
                            <div class="course-top">
                                <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>(3.0)</div>
                         
                            </div>
                            <h3 class="h5 course-name"><a href="courses/sql-analytics"> Data Analytics with SQL</a></h3>
                      
                        </div>
                        <div class="course-meta">
                            <span><i class="fal fa-users"></i>230 Students</span>
                            <span><i class="fal fa-clock"></i>24h </span>
                           
                        </div>
                          <div class=" my-3">
                              <a href="enquiry-form/sql-analytics" class="vs-btn style4 py-3 me-3">Enquire Now</a>
                             <a href="courses/sql-analytics" class="vs-btn style4 py-3 "> Learn More </a>
                        </div>
                    </div>
                </div>
                <!--python-->
                <div class="col-sm-6 col-xl-4">
                    <div class="course-style1 has-border" onclick="window.open('courses/python-data-analysis');">
                        <div class="course-img">
                            <a href="python-data-analysis"><img class="w-100" src="https://youexceltraining.com/img/Yourexcel-img/python.jpg" alt="Course Img"></a>
                        
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="vs-btn style2 popup-video"><i class="fas fa-play"></i>Preview Course</a>
                        </div>
                        <div class="course-content">
                            <div class="course-top">
                                <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>(3.5)</div>
                         
                            </div>
                            <h3 class="h5 course-name"><a href="courses/python-data-analysis" class="text-inherit">	Python Programming for Data Analysis </a></h3>
                            
                        </div>
                        <div class="course-meta">
                            <span><i class="fal fa-users"></i>255 Students</span>
                            <span><i class="fal fa-clock"></i>24h</span>
                        </div>
                          <div class=" my-3">
                              <a href="enquiry-form/python-data-analysis" class="vs-btn style4 py-3 me-3">Enquire Now</a>
                             <a  href="courses/python-data-analysis" class="vs-btn style4 py-3 "> Learn More </a>
                        </div>
                    </div>
                </div>
                 <!--Financial-->
                <div class="col-sm-6 col-xl-4">
                    <div class="course-style1 has-border" onclick="window.open('courses/financial-modeling');">
                        <div class="course-img">
                            <a href="financial-modeling"><img class="w-100" src="https://youexceltraining.com/img/Yourexcel-img/fma.jpg" alt="Course Img"></a>
                   
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="vs-btn style2 popup-video"><i class="fas fa-play"></i>Preview Course</a>
                        </div>
                        <div class="course-content">
                            <div class="course-top">
                                <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>(4.5)</div>
                              
                            </div>
                            <h3 class="h5 course-name"><a href="courses/financial-modeling" class="text-inherit">Financial Modeling & Analysis Fundamental</a></h3>
                           
                        </div>
                        <div class="course-meta">
                            <span><i class="fal fa-users"></i>1890 Students</span>
                            <span><i class="fal fa-clock">24h</i></span>  
                            </div>
                              <div class=" my-3">
                              <a href="enquiry-form/financial-modeling" class="vs-btn style4 py-3 me-3">Enquire Now</a>
                             <a  href="courses/financial-modeling" class="vs-btn style4 py-3 "> Learn More </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-4">
                    <div class="course-style1 has-border" onclick="window.open('courses/financial-modeling-self');">
                        <div class="course-img">
                            <a href="financial-modeling"><img class="w-100" src="https://youexceltraining.com/img/Yourexcel-img/fma.jpg" alt="Course Img"></a>
                   
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="vs-btn style2 popup-video"><i class="fas fa-play"></i>Preview Course</a>
                        </div>
                        <div class="course-content">
                            <div class="course-top">
                                <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>(4.5)</div>
                              
                            </div>
                            <h3 class="h5 course-name"><a href="courses/financial-modeling-self" class="text-inherit">Financial Modeling Self</a></h3>
                           
                        </div>
                        <div class="course-meta">
                            <span><i class="fal fa-users"></i>1890 Students</span>
                            <span><i class="fal fa-clock">24h</i></span>  
                            </div>
                              <div class=" my-3">
                              <a href="enquiry-form/financial-modeling-self" class="vs-btn style4 py-3 me-3">Enquire Now</a>
                             <a  href="courses/financial-modeling-self" class="vs-btn style4 py-3 "> Learn More </a>
                        </div>
                    </div>
                </div>
                
                 <div class="col-sm-6 col-xl-4">
                    <div class="course-style1 has-border">
                        <div class="course-img" onclick="window.open('courses/e-dukaan-specialist');">
                            <a href="excel-mastery"><img class="w-100" src="https://youexceltraining.com/img/Yourexcel-img/eduqan.jpeg" alt="Course Img"></a>
                            
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="vs-btn style2 popup-video"><i class="fas fa-play"></i>Preview Course</a>
                        </div>
                        <div class="course-content">
                            <div class="course-top">
                                <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>(5.0)</div>
                                
                            </div>
                            <h3 class="h5 course-name"><a href="courses/e-dukaan-specialist" class="text-inherit">E-Dukaan Specialist</a></h3>
                       
                        </div>
                        <div class="course-meta">
                            <span><i class="fal fa-users"></i>1751 Students</span>
                            <span><i class="fal fa-clock"></i>48h</span>
                            
                        </div>
                           <div class=" my-3">
                              <a href="enquiry-form/e-dukaan-specialist" class="vs-btn style4 py-3 me-3">Enquire Now</a>
                             <a href="courses/e-dukaan-specialist"  class="vs-btn style4 py-3 "> Learn More </a>
                        </div>
                    </div>
                </div>
                <!--Tax-->
                <div class="col-sm-6 col-xl-4">
                    <div class="course-style1 has-border" onclick="window.open('courses/tax-management');">
                        <div class="course-img">
                            <a href="tax-management"><img class="w-100" src="https://youexceltraining.com/img/Yourexcel-img/tax.jpg" alt="Course Img"></a>
                            
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="vs-btn style2 popup-video"><i class="fas fa-play"></i>Preview Course</a>
                        </div>
                        <div class="course-content">
                            <div class="course-top">
                                <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>(4.0)</div>
                        
                            </div>
                            <h3 class="h5 course-name"><a href="courses/tax-management">Tax Management with Return Filing</a></h3>
                        
                        </div>
                        <div class="course-meta">
                            <span><i class="fal fa-users"></i>780 Students</span>
                            <span><i class="fal fa-clock"></i>60h</span>
                                </div>
                              <div class=" my-3">
                              <a href="enquiry-form/tax-management" class="vs-btn style4 py-3 me-3">Enquire Now</a>
                             <a  href="courses/tax-management" class="vs-btn style4 py-3 "> Learn More </a>
                        </div>
                          
                     
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="course-style1 has-border" onclick="window.open('courses/ai-integrated-office');">
                        <div class="course-img">
                            <a href="ai-integrated-office"><img class="w-100" src="https://youexceltraining.com/img/Yourexcel-img/ai.jpg" alt="Course Img"></a>
                        
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="vs-btn style2 popup-video"><i class="fas fa-play"></i>Preview Course</a>
                        </div>
                        <div class="course-content">
                            <div class="course-top">
                                <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>(3.5)</div>
                            </div>
                            <h3 class="h5 course-name"><a href="courses/ai-integrated-office">MS Office Management</a></h3>
                        
                        </div>
                        <div class="course-meta">
                            <span><i class="fal fa-users"></i>1255 Students</span>
                            <span><i class="fal fa-clock"></i>16h</span>
                        </div>
                          <div class=" my-3">
                              <a href="enquiry-form/ai-integrated-office" class="vs-btn style4 py-3 me-3">Enquire Now</a>
                             <a href="courses/ai-integrated-office"  class="vs-btn style4 py-3 "> Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="course-style1 has-border" onclick="window.open('courses/cit');">
                        <div class="course-img">
                            <a href="cit"><img class="w-100" src="https://youexceltraining.com/img/Yourexcel-img/cit.jpg" alt="Course Img"></a>

                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="vs-btn style2 popup-video"><i class="fas fa-play"></i>Preview Course</a>
                        </div>
                        <div class="course-content">
                            <div class="course-top">
                                <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>(2.5)</div>
                             
                            </div>
                            <h3 class="h5 course-name"><a href="courses/cit">Certificate in Information Technology</a></h3>
                        
                        </div>
                        <div class="course-meta">
                            <span><i class="fal fa-users"></i>230 Students</span>
                            <span><i class="fal fa-clock"></i>72h</span>
                        </div>
                          <div class=" my-3">
                              <a href="enquiry-form/cit" class="vs-btn style4 py-3 me-3">Enquire Now</a>
                             <a href="courses/cit"  class="vs-btn style4 py-3 "> Learn More </a>
                        </div>
                    </div>
                </div>
                
                   <div class="col-sm-6 col-xl-4">
                    <div class="course-style1 has-border">
                        <div class="course-img" onclick="window.open('courses/visualizing-excel-dashboards-power-point');">
                            <a href="excel-mastery"><img class="w-100" src="https://youexceltraining.com/img/Yourexcel-img/visualizing.jpg" alt="Course Img"></a>
                            
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="vs-btn style2 popup-video"><i class="fas fa-play"></i>Preview Course</a>
                        </div>
                        <div class="course-content">
                            <div class="course-top">
                                <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>(3.5)</div>
                                
                            </div>
                            <h3 class="h5 course-name"><a href="courses/visualizing-excel-dashboards-power-point" class="text-inherit">Visualizing Advanced MS Excel Dashboards in PowerPoint Presentation </a></h3>
                       
                        </div>
                        <div class="course-meta">
                            <span><i class="fal fa-users"></i>New</span>
                            <span><i class="fal fa-clock"></i>8h</span>
                            
                        </div>
                           <div class=" my-3">
                              <a href="enquiry-form/visualizing-excel-dashboards-power-point" class="vs-btn style4 py-3 me-3">Enquire Now</a>
                             <a href="courses/visualizing-excel-dashboards-power-point"  class="vs-btn style4 py-3 "> Learn More </a>
                        </div>
                    </div>
                </div>
                
                   <div class="col-sm-6 col-xl-4">
                    <div class="course-style1 has-border">
                        <div class="course-img" onclick="window.open('courses/data-science');">
                            <a href="excel-mastery"><img class="w-100" src="https://youexceltraining.com/img/Yourexcel-img/dscip.jpg" alt="Course Img"></a>
                            
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="vs-btn style2 popup-video"><i class="fas fa-play"></i>Preview Course</a>
                        </div>
                        <div class="course-content">
                            <div class="course-top">
                                <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>(4.0)</div>
                                
                            </div>
                            <h3 class="h5 course-name"><a href="courses/data-science" class="text-inherit">Data Science and Analytics</a></h3>
                       
                        </div>
                        <div class="course-meta">
                            <span><i class="fal fa-users"></i>New</span>
                            <span><i class="fal fa-clock"></i>40h</span>
                            
                        </div>
                           <div class=" my-3">
                              <a href="enquiry-form/data-science" class="vs-btn style4 py-3 me-3">Enquire Now</a>
                             <a href="courses/data-science"  class="vs-btn style4 py-3 ">Learn More </a>
                        </div>
                    </div>
                </div>
                
                
                   <div class="col-sm-6 col-xl-4">
                    <div class="course-style1 has-border">
                        <div class="course-img" onclick="window.open('courses/ms-fabric');">
                            <a href="excel-mastery"><img class="w-100" src="https://youexceltraining.com/img/Yourexcel-img/msfp.jpg" alt="Course Img"></a>
                            
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="vs-btn style2 popup-video"><i class="fas fa-play"></i>Preview Course</a>
                        </div>
                        <div class="course-content">
                            <div class="course-top">
                                <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>(4.0)</div>
                                
                            </div>
                            <h3 class="h5 course-name"><a href="courses/ms-fabric" class="text-inherit">Data Analytics using MS Fabrics</a></h3>
                       
                        </div>
                        <div class="course-meta">
                            <span><i class="fal fa-users"></i>New</span>
                            <span><i class="fal fa-clock"></i>24h</span>
                            
                        </div>
                           <div class=" my-3">
                              <a href="enquiry-form/ms-fabric" class="vs-btn style4 py-3 me-3">Enquire Now</a>
                             <a href="courses/ms-fabric"  class="vs-btn style4 py-3 "> Learn More </a>
                        </div>
                    </div>
                </div>
                
                
                
                   <div class="col-sm-6 col-xl-4">
                    <div class="course-style1 has-border">
                        <div class="course-img" onclick="window.open('courses/presenting-with-impact');">
                            <a href="excel-mastery"><img class="w-100" src="https://youexceltraining.com/img/Yourexcel-img/pdwip.jpg" alt="Course Img"></a>
                            
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="vs-btn style2 popup-video"><i class="fas fa-play"></i>Preview Course</a>
                        </div>
                        <div class="course-content">
                            <div class="course-top">
                                <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>(4.0)</div>
                                
                            </div>
                            <h3 class="h5 course-name"><a href="courses/presenting-with-impact" class="text-inherit">Presenting with Impact</a></h3>
                       
                        </div>
                        <div class="course-meta">
                            <span><i class="fal fa-users"></i>New</span>
                            <span><i class="fal fa-clock"></i>8h</span>
                            
                        </div>
                           <div class=" my-3">
                         <a href="enquiry-form/presenting-with-impact" class="vs-btn style4 py-3 me-3">Enquire Now</a>
                             <a href="courses/presenting-with-impact"  class="vs-btn style4 py-3 "> Learn More </a>
                        </div>
                    </div>
                </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="course-style1 has-border">
                        <div class="course-img" onclick="window.open('courses/computerized-accounting');">
                            <a href="excel-mastery"><img class="w-100" src="https://youexceltraining.com/img/Yourexcel-img/cap.jpeg" alt="Course Img"></a>
                            
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="vs-btn style2 popup-video"><i class="fas fa-play"></i>Preview Course</a>
                        </div>
                        <div class="course-content">
                            <div class="course-top">
                                <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>(3.0)</div>
                                
                            </div>
                            <h3 class="h5 course-name"><a href="courses/computerized-accounting" class="text-inherit">Computerized Accounting (MS Excel, QuickBook, Tally, Power Point): </a></h3>
                       
                        </div>
                        <div class="course-meta">
                            <span><i class="fal fa-users"></i>759</span>
                            <span><i class="fal fa-clock"></i>48h</span>
                            
                        </div>
                           <div class=" my-3">
                             <a href="enquiry-form/computerized-accounting"  class="vs-btn style4 py-3 me-3">Enquire Now</a>
                             <a href="courses/computerized-accounting"  class="vs-btn style4 py-3 ">Learn More</a>
                        </div>
                    </div>
                </div>
                
                  <div class="col-sm-6 col-xl-4">
                    <div class="course-style1 has-border">
                        <div class="course-img" onclick="window.open('courses/cyber-security');">
                            <a href="excel-mastery"><img class="w-100" src="https://youexceltraining.com/img/Yourexcel-img/csmp.jpeg" alt="Course Img"></a>
                            
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="vs-btn style2 popup-video"><i class="fas fa-play"></i>Preview Course</a>
                        </div>
                        <div class="course-content">
                            <div class="course-top">
                                <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>(4.0)</div>
                                
                            </div>
                            <h3 class="h5 course-name"><a href="courses/cyber-security" class="text-inherit">Cyber Security Mastery </a></h3>
                       
                        </div>
                        <div class="course-meta">
                            <span><i class="fal fa-users"></i>New</span>
                            <span><i class="fal fa-clock"></i>24h</span>
                            
                        </div>
                           <div class=" my-3">
                             <a href="enquiry-form/cyber-security"  class="vs-btn style4 py-3 me-3">Enquire Now</a>
                             <a href="courses/cyber-security"  class="vs-btn style4 py-3 ">Learn More</a>
                        </div>
                    </div>
                </div>
                
                
                
            </div>
            
            
            <div class="modal bd-example-modal-lg" id="myModal"  style="z-index:99 " >
  <div class="modal-dialog" style="width:20% ;" role="document">
    <div class="modal-content rounded-5" style="
    background-color: #f3f1f0;
    border: 3px solid #084298; border-radius:20px;
">
      <div class="modal-body" style="position:relative;height: 75vh;">
          <span class="close">&times;</span>
          
          
   
    <div class="row">
                     
                     
                     <div class="col-md-12 ">
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Complete Name"required >
                        </div>
                        </div>
                        <!--<div class="col-md-12">-->
                        
                        <!--<div class="form-group">-->
                        <!--    <input type="text" name="number" id="number" placeholder="Cell No.">-->
                        <!--</div>-->
                        <!--</div>-->
                        <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" name="number" id="number" placeholder="WhatsApp No. ">
                        </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" name="email" id="email" placeholder="Email Address">
                        </div>
                        </div>
                        <div class="col-md-12">
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
                        <div class="col-md-12">
                           <div class="form-group">
     <input name="city" placeholder="Your City"                                            required=""
                                               type="text">
                        </div>
                        </div>
                       </div>
                           <div class="form-group">
                               
                         <input  name="comments" placeholder="Comments" type="text">
                        </div>
                         
                                          
                                         
                        
                         <button id="spin-btn"  class="vs-btn py-3 mt-3">Enqur Now!</a>
                         
  </div>
       
      
          
   
      </div>
    </div>
  </div>
</div>
          
        </div>
        
        
        
    </section>
    
    
    
    
    
    
@endsection
