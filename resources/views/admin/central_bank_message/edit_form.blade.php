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
                <a class="nav-link" href="{{ route("get_message")}}">
                   Message list
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route("add_message")}}">
                  Add Central Bank Message
                </a>
              </li>
</ul>
@endsection
@section('content')

<div class="content">
        <div class="row">
          <div class="col-md-{{$message->image_path != null ? '8' : '10'}}">
            <div class="card">
              <div class="card-header">
                <h5 class="title"> Edit {{$title}}</h5>
              </div>
              <div class="card-body">
                <form method = "POST" action = "{{route('update_message',['id' => $message->id])}}" enctype="multipart/form-data">
                  {{csrf_field()}}
                  
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for = "title">Title</label>
                        <input type="text" id = "title" name = "title" value = "{{$message->title}}" class="form-control" placeholder="Title" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8 pr-1">
                      <div>
                        <label for = "description">Desription</label>
                        <textarea  class="form-control" id = "description" name = "description" placeholder="" required>{{$message->description}}</textarea>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div>
                        <label for = "image">Image</label>
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
          @if($message->image_path != null)
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar" src="{{ asset( 'storage/' . $message->image_path ) }}" alt="No image">
                    <h5 class="title">{{$message->title}}</h5>
                  </a>
      
                  <p class="description">
                    {{$message->created_at->toDateString()}}
                  </p>
                </div>
                
              </div>
              
            </div>
          </div>
          @endif
        </div>
      </div>
@endsection
