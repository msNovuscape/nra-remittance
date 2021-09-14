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
                <a class="nav-link" href="{{ route("get_partners")}}">
                  List Partner
                </a>
              </li>
</ul>
@endsection

<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title"> Add {{$title}}</h5>
                <!-- <div class="col-md-4" style = "margin-left:80%">
                      <button class="btn btn-primary" onclick="window.location='{{ route("get_exchange_rates")}}'">List Exchange Rate</button>
                </div> -->
              </div>
              <div class="card-body">
                <form method = "POST" action = "{{route('post_partner')}}" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for = "name">Name</label>
                        <input type="text" id = "name" name = "name" class="form-control" placeholder="Patner name" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8 pr-1">
                      <div>
                        <label for = "address">Address</label>
                        <input  class="form-control" id = "address" name = "address" placeholder="Address" required>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div>
                        <label for = "image">Logo</label>
                        <input type="file" name = "image" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                          <button type = "submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
        </div>
      </div>
@endsection
