<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Gallery;
use Carbon;

class GalleryController extends Controller
{
  
  
    private $title,$route;
    

    public function __construct()
    {
        
        $this->title = "Gallery";
        $this->route = "/admin/get_gallery";
        
        
    }
    
   
    public function get_gallery()
    {
        $galleries = Gallery::all();
       return view('admin.gallery.index',['title' => $this->title,'route' => $this->route],compact('galleries'));
        
    }

    public function add_gallery(){
       
        return view('admin.gallery.add_form',['title' => $this->title,'route' => $this->route]);
    }

    public function post_gallery(Request $request){
        $this->validate($request, [
            
             'image' => 'mimes:jpeg,png',
            
         ]);
         
         if($request->hasFile('image')){
            $path = request('image')->store('images/gallery');
         }
        
   
        $galleries =  Gallery::create([

            'title' => $request['title'],
            'description' => $request['description'],
            'image_path' => $path ?? null,
         
            
        ]);
        
      
        if($galleries){
            $request->session()->flash('alert-success', 'Gallery was successful added!');
            return redirect('/admin/get_gallery');
        }
        $request->session()->flash('alert-danger', 'Something went wrong!');
          return redirect('/admin/get_gallery');
        
    }

    public function edit_gallery(){
        
        $request = request();
        $gallery = Gallery::find($request->id);
        return view('admin.gallery.edit_form',['title' => $this->title,'route' => $this->route],compact('gallery'));
        
    }
    public function update_gallery(Request $request){
        
        
        $this->validate($request, [
            
            'image' => 'mimes:jpeg,png',
           
        ]);
        
        
        $gallery = Gallery::find($request->id);
        if($request->hasFile('image')){
            
            if($gallery->image_path != null){
                unlink(storage_path('app/public/'.$gallery->image_path));
            }
            $path = request('image')->store('images/gallery');
            $gallery->image_path = $path;
           
        }
        $gallery->title = $request->title;
        $gallery->description = $request->description;
       
        $gallery->save();
        $request->session()->flash('alert-success', 'Gallery was successful updated!');
        return redirect('/admin/get_gallery');
        
        
    }


    public function delete_gallery(){
        $request = request();
        $gallery = Gallery::find($request->id);
        if($gallery->image_path != null){
            unlink(storage_path('app/public/'.$gallery->image_path));
        }
        $gallery->delete();
        $request->session()->flash('alert-success', 'Gallery was successful deleted!');
        return redirect('/admin/get_gallery');

    }
}
