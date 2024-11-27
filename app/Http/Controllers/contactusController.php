<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contactus;
use App\Mail\ContactMail;
use App\Models\Resource;
use Mail;
use Session;
use Auth;


class contactusController extends Controller
{
    function addregistration(Request $req)
    {
        // dd($req->toArray());
        $contactus= new Contactus;

        $contactus->Fullname=$req->name;
        $contactus->Email=$req->email;
        $contactus->Phoneno=$req->number;
        // $contactus->DateTimeform=$req->datetime;
        $contactus->Subject=$req->subject;
        $contactus->Message=$req->message;     

        $details = [
        'name' => $req->name,
        'phone' => $req->number,
        'email' => $req->email,
        'coursesintrested' => $req->coursesintrested,
        'comments' => $req->message
        ];

        $contactus->save();

        $data = $req->all();
        $data = [
            "name" => $req->name,
            // "cfma" => $req->cfma,
        ];


        $to_name = $req->name;
        $to_email = $req->email;
        $to_email1 = 'youexceltraining@gmail.com';

        Mail::send("emails.ContactMail", ["email_data" => $data], function($message) use ($to_name, $to_email, $req) {
        $message->to($to_email, $to_name)->subject("YouExcel Training");
        $message->from($req->email,$req->name);
        });

        Mail::send("emails.ContactMail", ["email_data" => $data], function($message) use ($to_name, $to_email1, $req) {
            $message->to($to_email1, $to_name)->subject("YouExcel Training");
            $message->from($req->email,$req->name);
            });
            
            Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
            return redirect('/contact');

        // Mail::to($req)->send(new ContactMail($details));
        // Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
        // $contactus->save();
        // Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        // return redirect('/contact-us');
    }
    function showtable()
    {
        $data= Contactus::all();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.view-Contactus', compact('data'));
    }
    function delete($id)
    {
        $data= Contactus::find($id);
        $data->delete();
        return redirect('view-Contactus');
    }
   function popup(Request $req){
        $data = Resource::where('status', 1)->get();

        return response()->json($data);
    }
    
}
