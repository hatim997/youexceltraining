<?php 

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        // Fetch unique titles
        $entries = Calendar::select('title')->distinct()->get();
        return view('adminpanel.add-calendar', compact('entries'));
    }
    
 
    
    public function create()
    {
        // Fetch unique titles
        $entries = Calendar::select('title')->distinct()->get();
        return view('adminpanel.add-calendar', compact('entries'));
    }

    public function destroy($id)
    {
        $entry = Calendar::findOrFail($id);
        $entry->delete();
    
        return redirect()->route('add.calendar')->with('success', 'Entry deleted successfully!');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'course_name.*' => 'required|string|max:255',
            'd_date.*' => 'required|string|max:255',
            'd_timing.*' => 'required|string|max:255',
            'class_date.*' => 'required|string|max:255',
            'class_timing.*' => 'required|string|max:255',
            'duration.*' => 'required|string|max:255',
            'd_btn.*' => 'required|string|max:255',
        ]);

        $title = $request->title;

        // Loop through each entry and save to the database
        for ($i = 0; $i < count($request->course_name); $i++) {
            Calendar::create([
                'title' => $title,
                'course_name' => $request->course_name[$i],
                'd_date' => $request->d_date[$i],
                'd_timing' => $request->d_timing[$i],
                'class_date' => $request->class_date[$i],
                'class_timing' => $request->class_timing[$i],
                'duration' => $request->duration[$i],
                'd_btn' => $request->d_btn[$i],
            ]);
        }

        return redirect()->route('add.calendar')->with('success', 'Entries added successfully!');
    }

    public function viewEntriesByTitle($title)
    {
        $entries = Calendar::where('title', $title)->get();
        return view('adminpanel.view-entries', compact('entries', 'title'));
    }

    // Method to edit entries by title
    public function edit($title)
    {
        $entries = Calendar::where('title', $title)->get();
        return view('adminpanel.edit-entries', compact('entries', 'title'));
    }

    // Method to update entries
    public function update(Request $request, $title)
    {
        // Validate the request
        $request->validate([
            'course_name.*' => 'required|string|max:255',
            'd_date.*' => 'required|string|max:255',
            'd_timing.*' => 'required|string|max:255',
            'class_date.*' => 'required|string|max:255',
            'class_timing.*' => 'required|string|max:255',
            'duration.*' => 'required|string|max:255',
            'd_btn.*' => 'required|string|max:255',
        ]);

        // Update entries by title
        $entries = Calendar::where('title', $title)->get();
        foreach ($entries as $index => $entry) {
            $entry->update([
                'course_name' => $request->course_name[$index],
                'd_date' => $request->d_date[$index],
                'd_timing' => $request->d_timing[$index],
                'class_date' => $request->class_date[$index],
                'class_timing' => $request->class_timing[$index],
                'duration' => $request->duration[$index],
                'd_btn' => $request->d_btn[$index],
            ]);
        }

        return redirect()->route('add.calendar')->with('success', 'Entries updated successfully!');
    }

    // Method to delete all entries with the same title
    public function deleteAllByTitle($title)
    {
        Calendar::where('title', $title)->delete();

        return redirect()->route('add.calendar')->with('success', 'All entries with the title "' . $title . '" have been deleted successfully!');
    }
}
