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
use App\MemberList;
use App\CentralBankMessage;
use App\ActsAndRegulation;

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
        $members = MemberList::where('status',true)->orderBy('id','desc')->get();
        return view('frontend.member',compact('title','members'));
    }
    public function acts_and_regulations(){
        $title = "Acts";
        $acts = ActsAndRegulation::where('status',true)->get();
        return view('frontend.acts_and_regulations',compact('title','acts'));
    }
    public function events_and_activities(){
        $title = "Events & Activities";
        return view('frontend.events_and_activities',compact('title'));
    }
    public function gallery(){
        $title = "Gallery";
        $galleries = Gallery::where('status',true)->orderBy('id','desc')->get();
        return view('frontend.gallery',compact('title','galleries'));
    }
    public function news_and_update(){
        $title = "News";
        $news = NewsAndUpdate::where('status',true)->orderBy('id','desc')->get();
        return view('frontend.news_and_update',compact('title','news'));
    }
    public function single_news(){
        $request = request();
        $single_news = NewsAndUpdate::findorfail($request['id']);
        $title = $single_news->title;
        return view('frontend.single_news',compact('title','single_news'));
    }
    public function single_gallery(){
        $request = request();
        $single_gallery = Gallery::findorfail($request['id']);
        $title = $single_gallery->title;
        return view('frontend.single_gallery',compact('title','single_gallery'));
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
        $message = CentralBankMessage::where('status',true)->get();
        return view('frontend.central_bank_message',compact('title','message'));
    }
    public function committee(){
        $title = "Committee";
        $executive_committees = ExecutiveCommittee::where('status',true)->get();
        return view('frontend.committee',compact('title','executive_committees'));
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
