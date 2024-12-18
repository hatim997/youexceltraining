<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeadForm;
use App\Models\LeadFromTwo;
use App\Models\Assesment;
use App\Mail\ContactMail;
use Mail;
use Session;
use Auth;
use App\Http\Controllers\HomeController;
use App\Models\Courses;
use Illuminate\Support\Facades\Http;

class LeadFormController extends Controller
{
    function getassest()
    {
        return view('website.assest');
    }
    function assesment(Request $req)
    {
        $leadform = new Assesment;

        $leadform->name = $req->name;
        $leadform->contact = $req->contact;
        $leadform->member = $req->member;
        $leadform->topic = $req->topic;
        $leadform->format = $req->format;
        $leadform->duration = $req->duration;
        $leadform->remark = $req->remark;

        $leadform->save();

        Session::flash('tna2025', 'Your Assessment Form Has Been Submitted Successfully !!');
        Session::flash('course', url('/courses'));
        return redirect()->back();
    }
    

    private function fetchZohoAccessToken()
    {
        $url = 'https://accounts.zoho.com/oauth/v2/token';

        $params = [
            'refresh_token' => '1000.ff08f6ec0e5ff50f8f21aba0a76bbd24.6b1c6e930d5926bef222c00b73281ec9',
            'client_id' => '1000.L2BP3SY8HGFW5Y55YSSGQZREXQCEZG',
            'client_secret' => 'd6e712a73fe0ba890234e948b086653e65d03dea51',
            'grant_type' => 'refresh_token',
        ];

        try {
            // Make the HTTP POST request to Zoho's token endpoint
            $response = Http::asForm()->post($url, $params);

            // Check if the response is successful
            if ($response->successful()) {
                $data = $response->json();
                return $data['access_token']; // Return the access token
            }

            // Handle non-successful responses
            return [
                'error' => true,
                'message' => $response->body(),
                'status' => $response->status(),
            ];
        } catch (\Exception $e) {
            // Catch and return any exceptions that occur
            return [
                'error' => true,
                'message' => $e->getMessage(),
            ];
        }
    }
    function addregistration(Request $req)
    {

        $courses = Courses::where('duration', $req->coursesintrested)->first();

        $accessToken = $this->fetchZohoAccessToken();
        // dd($courses->coursename, $accessToken);
        $leadform = new LeadForm;

        $leadform->whatsapp = $req->whatsapp;
        $leadform->Name = $req->name;
        $leadform->Phone = $req->phone;
        $leadform->Email = $req->email;
        $leadform->city = $req->city;
        $leadform->CoursesIntrested = $courses->coursename;
        $leadform->Comments = $req->comments;
        $leadform->save();

        $zohoData = [
            "data" => [
                [
                    "Email" => $req->email ?? "N/A", // done
                    "Complete_Address" => $req->address ?? "N/A",
                    "Course" => $req->coursesintrested ?? 0000, // Assuming $req->cfma contains the course value
                    "Contact_No" => $req->phone ?? "N/A", // done
                    "City" => $req->city ?? "N/A", // done
                    "First_Name" => $req->name ?? "N/A", // done
                    
                    "WhatsApp_Number" => $req->whatsapp ?? "N/A", // done
                    "Comments" => $req->comments ?? "N/A", // done
                    "Lead_Source" => "Enquiry Form", // Default value
                
                ]
            ]
        ];
        
        // dd($accessToken, $zohoData );
        
            
            // dd($accessToken);
            if (!is_array($accessToken)) {
                try {
                    $zohoResponse = Http::withHeaders([
                        "Authorization" => "Bearer $accessToken",
                        "Content-Type" => "application/json"
                    ])->post("https://www.zohoapis.com/crm/v7/Leads", $zohoData);
        
                    if (!$zohoResponse->successful()) {
                        \Log::error('Zoho API Error: ' . $zohoResponse->body());
                    }
                } catch (\Exception $e) {
                    \Log::error('Zoho API Exception: ' . $e->getMessage());
                }
            } else {
                \Log::error('Zoho Access Token Error: ' . json_encode($accessToken));
            }



        
        $details = [
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
            'coursesintrested' => $req->coursesintrested,
            'comments' => $req->comments
        ];


        $datamail = $req->all();
        $datamail = [
            "name" => $req->name,
            "coursesintrested" => $req->coursesintrested,
        ];


        $to_name = $req->name;
        $to_email = $req->email;
        $to_email_one = 'info@youexceltraining.com';
        $to_email_two = 'youexceltraining@gmail.com';
        $to_email_three = 'youexcel.connect@gmail.com';
        $to_email_four = 'muneera.amer@youexceltraining.com';

        Mail::send("emails.Leadformmail", ["email_data" => $datamail], function ($message) use ($to_name, $to_email, $req) {
            $message->to($to_email, $to_name)->subject("Thanks for contacting YouExcel");
            $message->from("send@youexceltraining.com", "YouExcel Training");
        });

//        Mail::send("emails.Leadformmail", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_one, $req) {
//            $message->to($to_email_one, $to_name)->subject("Thanks for contacting YouExcel");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });
//        Mail::send("emails.Leadformmail", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_two, $req) {
//            $message->to($to_email_two, $to_name)->subject("Thanks for contacting YouExcel");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });
        Mail::send("emails.Leadformmail", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_three, $req) {
            $message->to($to_email_three, $to_name)->subject("Thanks for contacting YouExcel");
            $message->from("send@youexceltraining.com", "YouExcel Training");
        });
//        Mail::send("emails.Leadformmail", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_four, $req) {
//            $message->to($to_email_four, $to_name)->subject("Thanks for contacting YouExcel");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });

        Session::flash('appoinmentbooked', 'Appoinment has been Successfully !!');
$grp=[
'Excel Mastery' => 'https://chat.whatsapp.com/FwJviq20BlaGwV35eW5zv4',

'Advanced Excel' => 'https://chat.whatsapp.com/BZPNHlRXzjtAyxnszSQhwN',

'Dashboard Reporting Powerbi Analysis' => 'https://chat.whatsapp.com/ItIaIY12UOj0U3jQm65Nth',

'Sql Analytics' => 'https://chat.whatsapp.com/EywU3yz9xR2F9vr9xFHrSa',

'Python Data Analysis' => 'https://chat.whatsapp.com/EywU3yz9xR2F9vr9xFHrSa',

'Financial Modeling' => 'https://chat.whatsapp.com/GMGk16y41NrExVmqHUT6iE',

'Tax Management' => 'https://chat.whatsapp.com/K3IIAq7xfloFyL4du4d5Wj',

'Ai Integrated Office' => 'https://chat.whatsapp.com/EywU3yz9xR2F9vr9xFHrSa',

'Cit' => 'https://chat.whatsapp.com/EywU3yz9xR2F9vr9xFHrSa',

'Visualizing Excel Dashboards Power Point' => 'https://chat.whatsapp.com/EywU3yz9xR2F9vr9xFHrSa',

'Data Science' => 'https://chat.whatsapp.com/Dzv1B05ZMco1p3gXAF8k7G',

'Ms Fabric' => 'https://chat.whatsapp.com/GtjGTMYBYBH6iw58hJBjqf',

'Presenting With Impact' => 'https://chat.whatsapp.com/EywU3yz9xR2F9vr9xFHrSa',

'Cyber Security' => 'https://chat.whatsapp.com/DVnnulrbkRqE7FFBct5cIx',

'Computerized Accounting' => 'https://chat.whatsapp.com/Jr1vqkm4Erb3H3L4nA5VvM'
];
$coursesInterested = $req->coursesintrested;
$matchedUrls = [];

if (array_key_exists($coursesInterested, $grp)) {
    $url = $grp[$coursesInterested];
    // echo "Course: $coursesInterested - URL: $url<br>";
           Session::flash('appoinmentt', $url);
}


        // Mail::to($req)->send(new ContactMail($details));
        // Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
        // $leadform->save();
        // Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        return redirect('/');
    }









    function nomanformcustom(Request $req)
    {
        // dd($req->all());
        
        $leadform = new LeadFromTwo;

        $leadform->gender = $req->gender;
        $leadform->area = $req->area;
        $leadform->Name = $req->name;
        $leadform->Phone = $req->phone;
        $leadform->Email = $req->email;
        $leadform->CoursesIntrested = $req->coursesintrested;
        $leadform->Comments = $req->comments;
           $leadform->type = "navttc";


    // $leadform->coursesintrested = $req->coursesintrested;
    $leadform->coursesintrestedsecond = $req->coursesintrestedsecond;
     $leadform->coursesintrestedthird = $req->coursesintrestedthird;
    $leadform->class_timing = $req->class_timing;
    $leadform->cnic = $req->cnic;
    $leadform->city = $req->city;
    $leadform->address = $req->address;
      $leadform->fcnic = $req->fcnic;
         $leadform->education = $req->education;
    
        $details = [
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
            'coursesintrested' => $req->coursesintrested,
            'comments' => $req->comments
        ];

        $leadform->save();

        $datamail = $req->all();
        $datamail = [
            "name" => $req->name,
            "coursesintrested" => $req->coursesintrested,
        ];


        $to_name = $req->name;
        $to_email = $req->email;
        $to_email_one = 'info@youexceltraining.com';
        $to_email_two = 'youexceltraining@gmail.com';
        $to_email_three = 'youexcel.connect@gmail.com';
        $to_email_four = 'muneera.amer@youexceltraining.com';

        Mail::send("emails.Leadformmailcustom", ["email_data" => $datamail], function ($message) use ($to_name, $to_email, $req) {
            $message->to($to_email, $to_name)->subject("Thanks for contacting YouExcel");
            $message->from("send@youexceltraining.com", "YouExcel Training");
        });

//        Mail::send("emails.Leadformmailcustom", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_one, $req) {
//            $message->to($to_email_one, $to_name)->subject("Thanks for contacting YouExcel");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });
//        Mail::send("emails.Leadformmailcustom", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_two, $req) {
//            $message->to($to_email_two, $to_name)->subject("Thanks for contacting YouExcel");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });
        Mail::send("emails.Leadformmailcustom", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_three, $req) {
            $message->to($to_email_three, $to_name)->subject("Thanks for contacting YouExcel");
            $message->from("send@youexceltraining.com", "YouExcel Training");
        });
//        Mail::send("emails.Leadformmailcustom", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_four, $req) {
//            $message->to($to_email_four, $to_name)->subject("Thanks for contacting YouExcel");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });
// dd($req->all());
        Session::flash('appoinmentbooked', 'Appoinment has been Successfully !!');

        // Mail::to($req)->send(new ContactMail($details));
        // Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
        // $leadform->save();
        // Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        return redirect('/');
    }
    function nomanformcustomBBS(Request $req)
    {
        $leadform = new LeadForm;

        $leadform->Name = $req->name;
        $leadform->Phone = $req->phone;
        $leadform->Email = $req->email;
        $leadform->CoursesIntrested = $req->coursesintrested;
        $leadform->Comments = $req->comments;

        $details = [
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
            'coursesintrested' => $req->coursesintrested,
            'comments' => $req->comments
        ];

        $leadform->save();

        $datamail = $req->all();
        $datamail = [
            "name" => $req->name,
            "coursesintrested" => $req->coursesintrested,
        ];


        $to_name = $req->name;
        $to_email = $req->email;
        $to_email_one = 'info@youexceltraining.com';
        $to_email_two = 'youexceltraining@gmail.com';
        $to_email_three = 'youexcel.connect@gmail.com';
        $to_email_four = 'muneera.amer@youexceltraining.com';

        Mail::send("emails.LeadformmailcustomBBS", ["email_data" => $datamail], function ($message) use ($to_name, $to_email, $req) {
            $message->to($to_email, $to_name)->subject("Thanks for contacting YouExcel");
            $message->from("send@youexceltraining.com", "YouExcel Training");
        });

//        Mail::send("emails.LeadformmailcustomBBS", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_one, $req) {
//            $message->to($to_email_one, $to_name)->subject("Thanks for contacting YouExcel");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });
//        Mail::send("emails.LeadformmailcustomBBS", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_two, $req) {
//            $message->to($to_email_two, $to_name)->subject("Thanks for contacting YouExcel");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });
        Mail::send("emails.LeadformmailcustomBBS", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_three, $req) {
            $message->to($to_email_three, $to_name)->subject("Thanks for contacting YouExcel");
            $message->from("send@youexceltraining.com", "YouExcel Training");
        });
//        Mail::send("emails.LeadformmailcustomBBS", ["email_data" => $datamail], function ($message) use ($to_name, $to_email_four, $req) {
//            $message->to($to_email_four, $to_name)->subject("Thanks for contacting YouExcel");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });

        Session::flash('appoinmentbooked', 'Appoinment has been Successfully !!');

        // Mail::to($req)->send(new ContactMail($details));
        // Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
        // $leadform->save();
        // Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        return redirect('/');
    }
    
    
    public function showtableNavttcData()
    {
        $data = LeadForm::where("type","navttc")->get();
        return view('adminpanel.view-Navttc-data', compact('data'));
    }

    function showtable()
    {
        $data = LeadForm::where("type",null)->orderBy("id","desc")->get();
        // $data = LeadForm::all();
        // dd($data);
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.view-Leadform', compact('data'));
    }
       function showtables()
    {
        $data = LeadFromTwo::where("type",'navttc')->orderBy("id","desc")->get();
        // $data = LeadForm::all();
        // dd($data);
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.view-navttcdfrom', compact('data'));
    }

    function delete($id)
    {
        $data = LeadForm::find($id);
        $data->delete();
        return redirect('view-Leadform');
    }

    public function leadmultiDelete(Request $request)
    {
        // dd($request->all());
        // Delete the selected items
        LeadForm::destroy($request->items);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Selected items deleted successfully.');
    }

}
