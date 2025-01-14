<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\WebsiteProject;
use Session;


use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function projectname()  
    {
        $projects = Project::orderBy("project_name","asc")->get();
        return view('adminpanel.project_name', compact('projects'));
    }

    public function projectstore(Request $request)
    {
        // dd($request);
        Project::create([
            'project_name' => $request->project_name,
        ]);
        return redirect()->route('project.name');
    }

    function deleteproject($id)
    {
        $data= Project::find($id);
        $data->delete();
        return redirect()->route('project.name');
    }

    public function editproject($id)
    {
        $project = Project::findOrFail($id);
        return view('adminpanel.edit_project', compact('project'));
    }

    public function Updateproject(Request $request, $id) 
    {
        Project::findOrFail($id)->update([
            'project_name' => $request->project_name,
        ]);
        return redirect()->route('project.name');
    }

    public function project_form()
    {
        $projects = Project::get();
        return view('website.project_form', compact('projects'));
    }


    public function storeprojectwebsite(Request $request)
    {
        // dd($request->all(), $request->project_name_2, $request->project_name_3);
        try {
            // Insert data into the database
            WebsiteProject::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'whatsapp' => $request->whatsapp,
                'email' => $request->email,
                'project_name' => $request->project_name,
                'project_name_2' => $request->project_name_2,
                'project_name_3' => $request->project_name_3,
                'city' => $request->city,
                'comments' => $request->comments,
                'preferred_timing' => json_encode($request->preferred_timing), // Store as JSON
            ]);
    
            // Flash a success message to the session
            Session::flash('websiteproject_success', 'Your Form has been submitted successfully!');
        } catch (\Exception $e) {
            // Log the exception (optional)
            \Log::error('Error submitting Form: ' . $e->getMessage());
    
            // Flash an error message to the session
            Session::flash('websiteproject_error', 'Oops, something went wrong. Please try again later.');
        }
    
        // Redirect back to the form
        return redirect()->back();
    }


    function viewprojectform()
    {
        $data = WebsiteProject::orderBy("id","desc")->get();
        // $data = LeadForm::all();
        // dd($data);
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.view-website-project', compact('data'));
    }

    public function viewprojectformdelete($id)
    {
        WebsiteProject::findOrFail($id)->delete();
        return redirect()->back();
    }


}
