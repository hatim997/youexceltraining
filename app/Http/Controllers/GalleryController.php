<?php

namespace App\Http\Controllers;

use App\Http\adminpanel;
use Illuminate\Http\Request;
use App\Models\GalleryCategory;
use App\Models\galleryImage;

class GalleryController extends Controller
{

    function EventGallery() 
{
    $data = galleryImage::with('category')->get();

    // Group data by the 'year' from the category relation
    $dataGroupedByYear = $data->groupBy(function ($item) {
        return $item->category->year;
    });
    // dd($dataGroupedByYear);

    // Pass grouped data to the view
    return view('website.Events-gallery', compact('dataGroupedByYear'));
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

    function storegalleryImg(Request $request)
    {
        // dd($request->all());

        foreach ($request->file('image') as $file) {
            $path = $file->store('gallery_images', 'public');

            GalleryImage::create([
                'gallery_cat_id' => $request->gallery_cat_id,
                'image' => $path,
                'type' => $file->getClientOriginalExtension(),
            ]);
        }

        return redirect()->back();
    }

    function deletegalleryImg($id) 
    {

        GalleryImage::findOrFail($id)->delete();

        return redirect()->back(); 
    }


}
