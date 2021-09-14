<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Gallery;
use Carbon;
use App\ExchangeRate;
use App\ExecutiveCommittee;
use App\Partner;
use App\NewsAndUpdate;

class HomePageController extends Controller
{
  
  
    
    

    public function __construct()
    {
    
       
        
    }
    
   
    public function home()
    {
        
        $title = "Home";
        $dateTime = Carbon\Carbon::now();
        $date = $dateTime->toDateString();
       
        $exchange_rates = ExchangeRate::whereDate('created_at',$date)->get();
        $first_exchange_rates = $exchange_rates->where('time','10am');
        $last_exchange_rates = $exchange_rates->where('time','2pm');
        $partners = Partner::where('status',true)->orderBy('id','desc')->get();
        $news = NewsAndUpdate::where('status',true)->orderBy('id','desc')->get();
        $executive_committees = ExecutiveCommittee::where('status',true)->get();
       return view('frontend.welcome',compact('title','first_exchange_rates','last_exchange_rates','date','executive_committees','partners','news'));
        
    }

    public function about(){
        $title = "About";
        return view('frontend.about',compact('title'));
    }

    public function member(){
        $title = "Member";
        return view('frontend.team',compact('title'));
    }
    public function acts_and_regulations(){
        $title = "Acts";
        return view('frontend.acts_and_regulations',compact('title'));
    }
    public function gallery(){
        $title = "Gallery";
        
        return view('frontend.gallery',compact('title'));
    }
    public function news_and_update(){
        $title = "News";
        return view('frontend.news_and_update',compact('title'));
    }
    public function contact(){
        $title = "Contact";
        return view('frontend.contact',compact('title'));
    }
    public function overview(){
        $title = "Overview";
        return view('frontend.remmitance_overview',compact('title'));
    }
    public function central_bank_message(){
        $title = "Message";
        return view('frontend.central_bank_message',compact('title'));
    }
    public function committee(){
        $title = "Committee";
        return view('frontend.committee',compact('title'));
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
    public function search(Request $request){
        
        $date = Carbon\Carbon::parse($request->date)->format('Y/m/d');
        $exchange_rates = ExchangeRate::whereDate('created_at',$date)->get();
        $first_exchange_rates = $exchange_rates->where('time','10am');
        $last_exchange_rates = $exchange_rates->where('time','2pm');    
        return response()->json(['first_exchange_rates' => $first_exchange_rates,'last_exchange_rates' => $last_exchange_rates,'date' => $date]);        

    }
}
