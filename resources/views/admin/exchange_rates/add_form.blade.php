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
  Add {{$title}}
@endsection
@section('content')
@section('search')
<ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route("get_exchange_rates")}}">
                  List exchange rate
                </a>
              </li>
</ul>
@endsection

<div class="content">
        <div class="row">
          <div class="col-md-10">
            <div class="card">
              <div class="card-header">
                <h5 class="title"> Add {{$title}}</h5>
                <!-- <div class="col-md-4" style = "margin-left:80%">
                      <button class="btn btn-primary" onclick="window.location='{{ route("get_exchange_rates")}}'">List Exchange Rate</button>
                </div> -->
              </div>
              <div class="card-body">
                <form method = "POST" action = "{{route('post_exchange_rates')}}">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <input type="radio" name = "time"  id = "10am" value = "10am"  required>

                        <label for = "10am" >10am</label>

                        <input type="radio" name = "time"  id = "2pm" value = "2pm"  required>

                        <label for = "2pm" >2pm</label>

                        
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label>Currency</label>
                        <input type="text" name = "currency" class="form-control" placeholder="Currency" required>
                        
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label>Unit</label>
                        <input type="number" name = "unit" class="form-control" disabled="" placeholder="Unit" value="1">
                      </div>
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Buying Rate</label>
                        <input type="number" name = "buying_rate" onchange="setTwoNumberDecimal" min="0" step="0.000001" class="form-control" placeholder="Buying Rate" required>
                      </div>
                    </div>
          
                
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                      <label>Selling Rate</label>
                        <input type="number" name = "selling_rate" onchange="setTwoNumberDecimal" min="0" step="0.000001"  class="form-control" placeholder="Selling Rate" required>
                      </div>
                    </div>
                  </div>
  
                  <div class="row">
                  <div class="col-md-6">
                  
                          <button type = "submit" class="btn btn-primary btn-block">Submit</button>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      @section('script')
      function setTwoNumberDecimal(event) {
          this.value = parseFloat(this.value).toFixed(6);
      }
      @endsection
@endsection
