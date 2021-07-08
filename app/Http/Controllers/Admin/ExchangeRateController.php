<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\ExchangeRate;
use Carbon;

class ExchangeRateController extends Controller
{
  
  
    private $title,$route;
    

    public function __construct()
    {
        
        $this->title = "Exchange Rates";
        $this->route = "/admin/exchange_rates";
        
        
    }
    
   
    public function get_exchange_rates()
    {
        $dateTime = Carbon\Carbon::now();
        $date = $dateTime->toDateString();
       
        $exchange_rates = ExchangeRate::whereDate('created_at',$date)->get();
       return view('admin.exchange_rates.index',['title' => $this->title,'route' => $this->route],compact('exchange_rates','date'));
        
    }

    public function add_exchange_rates(){
       
        return view('admin.exchange_rates.add_form',['title' => $this->title,'route' => $this->route]);
    }

    public function post_exchange_rates(Request $request){
        $exchange_rates =  ExchangeRate::create([
            'currency' => $request['currency'],
            'buying_rate' => $request['buying_rate'],
            'selling_rate' => $request['selling_rate'],
            
        ]);
        
      
        if($exchange_rates){
            $request->session()->flash('alert-success', 'Exchange Rate was successful added!');
            return redirect('/admin/exchange_rates');
        }
        $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect('/admin/exchange_rates');
        
    }

    public function edit_exchange_rate(){
        
        $request = request();
        $exchange_rate = ExchangeRate::find($request->id);
        return view('admin.exchange_rates.edit_form',['title' => $this->title,'route' => $this->route],compact('exchange_rate'));
        
    }
    public function update_exchange_rate(){
        
        $request = request();
        
        $exchange_rate = ExchangeRate::find($request->id);
        $exchange_rate->currency = $request->currency;
        $exchange_rate->buying_rate = $request->buying_rate;
        $exchange_rate->selling_rate = $request->selling_rate;
        $exchange_rate->save();
        $request->session()->flash('alert-success', 'Exchange Rate was successful updated!');
        return redirect('/admin/exchange_rates');
        
        
    }

    public function search_by_date(Request $request)
    {
        $date = $request->get('date');
        $exchange_rates = ExchangeRate::whereDate('created_at',$date)->get();
        
        if($exchange_rates){
            return view('admin.exchange_rates.index',['title' => $this->title,'route' => $this->route],compact('exchange_rates','date'));
        }
    }

    public function delete_exchange_rate(){
        $request = request();
        $exchange_rate = ExchangeRate::find($request->id);
        $exchange_rate->delete();
        $request->session()->flash('alert-success', 'Exchange Rate was successful deleted!');
        return redirect('/admin/exchange_rates');

    }
}
