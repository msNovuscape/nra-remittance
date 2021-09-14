<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
@extends('admin.master')
@section('title')
  Edit {{$title}}
@endsection
@section('search')
<ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route("get_exchange_rates")}}">
                  List exchange rate
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route("add_exchange_rates")}}">
                  Add exchange rate
                </a>
              </li>
</ul>
@endsection
@section('content')

<div class="content">
        <div class="row">
          <div class="col-md-10">
            <div class="card">
              <div class="card-header">
                <h5 class="title"> Edit {{$title}}</h5>
                <!-- <div class="col-md-4">
                      <button class="btn btn-primary" onclick="window.location='{{ route("get_exchange_rates")}}'">List Exchange Rate</button>
                </div>
                <div  class="col-md-4">
                      <button class="btn btn-primary" onclick="window.location='{{ route("add_exchange_rates")}}'">Add new</button>
                </div> -->
              </div>
              <div class="card-body">
                <form method = "POST" action = "{{route('update_exchange_rate',['id' => $exchange_rate->id])}}">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <input type="radio" name = "time"  id = "10am" value = "10am" {{ $exchange_rate->time == '10am' ? 'checked' : '' }} required>

                        <label for = "10am" >10am</label>

                        <input type="radio" name = "time"  id = "2pm" value = "2pm" {{ $exchange_rate->time == '2pm' ? 'checked' : '' }} required>

                        <label for = "2pm" >2pm</label>

                        
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label>Currency</label>
                        <input type="text" name = "currency" value = "{{$exchange_rate->currency}}" class="form-control" placeholder="Currency">
                        
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label>Unit</label>
                        <input type="text" name = "unit" class="form-control" disabled="" placeholder="Unit" value="1">
                      </div>
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Buying Rate</label>
                        <input type="text" name = "buying_rate" value = "{{$exchange_rate->buying_rate}}" class="form-control" placeholder="Buying Rate">
                      </div>
                    </div>
          
                
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label>Selling Rate</label>
                        <input type="text" name = "selling_rate" value = "{{$exchange_rate->selling_rate}}" class="form-control" placeholder="Selling Rate">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-6">
                  
                          <button type = "submit" class="btn btn-primary btn-block">Edit</button>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
        </div>
      </div>
@endsection
