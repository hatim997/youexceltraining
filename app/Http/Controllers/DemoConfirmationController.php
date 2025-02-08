<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemoConfirmation;
use App\Models\Courses;
use App\Models\OneMintFeedbackForm;
use Session;

class DemoConfirmationController extends Controller
{
    public function DemoConfirmation() 
    {
        
        return view("website.demo-confirm"); // Passes course name to view
        
    }

    public function StoreDemoConfirmation(Request $request)
    {
        DemoConfirmation::create([
            'email' => $request->email,
            'name' => $request->name,
            'whatsapp' => $request->whatsapp,
            'demo' => $request->demo,
            'mode_of_attend' => $request->mode_of_attend,
        ]);
    
        // Set flash message for success
        Session::flash('democonfirm', 'Your demo confirmation has been submitted successfully!!');
    
        return redirect()->back();
    }






    // 

    public function OneMintFeedForm() 
    {
        $courses = Courses::orderBy("coursename","asc")->get();
        
        return view("website.one-mint-feed-form", compact('courses')); // Passes course name to view
        
    }


    public function StoreOneMintFeedForm(Request $request)
    {

        // dd($request->all());

        $selectedCourses = $request->input('course');

        // Store the validated data in the database using the `create` method
        OneMintFeedbackForm::create([
            'course' => implode(', ', $selectedCourses),
            'batch_no' => $request->batch_no,
            'name' => $request->name,
            'session_date' => $request->session_date,
            'email' => $request->email,
            'session_time' => $request->session_time,
            'topics_relevance' => $request->topics_relevance,
            'content_clarity' => $request->content_clarity,
            'facilities_provided' => $request->facilities_provided,
            'training_success' => $request->training_success,
            'remarks' => $request->remarks
        ]);

        // Redirect or return a response

        Session::flash('OneMintFeedBackForm', 'One Minute Feedback Form submitted successfully!');


        return redirect()->back();
    }
}
