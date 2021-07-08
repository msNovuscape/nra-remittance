<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\CentralBankMessage;


class CentralBankMessageController extends Controller
{
  
  
    private $title,$route;
    
    

    public function __construct()
    {
        
        $this->title = "Central Bank Message";
        $this->route = "/admin/get_message";
        
        
    }
    
   
    public function get_message()
    {
        $messages = CentralBankMessage::all();
       return view('admin.central_bank_message.index',['title' => $this->title,'route' => $this->route],compact('messages'));
        
    }

    public function add_message(){
       
        return view('admin.central_bank_message.add_form',['title' => $this->title,'route' => $this->route]);
    }

    public function post_message(Request $request){
        $this->validate($request, [
            
             'image' => 'mimes:jpeg,png',
            
         ]);
         
         if($request->hasFile('image')){
            $path = request('image')->store('images/central_bank_messages');
         }
        
   
        $messages =  CentralBankMessage::create([

            'title' => $request['title'],
            'description' => $request['description'],
            'image_path' => $path ?? null,
         
            
        ]);
        
      
        if($messages){
            $request->session()->flash('alert-success', 'Message was successful added!');
            return redirect('/admin/get_message');
        }
        $request->session()->flash('alert-danger', 'Something went wrong!');
          return redirect('/admin/get_message');
        
    }

    public function edit_message(){
        
        $request = request();
        $message = CentralBankMessage::find($request->id);
        return view('admin.central_bank_message.edit_form',['title' => $this->title,'route' => $this->route],compact('message'));
        
    }
    public function update_message(Request $request){
        
        
        $this->validate($request, [
            
            'image' => 'mimes:jpeg,png',
           
        ]);
        
        
        $message = CentralBankMessage::find($request->id);
        if($request->hasFile('image')){
            
            if($message->image_path != null){
                unlink(storage_path('app/public/'.$message->image_path));
            }
            $path = request('image')->store('images/central_bank_messages');
            $message->image_path = $path;
           
        }
        $message->title = $request->title;
        $message->description = $request->description;
       
        $message->save();
        $request->session()->flash('alert-success', 'Message was successful updated!');
        return redirect('/admin/get_message');
        
        
    }


    public function delete_message(){
        $request = request();
        $message = CentralBankMessage::find($request->id);
        if($message->image_path != null){
            unlink(storage_path('app/public/'.$message->image_path));
        }
        $message->delete();
        $request->session()->flash('alert-success', 'Message was successful deleted!');
        return redirect('/admin/get_message');

    }
}
