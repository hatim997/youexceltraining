<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CareerForm;
use App\Mail\ContactMail;
use Mail;
use Session;
use Auth;
use App\Http\Controllers\HomeController;

class CareerFormController extends Controller
{
    function addregistration(Request $req)
    {
        $careerform = new CareerForm;
        if ($req->file('filee')) {
            $file = $req->file('filee');
            // foreach ($request->file('images') as $index => $file) {
            $fileOriginalName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileName = md5(time()) . '.' . $extension;
            $file->move(public_path() . '/files/', $fileName);
//                $file->storeAs('careerimg/', $fileName);
            // }
            $careerform->Image = $fileName;
        }

        $careerform->Fullname = $req->fullname;
        $careerform->Cellno = $req->cellno;
        $careerform->Email = $req->email;
        $careerform->PositionApplyingFor = $req->applyfor;
        $careerform->Coverletter = $req->coverletter;

        $details = [
            'name' => $req->fullname,
            'phone' => $req->phone,
            'email' => $req->email,
            'coursesintrested' => $req->coursesintrested,
            'comments' => $req->comments
        ];

        $careerform->save();

        $data = $req->all();
        $data = [
            "name" => $req->fullname,
            "cfma" => $req->cfma,
            "position" => $req->applyfor,
        ];


        $to_name = $req->fullname;
        $to_email = $req->email;
        $to_email_one = 'career@youexceltraining.com';
//        $to_email_two = 'youexceltraining@gmail.com';
//        $to_email_three = 'youexcel.connect@gmail.com';
//        $to_email_four = 'muneera.amer@youexceltraining.com';

//        dd("Done");

        $subj="Thank you for applying for." .$req->applyfor ."at YouExcel";

        Mail::send("emails.ContactMail", ["email_data" => $data], function ($message) use ($subj,$to_name, $to_email, $req) {
            $message->to($to_email, $to_name)->subject($subj);
            $message->from("support@youexceltraining.com", "Youexcel");
        });

        Mail::send("emails.ContactMail", ["email_data" => $data], function ($message) use ($subj,$to_name, $to_email_one, $req) {
            $message->to($to_email_one, $to_name)->subject($subj);
            $message->from("support@youexceltraining.com", "Youexcel");
        });


        Session::flash('appoinmentbooked', 'Thank you for applying !!');
        return redirect('/Careers');

        // Mail::to($req)->send(new ContactMail($details));
        // Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
        // $careerform->save();
        // Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        // return redirect('/Careers');
    }

    function showtable()
    {
        $data = CareerForm::all();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.view-careers', compact('data'));
    }

    function delete($id)
    {
        $data = CareerForm::find($id);
        $data->delete();
        return redirect('view-careers');
    }
}
