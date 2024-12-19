<?php

namespace App\Http\Controllers;
use App\Models\Courses;
use App\Models\Program;
use App\Models\Application;
use App\Models\SupportForm;
use Session;
use Mail;
use Auth;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

 function showtable()
    {
        $data = SupportForm::all();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.view-Supportform', compact('data'));
    }

    function delete($id)
    {
        $data = SupportForm::find($id);
        $data->delete();
        return redirect('view-Suppotform');
    }
    
      public function trainer_profiles()
    {
        return view("website.trainer-profiles");
    }


function addsupportform(Request $req)
    {
        $leadform = new SupportForm;

        $leadform->name = $req->name;
        $leadform->email = $req->phone;
          $leadform->course = $req->course;
        $leadform->batchno = $req->batchno;
        $leadform->contact = $req->email;
        $leadform->comments = $req->comments;

        $details = [
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
            'comments' => $req->comments
        ];

        $leadform->save();

        $datamail = $req->all();
        $datamail = [
            "name" => $req->name,
            "coursesintrested" => $req->course,
        ];


        $to_name = $req->name;
        $to_email = $req->email;
        $to_email_one = 'youexcel.connect@gmail.com';
        $to_email_two = 'muneera.amer@youexceltraining.com';
        $to_email_three = 'youexcel.connect@gmail.com';
        // $to_email_four = 'muneera.amer@youexceltraining.com';

        Mail::send("emails.Leadformmail", ["email_data" => $datamail], function ($message) use ($to_name, $to_email, $req) {
            $message->to($to_email, $to_name)->subject("Thanks for contacting YouExcel");
            $message->from("info@youexceltraining.com", "YouExcel Training");
        });

        // Mail::send("emails.Leadformmail", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_one, $req) {
        //     $message->to($to_email_one, $to_name)->subject("Thanks for contacting YouExcel");
        //     $message->from("info@youexceltraining.com", "YouExcel Training");
        // });
        // Mail::send("emails.Leadformmail", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_two, $req) {
        //     $message->to($to_email_two, $to_name)->subject("Thanks for contacting YouExcel");
        //     $message->from("info@youexceltraining.com", "YouExcel Training");
        // });
        Mail::send("emails.Leadformmail", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_three, $req) {
            $message->to($to_email_three, $to_name)->subject("Thanks for contacting YouExcel");
            $message->from("info@youexceltraining.com", "YouExcel Training");
        });
        // Mail::send("emails.Leadformmail", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_four, $req) {
        //     $message->to($to_email_four, $to_name)->subject("Thanks for contacting YouExcel");
        //     $message->from("info@youexceltraining.com", "YouExcel Training");
        // });

        Session::flash('appoinmentbooked', 'Appoinment has been Successfully !!');

        // Mail::to($req)->send(new ContactMail($details));
        // Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
        // $leadform->save();
        // Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        return redirect('/');
    }
    
        public function support_form()
    {
        $courses=Courses::orderBy("coursename","asc")->get();
        return view("website.support-form",["courses"=>$courses]);
    }



    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function freeTrainingForm($course)
    {
        $course=str_replace("-"," ",$course);
        return view('website.Application-Form',['course'=>$course]);

    }

     public function validate_email(Request $request)
    {
        $email_check = Application::where("email", $request->myemail)->first();
        return response()->json($email_check, 200);
    }

    public function feedback_form()
    {
        $courses=Courses::orderBy("coursename","asc")->get();

        return view('website.Feedback-Form',['courses'=>$courses]);

    }

    public function enquiry_form()
    {
        $courses=Courses::orderBy("course","asc")->get();
        return view('website.enquiry-form',['courses'=>$courses]);
    }

    public function enquiry_corporate()
    {
        $program = Program::orderBy("program_name","asc")->get();
        return view('website.enquiry-Coporate',compact('program'));
    }

    public function enquiry_form_custom()
    {
        $courses=Courses::orderBy("coursename","asc")->get();
        return view('website.enquiryform',['courses'=>$courses]);
    }


    public function enquiry_form_BBSHRRDB()
    {
        $courses=Courses::orderBy("coursename","asc")->get();
        return view('website.enquiryformBBS',['courses'=>$courses]);
    }

  public function query($course_name)
{
    $course_name = str_replace("-", " ", $course_name); // Replaces hyphens with spaces
    $course_name = ucwords($course_name); // Capitalizes each word
    return view("website.enquiry-form", ['course_name' => $course_name]); // Passes course name to view
}



}
