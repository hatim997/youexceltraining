<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registers;
use App\Mail\ContactMail;
use Mail;
use Session;
use Auth;
use App\Models\Courses;
use Illuminate\Support\Facades\Http;


class RegistrationController extends Controller
{

      function view_form()
    {
//        dd($course);
        // $course=str_replace("-"," ",$course);
        $courses=Courses::orderBy("position","asc")->get();
        return view("website.regester",['courses'=>$courses]);
    }


  function view_form_old()
    {
//        dd($course);
        // $course=str_replace("-"," ",$course);
      $courses=Courses::orderBy("position","asc")->get();
      return view("website.Registration-Form",['courses'=>$courses]);
    }
    
    
    function view_form_by_course(Request $request,$course)
    {
//        dd($course);
        $course=str_replace("-"," ",$course);
        $course = ucwords($course);
        return view("website.regester",['course'=>$course]);
    }


   public function view_form_by_course_and_fee($course, $fee)
    {
        $course = str_replace("-", " ", $course);
        return view("website.my_reg_form", ['course' => $course, 'fee' => $fee]);
    }
    
    
     public function addregistrationCustom(Request $req)
    {
        //dd($req->all());
        $Register = new Registers;
        if ($req->file('file1')) {
            $file = $req->file('file1');
            // foreach ($request->file('images') as $index => $file) {
            $fileOriginalName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileName = md5(time()) . '.' . $extension;
            $file->move(public_path() . '/files/', $fileName);
            // }
            $Register->Image = $fileName;
        }
        $Register->email = $req->email;
        $Register->chooseprogramme = $req->cfma;
        $Register->name = $req->name;
        $Register->fathername = $req->fname;
        $Register->address = $req->address;
        $Register->city = $req->city;
        $Register->employeename = $req->empname;
        $Register->designation = $req->designation;
        $Register->cellnumber = $req->cellnumber;
        $Register->dateofbirth = $req->date;
        $Register->cnic = $req->cnic;
        $Register->qualification = $req->qualification;

        $details = [
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
            'coursesintrested' => $req->coursesintrested,
            'comments' => $req->comments
        ];


        // Mail::to($req)->send(new ContactMail($details));
        // Mail::to('nomanpeerzada9t9@gmail.com')->send(new ContactMail($details));
        $Register->save();

        $data = $req->all();
        $data = [
            "name" => $req->name,
            "cfma" => $req->cfma,
        ];


// dd($req->all());

        $to_name = $req->name;
        $to_email = $req->email;
        $to_email_one = 'send@youexceltraining.com';
        // $to_email_two = 'youexceltraining@gmail.com';
        $to_email_three = 'youexcel.connect@gmail.com';
        //$to_email_four = 'muneera.amer@youexceltraining.com';

        Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email, $req) {
            $message->to($to_email, $to_name)->subject("YouExcel Training program Registration Confirmation");
            $message->from("send@youexceltraining.com", "YouExcel Training");
        });

        // Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email_one, $req) {
        //     $message->to($to_email_one, $to_name)->subject("YouExcel Training program Registration Confirmation");
        //     $message->from("send@youexceltraining.com", "YouExcel Training");
        // });

        // Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email_two, $req) {
        //     $message->to($to_email_two, $to_name)->subject("YouExcel Training program Registration Confirmation");
        //     $message->from("send@youexceltraining.com", "YouExcel Training");
        // });

        Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email_three, $req) {
            $message->to($to_email_three, $to_name)->subject("YouExcel Training program Registration Confirmation");
            $message->from("send@youexceltraining.com", "YouExcel Training");
        });

        // Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email_four, $req) {
        //     $message->to($to_email_four, $to_name)->subject("YouExcel Training program Registration Confirmation");
        //     $message->from("send@youexceltraining.com", "YouExcel Training");
        // });


        $fee = $req->fee;



            return view("website.gopayfast", ['fee' => $fee, "course" => $req->cfma, 'phone' => $req->phone,
                'email' => $req->email, "reg_id" => $Register->id]);

        Session::flash('appoinmentbooked', 'Appoinment has been Successfully !!');
        return redirect('registration_form');
    }
    
//     function addregistration(Request $req)
//     {
        
//         // dd($req->toArray());
        
//       //dd($req->all());
//         $Register = new Registers;
//         if ($req->file('file1')) {
//             $file = $req->file('file1');
//             // foreach ($request->file('images') as $index => $file) {
//             $fileOriginalName = $file->getClientOriginalName();
//             $extension = $file->getClientOriginalExtension();
//             $fileName = md5(time()) . '.' . $extension;
//             $file->move(public_path() . '/files/', $fileName);
//             // }
//             $Register->Image = $fileName;
//         }
//         $Register->email = $req->email;
//         $Register->chooseprogramme = $req->cfma;
//         $Register->name = $req->name;
//         $Register->fathername = $req->fname;
//         $Register->address = $req->address;
//         $Register->city = $req->city;
//         $Register->employeename = $req->empname;
//         $Register->designation = $req->designation;
//         $Register->cellnumber = $req->cellnumber;
//         $Register->dateofbirth = $req->date;
//         $Register->cnic = $req->cnic;
//         $Register->qualification = $req->qualification;

//         $details = [
//             'name' => $req->name,
//             'phone' => $req->phone,
//             'email' => $req->email,
//             'coursesintrested' => $req->coursesintrested,
//             'comments' => $req->comments
//         ];


//         // Mail::to($req)->send(new ContactMail($details));
//         // Mail::to('nomanpeerzada9t9@gmail.com')->send(new ContactMail($details));
//         $Register->save();

//         $data = $req->all();
//         $data = [
//             "name" => $req->name,
//             "cfma" => $req->cfma,
//         ];


// // dd($req->all());

//         $to_name = $req->name;
//         $to_email = $req->email;
//         // $to_email_one = 'send@youexceltraining.com';
//         // $to_email_two = 'youexceltraining@gmail.com';
//         $to_email_three = 'youexcel.connect@gmail.com';
//         // $to_email_four = 'muneera.amer@youexceltraining.com';

//         Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email, $req) {
//             $message->to($to_email, $to_name)->subject("YouExcel Training program Registration Confirmation");
//             $message->from("send@youexceltraining.com", "YouExcel Training");
//         });

//         // Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email_one, $req) {
//         //     $message->to($to_email_one, $to_name)->subject("YouExcel Training program Registration Confirmation");
//         //     $message->from("send@youexceltraining.com", "YouExcel Training");
//         // });

//         // Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email_two, $req) {
//         //     $message->to($to_email_two, $to_name)->subject("YouExcel Training program Registration Confirmation");
//         //     $message->from("send@youexceltraining.com", "YouExcel Training");
//         // });

//         Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email_three, $req) {
//             $message->to($to_email_three, $to_name)->subject("YouExcel Training program Registration Confirmation");
//             $message->from("send@youexceltraining.com", "YouExcel Training");
//         });

//         // Mail::send("emails.ContactMail1", ["email_data" => $data], function ($message) use ($to_name, $to_email_four, $req) {
//         //     $message->to($to_email_four, $to_name)->subject("YouExcel Training program Registration Confirmation");
//         //     $message->from("send@youexceltraining.com", "YouExcel Training");
//         // });


        


//         if ($req->payment_method == "pay_now") {
          
//          $course_fee=[
//             "Advanced MS Excel"=>15000,
//             "Basic to Intermediate Python Programming"=>18500,
//             "Certificate in Information Technology"=>12400,
//               "Certificate in Information Technology (CIT)"=>12400,
//             "Certificate in Office Management Course"=>12000,
//             "Computerized Accounting"=>15000,
//             "Customer Services Specialist"=>28000,
//             "Dashboard Reporting with Power BI"=>28000,
//             "Advanced Dashboard Reporting with Power BI ( 1 month)"=>28000,
//             "Data Analytics with Tableau"=>16000,
//             "Data Science with BI Reporting"=>28000,
//             "Excel Skills for Business Forecasting"=>11700,
//             "Excelling in Linkedln profile and Job Interviews"=>1500,
//             "Financial Modeling and Analysis"=>15000,
//             "Tax Management with Return Filing"=>16000,
//             "Financial Modeling and Analysis Advanced"=>16000,
//             "Financial Modeling and Analysis Fundamental"=>16000,
//         ];

//         $fee= $course_fee[$req->cfma];
//             return view("website.gopayfast", ['fee' => $fee, "course" => $req->cfma,'phone'=>$req->phone,
//                 'email'=>$req->email,"reg_id"=>$Register->id]);
//         }

//         Session::flash('appoinmentbooked', 'Appoinment has been Successfully !!');
//         return redirect('registration_form');
//     }

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
   
    // dd($req->toArray());
    // Send Data to Zoho CRM
    $accessToken = $this->fetchZohoAccessToken();
    
    if(!$req->file2) {


        
    // Data for Zoho API
$zohoData = [
    "data" => [
        [
            "Email" => $req->email ?? "N/A",
            "Complete_Address" => $req->address ?? "N/A",
            "Course" => 6442514000000585439 ?? 0000, // Assuming $req->cfma contains the course value
            "Contact_No" => $req->cellnumber ?? "N/A",
            "City" => $req->city ?? "N/A",
            "Qualification" => $req->qualification ?? "N/A",
            "First_Name" => $req->name ?? "N/A",
            "Lead_Status" => "Contacted", // Default value
            "Job_Designation" => $req->designation ?? "N/A",
            "Employer_Name" => $req->empname ?? "N/A",
            "CNIC" => $req->cnic ?? "N/A",
            "Country_Name" => "Pakistan", // Default value
            "Designation" => $req->designation ?? "N/A",
            "Father_Husband_s_Name" => $req->fname ?? "N/A",
            "Date_of_Birth" => $req->date ?? "N/A",
            "WhatsApp_Number" => $req->cellnumber ?? "N/A",
            "Comments" => "N/A", // Default value
            "Last_Name" => "N/A", // Default value
            "Lead_Source" => "Registration Form", // Default value
        
        ]
    ]
];

    
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
        // Session::flash('paymentproof', 'Please Upload Your Payment Proof!');
        // return redirect('registration_form');

    Session::flash('appoinmentbooked', 'Appointment has been successfully booked!');
    return redirect('registration_form');




    } else {
        
    
    // Existing Registration Logic
    $Register = new Registers;
    if ($req->file('file1')) {
        $file = $req->file('file1');
        $extension = $file->getClientOriginalExtension();
        $fileName = md5(time()) . '.' . $extension;
        $file->move(public_path() . '/files/', $fileName);
        $Register->Image = $fileName;
    }
    
  

    $Register->email = $req->email;
    $Register->chooseprogramme = $req->cfma;
    $Register->name = $req->name;
    $Register->fathername = $req->fname;
    $Register->address = $req->address;
    $Register->city = $req->city;
    $Register->employeename = $req->empname;
    $Register->designation = $req->designation;
    $Register->cellnumber = $req->cellnumber;
    $Register->dateofbirth = $req->date;
    $Register->cnic = $req->cnic;
    $Register->qualification = $req->qualification;
    $Register->save();

     if ($req->file('file2')) {
    $file2 = $req->file('file2');
    $extension2 = $file2->getClientOriginalExtension();
    $fileName2 = md5(time()) . '.' . $extension2;

    // Move the file to the public/files/ directory
    $filePath = public_path() . '/files/' . $fileName2;
    $file2->move(public_path() . '/files/', $fileName2);

    // Store file name in the database (if required)
    $Register->Image = $fileName2;

    // Zoho API Integration
   
    // try {
        if ($accessToken && is_string($accessToken)) {
            // Send the file to Zoho CRM
            $zohoResponse = Http::withHeaders([
                "Authorization" => "Bearer $accessToken",
            ])->attach(
                'file',                // API expects this key
                file_get_contents($filePath), // Read the moved file
                $fileName2             // Original file name
            )->post("https://www.zohoapis.com/crm/v7/files");
            
// dd($zohoResponse,$accessToken);
            // Check the response
            if ($zohoResponse->successful()) {
                // Get the response data as an array
                $responseData = $zohoResponse->json();
                
                $fileId = $responseData['data'][0]['details']['id'] ?? null;
            } else {
                \Log::error('Zoho API Error: ' . $zohoResponse->body());
                Session::flash('error', 'File upload failed: ' . $zohoResponse->body());
            }
        } else {
            \Log::error('Zoho Access Token Error: ' . json_encode($accessToken));
            Session::flash('error', 'Invalid Zoho access token.');
        }
    // } catch (\Exception $e) {
    //     \Log::error('Zoho API Exception: ' . $e->getMessage());
    //     Session::flash('error', 'An error occurred while uploading the file.');
    // }
} else {
    Session::flash('error', 'No file uploaded.');
}













    // Data for Zoho API
$zohoData = [
    "data" => [
        [
            "Email" => $req->email ?? "N/A",
            "Complete_Address" => $req->address ?? "N/A",
            "Course" => 6442514000000585439 ?? 0000, // Assuming $req->cfma contains the course value
            "Contact_No" => $req->cellnumber ?? "N/A",
            "City" => $req->city ?? "N/A",
            "Qualification" => $req->qualification ?? "N/A",
            "First_Name" => $req->name ?? "N/A",
            "Lead_Status" => "Contacted", // Default value
            "Job_Designation" => $req->designation ?? "N/A",
            "Employer_Name" => $req->empname ?? "N/A",
            "CNIC" => $req->cnic ?? "N/A",
            "Country_Name" => "Pakistan", // Default value
            "Designation" => $req->designation ?? "N/A",
            "Father_Husband_s_Name" => $req->fname ?? "N/A",
            "Date_of_Birth" => $req->date ?? "N/A",
            "WhatsApp_Number" => $req->cellnumber ?? "N/A",
            "Comments" => "N/A", // Default value
            "Last_Name" => "N/A", // Default value
            "Lead_Source" => "Registration Form", // Default value
            "Proof_of_Payment" => [
                [
                    "File_Id__s" => $fileId,
                ]
            ]
        ]
    ]
];

    
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

    // Payment Processing
    if ($req->payment_method == "pay_now") {
        $course_fee = [
            "Advanced MS Excel" => 15000,
            "Basic to Intermediate Python Programming" => 18500,
            "Certificate in Information Technology" => 12400,
            "Certificate in Office Management Course" => 12000,
            "Computerized Accounting" => 15000,
            "Customer Services Specialist" => 28000,
            "Dashboard Reporting with Power BI" => 28000,
            "Advanced Dashboard Reporting with Power BI ( 1 month)" => 28000,
            "Data Analytics with Tableau" => 16000,
            "Data Science with BI Reporting" => 28000,
            "Excel Skills for Business Forecasting" => 11700,
            "Excelling in Linkedln profile and Job Interviews" => 1500,
            "Financial Modeling and Analysis" => 15000,
            "Tax Management with Return Filing" => 16000,
            "Financial Modeling and Analysis Advanced" => 16000,
            "Financial Modeling and Analysis Fundamental" => 16000,
        ];

        $fee = $course_fee[$req->cfma];
        return view("website.gopayfast", [
            'fee' => $fee,
            "course" => $req->cfma,
            'phone' => $req->phone,
            'email' => $req->email,
            "reg_id" => $Register->id
        ]);
    }

    Session::flash('appoinmentbooked', 'Appointment has been successfully booked!');
    return redirect('registration_form');
    }
}



    public function payment_success(Request $request)
    {
        // dd($request->all());




        if($request->err_msg!=null)
        {
            return redirect(url("/"));
        }
        else
        {
            $user_data=Registers::find($request->basket_id);
            $course_amount=$request->transaction_amount;
            $payment_method=$request->issuer_name;



            Mail::send("emails.payment", ["user_data" => $user_data,'payment_method'=>$payment_method,'course_amount'=>$course_amount], function ($message) use ($user_data) {
                $message->to($user_data->email, $user_data->name)->subject("YouExcel Training program Registration Confirmation");
                $message->from("send@youexceltraining.com", "YouExcel Training");
            });
            //dd($user_data);
            return view("website.payment_success");
        }
        Session::flash('payment_done', 'Appoinment has been Successfully !!');
        return redirect('/');
    }

    function showtable()
    {
        // dd("Asd");
        $data = Registers::orderBy("id", "desc")->get();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.view-registered', compact('data'));
    }

    function delete($id)
    {
        $data = Registers::find($id);
        $data->delete();
        return redirect('view-registered');
    }
}
