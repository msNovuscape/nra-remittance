<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\MemberList;


class MemberListController extends Controller
{
  
  
    private $title,$route;
    

    public function __construct()
    {
        
        $this->title = "Member List";
        $this->route = "/admin/member_lists";
        
        
    }
    
   
    public function get_member_lists()
    {
        
        $member_lists = MemberList::all();
       return view('admin.member_lists.index',['title' => $this->title,'route' => $this->route],compact('member_lists'));
        
    }

    public function add_member_list(){
       
        return view('admin.member_lists.add_form',['title' => $this->title,'route' => $this->route]);
    }

    public function post_member_list(Request $request){
        $this->validate($request, [
            
             'image' => 'mimes:jpeg,png',
             'phone' => 'required|numeric',
            
         ]);
         
         
         if($request->hasFile('image')){
            $path = request('image')->store('images/member_list');
         }
        
   
        $member_list =  MemberList::create([

            'phone' => $request['phone'],
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'address' => $request['address'],
            'city' => $request['city'],
            'country' => $request['country'],
            'email' => $request['email'],
            'image_path' => $path ?? null,
            
        ]);
        
      
        if($member_list){
            $request->session()->flash('alert-success', 'Member was successful added!');
            return redirect('/admin/member_lists');
        }
        $request->session()->flash('alert-danger', 'Something went wrong!');
          return redirect('/admin/member_lists');
        
    }

    public function edit_member_list(){
        
        $request = request();
        $member_list = MemberList::find($request->id);
        return view('admin.member_lists.edit_form',['title' => $this->title,'route' => $this->route],compact('member_list'));
        
    }
    public function update_member_list(Request $request){
        
        
        $this->validate($request, [
            
            'image' => 'mimes:jpeg,png',
            'phone' => 'required|numeric',
           
        ]);
        
        
        
        $member_list = MemberList::find($request->id);
        if($request->hasFile('image')){
            
            if($member_list->image_path != null){
                unlink(storage_path('app/public/'.$member_list->image_path));
            }
            $path = request('image')->store('images/member_list');
            $member_list->image_path = $path;
           
        }
        $member_list->phone = $request->phone;
        $member_list->first_name = $request->first_name;
        $member_list->last_name = $request->last_name;
        $member_list->address = $request->address;
        $member_list->city = $request->city;
        $member_list->country = $request->country;
        $member_list->email = $request->email;
        $member_list->save();
        $request->session()->flash('alert-success', 'Member was successful updated!');
        return redirect('/admin/member_lists');
        
        
    }

    

    public function delete_member_list(){
        $request = request();
        $member_list = MemberList::find($request->id);
        if($member_list->image_path != null){
            unlink(storage_path('app/public/'.$member_list->image_path));
        }
        $member_list->delete();
        $request->session()->flash('alert-success', 'Member was successful deleted!');
        return redirect('/admin/member_lists');

    }
}
