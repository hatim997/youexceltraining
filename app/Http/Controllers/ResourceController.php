<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index()
    {
        $resources = Resource::all();
        return view('resources.index', compact('resources'));
    }

    public function create()
    {
        return view('resources.create');
    }  
  

    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
           
        ]);

        $resource = new Resource($request->all());

        if ($request->hasFile('image')) {
 $filename = uniqid() . '_' . $request->file('image')->getClientOriginalName();
        
        // Store the file in the public directory
   $request->file('image')->move(public_path('img/yourexcel-img'), $filename);

        // Save the filename to the database
        $resource->image_path = '/img/yourexcel-img/' . $filename;


    }

    // Set the 'status' field to 1 if not provided in the request
    $resource->status = $request->input('status', 1);
        $resource->save();
        // dd($request);
// return $request->image;
        return redirect()->route('resources.index')->with('success', 'Resource created successfully');
    }

    public function edit(Resource $resource)
    {
        return view('resources.edit', compact('resource'));
    }

    public function update(Request $request, Resource $resource)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:1,0',
        ]);

        $resource->fill($request->all());

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $resource->image_path = $imagePath;
        }

        $resource->save();

        return redirect()->route('resources.index')->with('success', 'Resource updated successfully');
    }


    public function show()
    {
          $resources = Resource::all();
        return view('resources.index', compact('resources'));}

    public function delete($id)
    {
        
         $data= Resource::find($id);
        $data->delete();
        return redirect('resources');
    }

    public function destroy(Resource $resource)
    {
         return $resource;
       // $resource->delete();

       // return redirect()->route('resources.index')->with('success', 'Resource deleted successfully');
    }
}
