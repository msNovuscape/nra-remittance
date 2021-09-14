<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Partner;
use Carbon;

class PartnerController extends Controller
{
  
  
    private $title,$route;
    

    public function __construct()
    {
        
        $this->title = "Partner";
        $this->route = "/admin/get_partners";
        
        
    }
    
   
    public function get_partner()
    {
        $partners = Partner::all();
       return view('admin.partners.index',['title' => $this->title,'route' => $this->route],compact('partners'));
        
    }

    public function add_partner(){
       
        return view('admin.partners.add_form',['title' => $this->title,'route' => $this->route]);
    }

    public function post_partner(Request $request){
        $this->validate($request, [
            
             'image' => 'mimes:jpeg,png',
            
         ]);
         
         if($request->hasFile('image')){
            $path = request('image')->store('images/partner');
         }
        
   
        $galleries =  Partner::create([

            'name' => $request['name'],
            'address' => $request['address'],
            'image_path' => $path ?? null,
         
            
        ]);
        
      
        if($galleries){
            $request->session()->flash('alert-success', 'Partner was successful added!');
            return redirect('/admin/partners');
        }
        $request->session()->flash('alert-danger', 'Something went wrong!');
          return redirect('/admin/partners');
        
    }

    public function edit_partner(){
        
        $request = request();
        $partner = Partner::find($request->id);
        return view('admin.partners.edit_form',['title' => $this->title,'route' => $this->route],compact('partner'));
        
    }
    public function update_partner(Request $request){
        
        
        $this->validate($request, [
            
            'image' => 'mimes:jpeg,png',
           
        ]);
        
        
        $partner = Partner::find($request->id);
        if($request->hasFile('image')){
            
            if($partner->image_path != null){
                unlink(storage_path('app/public/'.$partner->image_path));
            }
            $path = request('image')->store('images/partner');
            $partner->image_path = $path;
           
        }
        $partner->name = $request->name;
        $partner->address = $request->address;
       
        $partner->save();
        $request->session()->flash('alert-success', 'Partner was successful updated!');
        return redirect('/admin/partners');
        
        
    }


    public function delete_partner(){
        $request = request();
        $partner = Partner::find($request->id);
        if($partner->image_path != null){
            unlink(storage_path('app/public/'.$partner->image_path));
        }
        $partner->delete();
        $request->session()->flash('alert-success', 'Partner was successful deleted!');
        return redirect('/admin/partners');

    }
}
