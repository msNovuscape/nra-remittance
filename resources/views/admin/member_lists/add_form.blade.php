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
                <a class="nav-link" href="{{ route("get_member_lists")}}">
                  List member
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
                <form method = "POST" action = "{{route('post_member_list')}}" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="row">
                  @foreach($errors as $error)
                    $error->message
                  @endforeach
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for = "first_name">First Name</label>
                        <input type="text" class="form-control" id = "first_name" name = "first_name" placeholder="First name" value = "{{old('first_name')}}" required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for = "last_name">Last Name</label>
                        <input type="text" id = "last_name" name = "last_name" class="form-control" placeholder="Last name" value = "{{old('last_name')}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                    
                      <div class="form-group">
                      
                        <label for = "phone">Phone</label>
                          
    

                        <input type="text" id = "phone" name = "phone" class="form-control" placeholder="Phone" value = "{{old('phone')}}" required>
                      </div>
                         @error('phone')
                              <p style = "color:red" class="flash-message">{{ $message }}</p>
                          @enderror
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" id = "email" name = "email" class="form-control" placeholder="Email" value = "{{old('email')}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for = "address">Address</label>
                        <input type="text" id = "address" name = "address" class="form-control" placeholder="Home Address" value = "{{old('address')}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label for = "city">City</label>
                        <input type="text" id = "city" name = "city" class="form-control" placeholder="City" value = "{{old('city')}}">
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label for = "country">Country</label>
                        <input type="text" id = "country" name = "country" class="form-control" placeholder="Country" value = "{{old('country')}}">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div>
                        <label for = "image">Image</label>
                        
                        <input type="file" name = "image" value = "{{old('image')}}" class="form-control">
                         @error('image')
                              <p style = "color:red" class="fash-message">{{ $message }}</p>
                          @enderror
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
