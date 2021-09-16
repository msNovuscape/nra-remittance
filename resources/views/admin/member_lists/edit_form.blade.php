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
                <a class="nav-link" href="{{ route("get_member_lists")}}">
                   Member list
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route("add_member_list")}}">
                  Add member list
                </a>
              </li>
</ul>
@endsection
@section('content')

<div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title"> Edit {{$title}}</h5>
              </div>
              <div class="card-body">
                <form method = "POST" action = "{{route('update_member_list',['id' => $member_list->id])}}" enctype="multipart/form-data">
                  {{csrf_field()}}
                  
                  <div class="row">
                  @foreach($errors as $error)
                    $error->message
                  @endforeach
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for = "name">Name</label>
                        <input type="text" class="form-control" id = "name" name = "name" placeholder="Full Name" value = "{{$member_list->name}}" required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for = "designation">Designation</label>
                        <input type="text" id = "designation" name = "designation" class="form-control" placeholder="Designation" value = "{{$member_list->designation}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                    
                      <div class="form-group">
                      
                        <label for = "phone">Phone</label>
                          
    

                        <input type="text" id = "phone" name = "phone" class="form-control" placeholder="Phone" value = "{{$member_list->phone}}">
                      </div>
                         @error('phone')
                              <p style = "color:red" class="flash-message">{{ $message }}</p>
                          @enderror
                    </div>
                    <div class="col-md-6 pl-1">
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
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for = "organization">Organization</label>
                        <input type="text" id = "organization" name = "organization" class="form-control" placeholder="Organization Name" value = "{{$member_list->organization}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for = "website_link">Website Link</label>
                        <input type="text" id = "website_link" name = "website_link" class="form-control" placeholder="Website Link" value = "{{$member_list->website_link}}">
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for = "address">Address</label>
                        <input type="text" id = "address" name = "address" class="form-control" placeholder="Address" value = "{{$member_list->address}}" required>
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                  <div class="col-md-4">
                      <button type = "submit" class="btn btn-primary btn-block">Edit</button>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="{{ asset( 'storage/' . $member_list->image_path ) }}" alt="No image">
                    <h5 class="title">{{$member_list->first_name .' '. $member_list->last_name}}</h5>
                  </a>
                  <p class="description">
                  {{$member_list->organization}}
                  </p>
                  <p class="description">
                    {{$member_list->phone}}
                  </p>
                </div>
                <p class="description text-center">
                {{$member_list->address}}
                </p>
                <p class="description text-center">
                {{$member_list->city.','.$member_list->country}}
                </p>
                <p class="description text-center">
                {{$member_list->email}}
                </p>
                <p class="description text-center">
                <a target = "blank" href = "{{$member_list->website_link}}">{{$member_list->website_link}}</a>
</p>
              </div>
              <!-- <hr> -->
              <!-- <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div> -->
            </div>
          </div>
        </div>
      </div>
@endsection
