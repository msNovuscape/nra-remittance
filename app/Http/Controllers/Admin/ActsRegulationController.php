<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\ActsAndRegulation;
use Carbon;

class ActsRegulationController extends Controller
{
  
  
    private $title,$route;
    

    public function __construct()
    {
        
        $this->title = "Acts and Regulations";
        $this->route = "/admin/acts_and_regulations";
        
        
    }
    
   
    public function get_acts_and_regulations()
    {
        $acts_and_regulations = ActsAndRegulation::all();
       return view('admin.acts_and_regulations.index',['title' => $this->title,'route' => $this->route],compact('acts_and_regulations'));
        
    }

    public function add_acts_and_regulation(){
       
        return view('admin.acts_and_regulations.add_form',['title' => $this->title,'route' => $this->route]);
    }

    public function post_acts_and_regulation(Request $request){
        $this->validate($request, [
            
             'image' => 'mimes:jpeg,png',
            
         ]);
         
         if($request->hasFile('image')){
            $path = request('image')->store('images/acts_and_regulations');
         }
        
   
        $acts_and_regulation =  ActsAndRegulation::create([

            'title' => $request['title'],
            'description' => $request['description'],
            'image_path' => $path ?? null,
         
            
        ]);
        
      
        if($acts_and_regulation){
            $request->session()->flash('alert-success', 'Acts and Regulation was successful added!');
            return redirect('/admin/acts_and_regulations');
        }
        $request->session()->flash('alert-danger', 'Something went wrong!');
          return redirect('/admin/acts_and_regulations');
        
    }

    public function edit_acts_and_regulation(){
        
        $request = request();
        $acts_and_regulation = ActsAndRegulation::find($request->id);
        return view('admin.acts_and_regulations.edit_form',['title' => $this->title,'route' => $this->route],compact('acts_and_regulation'));
        
    }
    public function update_acts_and_regulation(Request $request){
        
        
        $this->validate($request, [
            
            'image' => 'mimes:jpeg,png',
           
        ]);
        
        
        $acts_and_regulation = ActsAndRegulation::find($request->id);
        if($request->hasFile('image')){
            
            if($acts_and_regulation->image_path != null){
                unlink(storage_path('app/public/'.$acts_and_regulation->image_path));
            }
            $path = request('image')->store('images/acts_and_regulations');
            $acts_and_regulation->image_path = $path;
           
        }
        $acts_and_regulation->title = $request->title;
        $acts_and_regulation->description = $request->description;
       
        $acts_and_regulation->save();
        $request->session()->flash('alert-success', 'Acts and Regulation was successful updated!');
        return redirect('/admin/acts_and_regulations');
        
        
    }

    public function search_by_date(Request $request)
    {
        $date = $request->get('date');
        $exchange_rates = ActsAndRegulation::whereDate('created_at',$date)->get();
        
        if($exchange_rates){
            return view('admin.exchange_rates.index',['title' => $this->title,'route' => $this->route],compact('exchange_rates','date'));
        }
    }

    public function delete_acts_and_regulation(){
        $request = request();
        $acts_and_regulation = ActsAndRegulation::find($request->id);
        if($acts_and_regulation->image_path != null){
            unlink(storage_path('app/public/'.$acts_and_regulation->image_path));
        }
        $acts_and_regulation->delete();
        $request->session()->flash('alert-success', 'Acts and regulation was successful deleted!');
        return redirect('/admin/acts_and_regulations');

    }
}
