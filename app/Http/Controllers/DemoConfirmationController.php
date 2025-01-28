<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemoConfirmation;
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
}
