<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\NewsAndUpdate;
use Carbon;

class NewsUpdateController extends Controller
{
  
  
    private $title,$route;
    

    public function __construct()
    {
        
        $this->title = "News and Updates";
        $this->route = "/admin/news_and_updates";
        
        
    }
    
   
    public function get_news_and_updates()
    {
        $news_and_updates = NewsAndUpdate::all();
       return view('admin.news_and_updates.index',['title' => $this->title,'route' => $this->route],compact('news_and_updates'));
        
    }

    public function add_news_and_update(){
       
        return view('admin.news_and_updates.add_form',['title' => $this->title,'route' => $this->route]);
    }

    public function post_news_and_update(Request $request){
        $this->validate($request, [
            
             'image' => 'mimes:jpeg,png',
            
         ]);
         
         if($request->hasFile('image')){
            $path = request('image')->store('images/news_and_updates');
         }
        
   
        $news_and_update =  NewsAndUpdate::create([

            'title' => $request['title'],
            'description' => $request['description'],
            'image_path' => $path ?? null,
         
            
        ]);
        
      
        if($news_and_update){
            $request->session()->flash('alert-success', 'News and Update was successful added!');
            return redirect('/admin/news_and_updates');
        }
        $request->session()->flash('alert-danger', 'Something went wrong!');
          return redirect('/admin/news_and_updates');
        
    }

    public function edit_news_and_update(){
        
        $request = request();
        $news_and_update = NewsAndUpdate::find($request->id);
        return view('admin.news_and_updates.edit_form',['title' => $this->title,'route' => $this->route],compact('news_and_update'));
        
    }
    public function update_news_and_update(Request $request){
        
        
        $this->validate($request, [
            
            'image' => 'mimes:jpeg,png',
           
        ]);
        
        
        $news_and_update = NewsAndUpdate::find($request->id);
        if($request->hasFile('image')){
            
            if($news_and_update->image_path != null){
                unlink(storage_path('app/public/'.$news_and_update->image_path));
            }
            $path = request('image')->store('images/news_and_updates');
            $news_and_update->image_path = $path;
           
        }
        $news_and_update->title = $request->title;
        $news_and_update->description = $request->description;
       
        $news_and_update->save();
        $request->session()->flash('alert-success', 'News and Update was successful updated!');
        return redirect('/admin/news_and_updates');
        
        
    }

   

    public function delete_news_and_update(){
        $request = request();
        $news_and_update = NewsAndUpdate::find($request->id);
        if($news_and_update->image_path != null){
            unlink(storage_path('app/public/'.$news_and_update->image_path));
        }
        $news_and_update->delete();
        $request->session()->flash('alert-success', 'News and Update was successful deleted!');
        return redirect('/admin/news_and_updates');

    }
}
