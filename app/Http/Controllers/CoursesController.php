<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\LeadCorporate;
use App\Models\Program;
use Auth;
use Illuminate\Support\Str;

class CoursesController extends Controller
{
    public function index()
    {
        $data=Courses::all();
//        dd($data);
        return view("adminpanel.view-courses",["data"=>$data]);
    }
     function getCourses()
    {
        $courses = Courses::all();
        return response()->json($courses);
    }
    function addcourses(Request $req)
    {
        
//        if ($req->file('image')) {
//            $file = $req->file('image');
//            // foreach ($request->file('images') as $index => $file) {
//                $fileOriginalName = $file->getClientOriginalName();
//                $extension = $file->getClientOriginalExtension();
//                $fileName  = md5(time()) . '.' . $extension;
//                $file->storeAs('careerimg/', $fileName);
//            // }
//            $Course->image=$fileName;
//        }
//        $Course->duration=$req->duration;
        $Course= new Courses;
        $Course->coursename=$req->coursename;
        $Course->position=$req->position;
        $Course->duration=$req->duration;
        $Course->save();
        return redirect('add-course');
    }

    public function CorporateLead() 
    {
        $data = LeadCorporate::orderBy('id', 'DESC')->get();

        return view('adminpanel.corporate_leadform', compact('data'));
    }

    public function Programshow()  
    {
        $programs = Program::orderBy("program_name","asc")->get();
        return view('adminpanel.program_name', compact('programs'));
    }

    public function ProgramStore(Request $req)  
    {
        // dd($req->all());
        Program::create([
            'program_name' => $req->program_name,
        ]);

        return redirect()->back();
        
    }

    function DeleteProgram($id)
    {
        $data= Program::find($id);
        $data->delete();
        return redirect()->back();
    }
    function show()
    {
        $data= Courses::orderBy("coursename","asc")->get();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.add-course', compact('data'));
    }

    function delete($id)
    {
        $data= Courses::find($id);
        $data->delete();
        return redirect('add-course');
    }
    function editShowdata($id)
    {
        $Course= Courses::find($id);
        return view('adminpanel.edit', compact('Course'));
    }

    public function EditProgram($id)  
    {
        $program = Program::where('id', $id)->first();

        return view('adminpanel.edit_program', compact('program'));
    }

    
    public function UpdateProgram(Request $req, $id)  
    {
        Program::findOrFail($id)->update([
            'program_name' => $req->program_name
        ]);
        return redirect()->route('program.name');
    }

    function editCourses(Request $req, $id)
    {
        $Course= Courses::find($id);
        $Course->coursename=$req->coursename;
        $Course->position=$req->position;
        $Course->duration=$req->duration;
        $Course->save();
        return redirect('add-course');
    }
    public function logout($id)
    {
        return view('login-form.main-page', ['user' => User::findOrFail($id)]);
    }
    
    
     public function show_pdf()
    {
        $course = Courses::all();
        return view('adminpanel.add-brochure', compact('course'));
    }
    public function store_pdf(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:pdf|max:500000',
        ]);

       $resource= Courses::find($request->title);
          if ($resource->image == null ) {
     
        if ($request->hasFile('image')) {
 $filename = uniqid() . '_' . $request->file('image')->getClientOriginalName();
        
        // Store the file in the public directory
   $request->file('image')->move(public_path('img/yourexcel-img'), $filename);

        // Save the filename to the database
        $resource->image = '/img/yourexcel-img/' . $filename;
    }
        $resource->save();
          }
          else{
             return redirect()->route('add-brochure')->with('red', 'File already uploaded pls delete first'); 
          }
      return redirect()->route('add-brochure')->with('success', 'File  Uploaded successfully');
        
    }
        public function delete_pdf($id)
    {
         $data= Courses::find($id);
        $data->image = "";
         $data->save();
        return redirect()->route('add-brochure')->with('del', 'File  Delete successfully');
    }
     public function dashboardReportingPowerBI()
    {
         $data= Courses::find(34);
        $pdf = $data->image;
        //   dd($pdf);
        return view('website.course', compact('pdf'));
    }

    public function excelMastery()
    {
         $data= Courses::find(41);
        $pdf = $data->image;
        return view('website.course1', compact('pdf'));
    }

    public function advancedExcel()
    {
         $data= Courses::find(18);
        $pdf = $data->image;
        return view('website.course2', compact('pdf'));
    }

    public function sqlAnalytics()
    {

         $data= Courses::find(46);
        $pdf = $data->image;
        return view('website.course3', compact('pdf'));
    }

    public function financialModeling()
    {
         $data= Courses::find(31);
        $pdf = $data->image;
        return view('website.course4', compact('pdf'));
    }
    public function financialModelingSelf()
    {
         $data= Courses::find(31);
        $pdf = $data->image;
        return view('website.course15', compact('pdf'));
    }
    public function aiIntegratedOffice()
    {
         $data= Courses::find(53);
        $pdf = $data->image;
        return view('website.course5', compact('pdf'));
    }

    public function cit()
    {
         $data= Courses::find(49);
        $pdf = $data->image;
        return view('website.course6', compact('pdf'));
    }

    public function pythonDataAnalysis()
    {
         $data= Courses::find(47);
        //  dd($data);
        $pdf = $data->image ?? '';
        return view('website.course7', compact('pdf'));
    }

    public function taxManagement()
    {
         $data= Courses::find(21);
        $pdf = $data->image;
        return view('website.course8', compact('pdf'));
    }

    public function visualizingExcelDashboardsPowerPoint()
    {
         $data= Courses::find(50);
        $pdf = $data->image;
        return view('website.course9', compact('pdf'));
    }

    public function dataScience()
    {
         $data= Courses::find(43);
        $pdf = $data->image;
        return view('website.course10', compact('pdf'));
    }

    public function msFabric()
    {
         $data= Courses::find(45);
        $pdf = $data->image;
        return view('website.course11', compact('pdf'));
    }


  public function edukaanspecialist()
    {
         $data= Courses::find(52);
        $pdf = $data->image;
        return view('website.course16', compact('pdf'));
    }
    public function cyberSecurity()
    {
         $data= Courses::find(52);
        $pdf = $data->image;
        return view('website.course12', compact('pdf'));
    }

    public function presentingWithImpact()
    {
         $data= Courses::find(51);
        $pdf = $data->image;
      
        return view('website.course13', compact('pdf'));
    }
     public function ComputerizedAccounting()
    {
         $data= Courses::find(44);
        $pdf = $data->image;
      
        return view('website.course14', compact('pdf'));
    }
    
    
}
