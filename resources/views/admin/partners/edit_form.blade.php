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
                <a class="nav-link" href="{{ route("get_partners")}}">
                  List partner
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route("add_partner")}}">
                  Add partner
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
                <form method = "POST" action = "{{route('update_partner',['id' => $partner->id])}}" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for = "name">Name</label>
                        <input type="text" id = "name" name = "name" value = "{{$partner->name}}" class="form-control" placeholder="Partner name" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8 pr-1">
                      <div>
                        <label for = "address">Address</label>
                        <input type = "text"  class="form-control" id = "address" name = "address" placeholder="Address" value = "{{$partner->address}}" required>
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
                    <img class="avatar border-gray" src="{{ asset( 'storage/' . $partner->image_path ) }}" alt="No image">
                    <h5 class="title">{{$partner->name}}</h5>
                  </a>
                  <p class="address">
                    <b>{{$partner->created_at->toDateString()}}</b>
                  </p>
                </div>
                
              </div>
              <hr>
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
