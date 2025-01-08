<?php

namespace App\Http\Controllers;

use App\Http\adminpanel;
use Illuminate\Http\Request;
use App\Models\GalleryCategory;
use App\Models\galleryImage;

class GalleryController extends Controller
{

    // function EventGallery() 
    // {
    //     $data = galleryImage::with('category')->get();

    //     // Group data by the 'year' from the category relation
    //     $dataGroupedByYear = $data->groupBy(function ($item) {
    //         return $item->category->year;
    //     });
    //     // dd($dataGroupedByYear);

    //     // Pass grouped data to the view
    //     return view('website.Events-gallery', compact('dataGroupedByYear'));
    // }

    

    public function EventGalleryNew()
    {
        // Fetch images with their associated category
        $data = galleryImage::with('category')->get();
    
        // Group images by year and sort by year in ascending order
        $dataGroupedByYear = $data->groupBy(function ($item) {
            return $item->category->year;
        })->sortKeys();
    
        // Group images by category name
        $dataGroupedByCategory = $data->groupBy(function ($item) {
            return $item->category->cat_name;
        });
    
        return view('website.Events-gallery-new', compact('dataGroupedByYear', 'dataGroupedByCategory'));
    }
    public function index()
    {
        $data = GalleryCategory::all();
//        dd($data);
        return view("adminpanel.gallery_cat",["data"=>$data]);
    }

    function storegallerycat(Request $request) {
        GalleryCategory::insert([
            'cat_name' => $request->cat_name,
            'year' => $request->year,
        ]);
        return redirect()->route('gallery_cat');
    }

    public function editgallerycat($id){
        $gallerycat = GalleryCategory::findOrFail($id);
        // dd($gallerycat);
        return view('adminpanel.gallery_cat_edit',compact('gallerycat'));
    }// End Method 

    function updategallerycat(Request $request, $id) 
    {
        // dd($request->all(), $id);
        GalleryCategory::findOrFail($id)->update([
            'cat_name' => $request->cat_name,
            'year' => $request->year,
        ]);
        return redirect()->route('gallery_cat');
    }

    function deletegallerycat($id) 
    {

        GalleryCategory::findOrFail($id)->delete();

        return redirect()->back(); 
    }

    // Gallery Image work

    function GalleryImg()
    {
        $data = galleryImage::with('category')->get();
        // dd($data);
        $galleryCat = GalleryCategory::with('images')->get();
        return view('adminpanel.gallery_img', compact('data', 'galleryCat'));
    }

    public function storegalleryImg(Request $request)
    {
        // Ensure at least one file is uploaded
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();

                $file->move(public_path('gallery_images'), $imageName);

                GalleryImage::create([
                    'gallery_cat_id' => $request->gallery_cat_id,
                    'image' => $imageName,
                    'type' => $file->getClientOriginalExtension(),
                ]);
            }
        }

        return redirect()->back();
    }

    public function deletegalleryImg($id) 
    {
        // Find the image record by ID
        $image = GalleryImage::findOrFail($id);

        // Define the path to the image
        $imagePath = public_path('gallery_images/' . $image->image);

        // Check if the file exists and delete it
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete the record from the database
        $image->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Image deleted successfully!');
    }


}
