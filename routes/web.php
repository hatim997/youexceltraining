<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\cfmarecordedController;
use App\Http\Controllers\funnelformController;
use App\Http\Controllers\freedemoController;
use App\Http\Controllers\KamyabjawanController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\LeadFormController;
use App\Http\Controllers\CareerFormController;
use App\Http\Controllers\contactusController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\countController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\CalendarController;

use Illuminate\Support\Facades\Route;
use App\Models\Courses;
use App\Models\Trainers;
use App\Models\Registers;
use App\Models\cfmarecorded;
use App\Models\funnelform;
use App\Models\Freedemo;
use App\Models\Feedback;
use App\Models\LeadForm;
use App\Models\CareerForm;
use App\Models\Calendar;
use App\Models\Contactus;
use App\Mail\ContactMail;
use App\Http\Controllers\Auth\LoginController;


Route::get('/trainer_profiles',[\App\Http\Controllers\HomeController::class,'trainer_profiles']);

Route::get('/it-consultancy-services', function () {

    return view('website.itserviec');

});
Route::get('/financial-modeling-payment', function () {

    return view('website.gopayfast');

});

Route::get('/basic-to-advanced-sql-for-data-analytics', function () {

    return view('website.basic-to-advanced-sql-for-data-analytics');

});

Route::get('/sql-in-powerbi-for-data-analytics', function () {

    return view('website.sql-in-powerbi-for-data-analytics');

});

Route::get('/Mahir-Alam', function () {
    return view('website.Mahir-Alam');
});

Route::get('/Zeeshan-Zubair', function () {
    return view('website.Zeeshan-Zubair');
});

Route::get('/ecommerce-web-design-and-development', function () {

    return view('website.web-development');

});

Route::get('/freetraining', function () {
    return view('website.NAVTTC-Registration-form');
});
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/validate_email',[\App\Http\Controllers\HomeController::class,'validate_email']);


Route::post('/submit-free-training',[\App\Http\Controllers\ApplicationformController::class,"addregistration"]);


Route::get('/refund-policy', function () {
    return view('website.refund-policy');
});

Route::get("/jazzcash_demo",[\App\Http\Controllers\JazzCashController::class, 'index']);
Route::get("/course_checkout/{course_name}/{fee}",[\App\Http\Controllers\JazzCashController::class, 'course_checkout']);
//Route::post("/payment_success",[\App\Http\Controllers\JazzCashController::class, 'jazzcash_payment_success'])->name('payment_success');
//Route::get("/jazzcash_payment_success",function (){
//    return view("payment_success");
//});
Route::get("/payment_success",[\App\Http\Controllers\RegistrationController::class, 'payment_success']);

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('optimize');

    return "Cache is cleared"; // you can replce your redirect
});


Route::get('/adminLogin', function () {
    return view('login-form.main-page');
})->name('adminLogin');


Route::get('/add-course', function () {
    return view('adminpanel.add-course');
});


Route::get('/training-calender', function () {
  
    return view('website.trainingcalender');
});
Route::get('/example', function () {
    return "Route is working!";
});


Route::get('/view-registered', function () {
    return view('adminpanel.view-registered');
});

Route::get('/view-Leadform', function () {
    return view('adminpanel.view-Leadform');
});
Route::get('/view-navttcform', function () {
    return view('adminpanel.view-navttcdfrom');
});

Route::get('/view-careers', function () {
    return view('adminpanel.view-careers');
});

Route::get('/view-Contactus', function () {
    return view('adminpanel.view-Contactus');
});

Route::get('/', function () {
    return view('website.main-page');
});

Route::get('/Single-event', function () {
    return view('website.Single-event');
});
Route::get('/affiliations', function () {
    return view('website.affiliations');
});
Route::get('/Careers', function () {
    return view('website.Careers');
});

Route::get('/link-storage', function() {

    $exitCode = Artisan::call('storage:link');
    return '<h1>Storage Linked</h1>';
});

Route::get('/demo-features', function () {
    return view('website.demo-features');
});
Route::get('/video-demo-financial-modeling', function () {
    return view('website.video-demo-financial-modeling');
});
Route::get('/get-courses', [CoursesController::class, 'getCourses'])->name('get-courses');
Route::get('/registration_form',[RegistrationController::class, 'view_form']);
//Route::get('/Registration-form',[RegistrationController::class, 'view_form_old']);
Route::get('/Registration-Form/{course}',[RegistrationController::class, 'view_form_by_course'])->name('Registration-Form_id');
Route::get('/Registration-Form/{course}/{fee}', [RegistrationController::class, 'view_form_by_course_and_fee']);
Route::post('/Custom-Form-Reg', [RegistrationController::class, 'addregistrationCustom']);

//function () {
//    return view('website.Registration-Form');
//});

Route::get('/view-free-reg-form-data', [\App\Http\Controllers\ApplicationformController::class, 'showtable']);

Route::get('/Feedback-Form',[\App\Http\Controllers\HomeController::class,'feedback_form'])->name('feedback');

Route::get('/enquiry-form',[\App\Http\Controllers\HomeController::class,'enquiry_form']);
Route::get('/focenquiryform',[\App\Http\Controllers\HomeController::class,'enquiry_form_custom']);
Route::get('/enquiryformBBSHRRDB',[\App\Http\Controllers\HomeController::class,'enquiry_form_BBSHRRDB']);

Route::get("/free-of-cost-training-registration-form/{course}",[\App\Http\Controllers\HomeController::class,'freeTrainingForm']);

Route::get('/free-of-cost-training-registration-form', function () {
    return view('website.Application-Form');
});


Route::get('/enquiry-form-financial-modeling-analysis', function () {
    return view('website.enquiry-form-financial-modeling-analysis');
});

Route::get('/webste.main-page', function () {
    return view('admin-panel.main-page');
});






Route::get('/financial-modeling-analysis-fundamental', function () {
    return view('website.financial-modeling-analysis-fundamental');
});
Route::get('/financial-modeling-analysis-advanced', function () {
    return view('website.financial-modeling-analysis-advanced');
});

Route::get('/tax-management-with-return-filing', function () {
    return view('website.tax-management-with-return-filing');
});

Route::get('/effective-office-management-training-course', function () {
    return view('website.effective-office-management-training-course');
});

Route::get('/customer-services-specialist', function () {
    return view('website.customer-services-specialist');
});

Route::get('/python-programming', function () {
    return view('website.python-programming');
});

Route::get('/microsoft-excel-masteryb-i', function () {
    return view('website.msexcelbti');
});

Route::get('/advanced-excel-business-intelligence-data-visualization', function () {
    return view('website.advanced-excel-business-intelligence-data-visualization');
});

Route::get('/certificate-in-information-technology', function () {
    return view('website.certificate-in-information-technology');
});

Route::get('/computerized-accounting', function () {
    return view('website.computerized-accounting');
});

Route::get('/data-analytics-tableau', function () {
    return view('website.data-analytics-tableau');
});
Route::get('/excel-skills-for-business-forecasting', function () {
    return view('website.excel-skills-for-business-forecasting');
});

Route::get('/financial-accounting', function () {
    return view('website.financial-accounting');
});

Route::get('/data-science-with-bi', function () {
    return view('website.data-science-with-bi');
});

Route::get('/Privacy-Policy', function () {
    return view('website.Privacy-Policy');
});

Route::get('/student-policy', function () {
    return view('website.student-policies');
});

Route::get('/Other-Policies', function () {
    return view('website.Other-Policies');
});

Route::get('/coursese', function () {
    return view('website.courses');
});
Route::get('/courses', function () {
    return view('website.courses');
});
Route::get('/NAVTTC-Skills-for-All-Registration-form', function () {
    return view('website.Kamyab-Jawan-Form');
});


Route::get('/trainer-profiles', function () {
    return view('website.trainer-profiles');
});
Route::get('add-brochure', [CoursesController::class, 'show_pdf'])->name('add-brochure');
Route::post('store-brochure', [CoursesController::class, 'store_pdf'])->name('brochures.store');
Route::get('store-brochure/{id}', [CoursesController::class, 'delete_pdf'])->name('brochures.del');
/* Courses */
Route::get('courses/dashboard-reporting-powerbi-analysis', [CoursesController::class, 'dashboardReportingPowerBI']);
Route::get('courses/excel-mastery', [CoursesController::class, 'excelMastery']);
Route::get('courses/advanced-excel', [CoursesController::class, 'advancedExcel']);
Route::get('courses/sql-analytics', [CoursesController::class, 'sqlAnalytics']);
Route::get('courses/financial-modeling', [CoursesController::class, 'financialModeling']);
Route::get('courses/ai-integrated-office', [CoursesController::class, 'aiIntegratedOffice']);
Route::get('courses/cit', [CoursesController::class, 'cit']);
Route::get('courses/python-data-analysis', [CoursesController::class, 'pythonDataAnalysis']);
Route::get('courses/tax-management', [CoursesController::class, 'taxManagement']);
Route::get('courses/visualizing-excel-dashboards-power-point', [CoursesController::class, 'visualizingExcelDashboardsPowerPoint']);
Route::get('courses/data-science', [CoursesController::class, 'dataScience']);
Route::get('courses/ms-fabric', [CoursesController::class, 'msFabric']);
Route::get('courses/cyber-security', [CoursesController::class, 'cyberSecurity']);
Route::get('courses/computerized-accounting', [CoursesController::class, 'ComputerizedAccounting']);
Route::get('courses/presenting-with-impact', [CoursesController::class, 'presentingWithImpact']);
Route::get('courses/e-dukaan-specialist', [CoursesController::class, 'edukaanspecialist']);


/* Courses */

// Add more routes as needed for each course


Route::get("/Tanveer-Bukhsh",function () {
    return view("website.TanveerBukhsh");
});
Route::get("/Tahir-Ali",function () {
    return view("website.TahirAli");
});
Route::get("/Sumaira-Ghouri",function () {
    return view("website.SumairaGhouri");
});
Route::get("/Farah-Mehboob",function () {
    return view("website.FarahMehboob");
});
Route::get("/Murtaza-Ghazi",function () {
    return view("website.MurtazaGhazi");
});
Route::get("/Basit-Rana",function () {
    return view("website.BasitRana");
});
Route::get("/Uzair-Rasheed-Baig",function () {
    return view("website.UzairRasheedBaig");
});
Route::get("/Mahir-Alam",function () {
    return view("website.MahirAlam");
});


Route::get('/faqs', function () {
    return view('website.faq');
});
Route::get('/Careers', function () {
    return view('website.Careers');
});


Route::get('/Privacy-Policy', function () {
    return view('website.Privacy-Policy');
});
Route::get('/Policies', function () {
    return view('website.Policies');
});
Route::get('/Student-Policy', function () {
    return view('website.Student-Policy');
});




Route::get('/about', function () {
    return view('website.about');
});




Route::get('/home', function () {
    return view('website.main-page');
});


Route::get('/contact', function () {
    return view('website.contact');
});

Route::get('/compare-courses', function () {
    return view('website.compare-courses');
});
// Route::get('/', function () {
//     return view('website.main-page');
// });
Route::get('/Reviews', function () {
    return view('website.Reviews');
});
Route::get('/Events-gallery', function () {
    return view('website.Events-gallery');
});
Route::get('/Picture-gallery', function () {
    return view('website.Picture-gallery');
});
Route::get('/funnel', function () {
    return view('website.funnel');
});
Route::get('/funnel2', function () {
    return view('website.funnel2');
});
Route::get('/funnel-form', function () {
    return view('website.funnel-form');
});
Route::get('/book-appointment', function () {
    return view('website.book-appointment');
});
Route::get('/CFMA-video-form', function () {
    return view('website.CFMA-video-form');
});
 Route::get('/loadContent', [contactusController::class, 'popup'])->name('loadContent');

// session start
Route::middleware(['auth'])->group(function () {
    Route::get('/kt', function () {
        return view('adminpanel.main-page');
    });
    
    Route::get('/course', [CoursesController::class, 'index']);
    Route::post('/adminpanelform', [CoursesController::class, 'addcourses']);
    Route::post('/edit/{id}', [CoursesController::class, 'editCourses']);
    Route::get('/add-course', [CoursesController::class, 'show']);
    Route::get('/delete-course/{id}', [CoursesController::class, 'delete']);
    Route::get('/edit/{id}', [CoursesController::class, 'editShowdata']);

    Route::post('/adminpaneltrainerform', [TrainerController::class, 'addtrainer']);
    Route::post('/edit-trainer/{id}', [TrainerController::class, 'editTrainers']);
    Route::get('/add-trainer', [TrainerController::class, 'show']);
    Route::get('/add-trainer/{id}', [TrainerController::class, 'delete']);
    Route::get('/edit-trainer/{id}', [TrainerController::class, 'editShowdata']);

    // adminpanel Registration routes
        Route::get('/view-registered', [RegistrationController::class, 'showtable']);
        Route::get('/view-registered/{id}', [RegistrationController::class, 'delete']);
    // adminpanel Registration routes

    // adminpanel CFMA RECORDED routes
        Route::get('/view-cfma-recorded', [cfmarecordedController::class, 'showtable']);
        Route::get('/view-cfma-recorded/{id}', [cfmarecordedController::class, 'delete']);
    // adminpanel CFMA RECORDED routes

        // adminpanel Funnel routes
        Route::get('/view-funnel', [funnelformController::class, 'showtable']);
        Route::get('/view-funnel/{id}', [funnelformController::class, 'delete']);
    // adminpanel Funnel routes

    // adminpanel Free-demo routes
    Route::get('/view-freedemo', [freedemoController::class, 'showtable']);
    Route::get('/view-freedemo/{id}', [freedemoController::class, 'delete']);
    // adminpanel Free-demo routes

    // Assesment TNA 2025
    Route::get('/View-assests-table', [KamyabjawanController::class, 'asseststable']);
     // adminpanel Kamyab-jawan routes
     Route::get('/View-kamyabjawan-form', [KamyabjawanController::class, 'showtable']);
     Route::get('/View-kamyabjawan-form/{id}', [KamyabjawanController::class, 'delete']);
     // adminpanel Kamyab-jawan routes

    // adminpanel Feedback routes
    Route::get('/view-feedback', [FeedbackController::class, 'showtable']);
    Route::get('/view-feedback/{id}', [FeedbackController::class, 'delete']);
    // adminpanel Feedback routes

    // adminpanel LeadForm routes
       Route::get('/view-Leadform', [LeadFormController::class, 'showtable']);
        Route::get('/view-navttcform', [LeadFormController::class, 'showtables']);
       Route::get('/view-Leadform/{id}', [LeadFormController::class, 'delete']);
       Route::get('/view-navttc-form-data', [LeadFormController::class, 'showtableNavttcData']);
       Route::get('/kt', [countController::class, 'countrecord']);
       Route::get('/kt', [countController::class, 'dashboard']);
    // adminpanel LeadForm routes

    // adminpanel CareerForm routes
    Route::get('/view-careers', [CareerFormController::class, 'showtable']);
    Route::get('/view-careers/{id}', [CareerFormController::class, 'delete']);
    // adminpanel CareerForm routes

    // adminpanel Contactus routes
        Route::get('/view-Contactus', [contactusController::class, 'showtable']);
        Route::get('/view-Contactus/{id}', [contactusController::class, 'delete']);
    // adminpanel Contactus routes

    Route::post('logout', 'auth\LoginController@logout')->name('logout');
    Route::get('/login', function () {
        return view('login-form.main-page');
    });
});

// For website
Route::get('/calander', [CalendarController::class, 'WebCalender']);

// Route::get('/calander', function () {
//     $calendars = Calendar::all(); // Fetch all records from the calendars table
//     return view('website.calander', compact('calendars')); // Pass the records to the view
// });

// Route::get('/course', [CoursesController::class, 'index']);
Route::get('/add-calendar', [CalendarController::class, 'index'])->name('add.calendar');
Route::post('/adminpanelform', [CalendarController::class, 'store'])->name('store.calendar');
Route::get('/view-entries/{title}', [CalendarController::class, 'viewEntriesByTitle'])->name('view.entries');
Route::get('/edit-entry/{title}', [CalendarController::class, 'edit'])->name('edit.entries');
Route::put('/update-entry/{id}', [CalendarController::class, 'update'])->name('update.entries');
Route::delete('/delete-entries/{title}', [CalendarController::class, 'deleteAllByTitle'])->name('delete.entries');



    // website Registration routes
    Route::post('/Registration-Form', [RegistrationController::class, 'addregistration'])->name('Registration-Form');
    // website Registration routes

    // website CFMA_RECORDED routes
    Route::post('/Registration-Form1', [cfmarecordedController::class, 'addregistration']);
    // website CFMA_RECORDED routes

     // website funnel routes
     Route::post('/funnel-form', [funnelformController::class, 'addregistration']);
     // website funnel routes

    // website freedemo routes
    Route::post('/book-appointment', [freedemoController::class, 'addregistration']);
    // website freedemo routes

    // website Kamyab Jawan Form routes
    Route::post('/Kamyab-jawan-Form', [KamyabjawanController::class, 'addregistration']);
    // website Kamyab Jawan Form routes

    // website Feedback routes
    Route::post('/Feedback-Form', [FeedbackController::class, 'addregistration']);
    // website Feedback routes

    // website LeadForm routes
    Route::post('/nomanform', [LeadFormController::class, 'addregistration']);
    Route::get('/tna2025', [LeadFormController::class, 'getassest']);
    Route::post('/assestform', [LeadFormController::class, 'assesment'])->name('store.assest');
    Route::post('/nomanformcustom', [LeadFormController::class, 'nomanformcustom']);
    Route::post('/nomanformcustomBBS', [LeadFormController::class, 'nomanformcustomBBS']);
    // website LeadForm routes

    // website CareerForm routes
    Route::post('/Careers', [CareerFormController::class, 'addregistration']);
    // website CareerForm routes

    // website Contactus routes
    Route::get('/contact-us', [contactusController::class, 'addregistration'])->name('contactForm');
    // website Contactus routes

// email videopage start
Route::get('/website.main-page', [EmailController::class, 'contact']);
Route::post('/send-message', [EmailController::class, 'sendEmail'])->name('contact.send');
// email videopage end

// email Leadform start
Route::get('/website.main-page', [LeadFormController::class, 'contact']);
Route::post('/send-message1', [LeadFormController::class, 'addregistration'])->name('Registration-Form__');
// email Leadform end

// email funnel-form start
Route::get('/website.main-page', [funnelformController::class, 'contact']);
Route::post('/send-message5', [funnelformController::class, 'addregistration'])->name('funnel-form');
// email funnel-form end



 //admin panel support form routes
    Route::get('/view-Suppotform', [\App\Http\Controllers\HomeController::class, 'showtable']);
    Route::get('/view-Suppotform/{id}', [\App\Http\Controllers\HomeController::class, 'delete']);
    //admin panel  support  form routes


// email free-demo start
Route::get('/website.main-page', [freedemoController::class, 'contact']);
Route::post('/send-message6', [freedemoController::class, 'addregistration'])->name('Free-demo');
// email free-demo end

// email Registration-form start
Route::get('/website.main-page', [LeadFormController::class, 'contact']);
Route::post('/send-message2', [LeadFormController::class, 'addregistration'])->name('nomanform');
// email Registration-form end

// email Registration-form start
Route::get('/website.main-page', [cfmarecordedController::class, 'contact']);
Route::post('/send-message7', [cfmarecordedController::class, 'addregistration'])->name('Registration-Form1');
// email Registration-form end

// email Feedback-form start
Route::get('/website.main-page', [FeedbackController::class, 'contact']);
Route::post('/send-message3', [FeedbackController::class, 'addregistration'])->name('Feedback-Form');
// email Feedback-form end

// email Career-form start
Route::get('/website.main-page', [FeedbackController::class, 'contact']);
Route::post('/send-message4', [FeedbackController::class, 'addregistration'])->name('Careers');
// email Career-form end

// email Contactus start
Route::get('/website.main-page', [contactusController::class, 'contact']);
Route::post('/send-message1', [contactusController::class, 'addregistration'])->name('contact-uss');
// email Contactus end

// Route::resource('adminpanel', 'CoursesController');
Route::get('/logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user',null);
    }
    return redirect('login-form.main-page');
});

Route::get('/login-form.main-page', function () {
    if(session()->has('user'))
    {
        return redirect('admin-panel.add-course');
    }
    return view('login-form.main-page');
});
Route::resource('resources', ResourceController::class);
Route::get('/delete-resources/{id}', [ResourceController::class, 'delete'])->name('delete-resources');

Auth::routes();

Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get("/enquiry-form/{course_name}",[\App\Http\Controllers\HomeController::class, 'query']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/support-form',[\App\Http\Controllers\HomeController::class,'support_form']);
Route::post('/submit-support-form',[\App\Http\Controllers\HomeController::class,'addsupportform']);

