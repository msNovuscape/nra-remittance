<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\ExecutiveCommittee;
use Carbon;

class ExecutiveCommitteeController extends Controller
{
  
  
    private $title,$route;
    

    public function __construct()
    {
        
        $this->title = "Executive Committee";
        $this->route = "/admin/executive_committees";
        
        
    }
    
   
    public function get_executive_committees()
    {
        
        $executive_committees = ExecutiveCommittee::all();
       return view('admin.executive_committees.index',['title' => $this->title,'route' => $this->route],compact('executive_committees'));
        
    }

    public function add_executive_committee(){
       
        return view('admin.executive_committees.add_form',['title' => $this->title,'route' => $this->route]);
    }

    public function post_executive_committee(Request $request){
        $this->validate($request, [
            
             'image' => 'mimes:jpeg,png',
             'phone' => 'required|numeric',
            
         ]);
         
         if($request->hasFile('image')){
            $path = request('image')->store('images/executive_committee');
         }
        
   
        $executive_committee =  ExecutiveCommittee::create([

            'designation' => $request['designation'],
            'phone' => $request['phone'],
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'address' => $request['address'],
            'city' => $request['city'],
            'country' => $request['country'],
            'email' => $request['email'],
            'image_path' => $path ?? null,
            
        ]);
        
      
        if($executive_committee){
            $request->session()->flash('alert-success', 'Executive Committee was successful added!');
            return redirect('/admin/executive_committees');
        }
        $request->session()->flash('alert-danger', 'Something went wrong!');
          return redirect('/admin/executive_committees');
        
    }

    public function edit_executive_committee(){
        
        $request = request();
        $executive_committee = ExecutiveCommittee::find($request->id);
        return view('admin.executive_committees.edit_form',['title' => $this->title,'route' => $this->route],compact('executive_committee'));
        
    }
    public function update_executive_committee(Request $request){
        
        
        $this->validate($request, [
            
            'image' => 'mimes:jpeg,png',
            'phone' => 'required|numeric',
           
        ]);
        
        
        $executive_committee = ExecutiveCommittee::find($request->id);
        if($request->hasFile('image')){
            
            if($executive_committee->image_path != null){
                unlink(storage_path('app/public/'.$executive_committee->image_path));
            }
            $path = request('image')->store('images/executive_committee');
            $executive_committee->image_path = $path;
           
        }
        $executive_committee->designation = $request->designation;
        $executive_committee->first_name = $request->first_name;
        $executive_committee->last_name = $request->last_name;
        $executive_committee->address = $request->address;
        $executive_committee->city = $request->city;
        $executive_committee->country = $request->country;
        $executive_committee->email = $request->email;
        $executive_committee->phone = $request->phone;
        $executive_committee->save();
        $request->session()->flash('alert-success', 'Executive Committee was successful updated!');
        return redirect('/admin/executive_committees');
        
        
    }

   

    public function delete_executive_committee(){
        $request = request();
        $executive_committee = ExecutiveCommittee::find($request->id);
        if($executive_committee->image_path != null){
            unlink(storage_path('app/public/'.$executive_committee->image_path));
        }
        $executive_committee->delete();
        $request->session()->flash('alert-success', 'Executive Committee was successful deleted!');
        return redirect('/admin/executive_committees');

    }
}
