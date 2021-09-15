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
  List {{$title}}
@endsection
@section('search')
<ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{route("add_member_list")}}">
                  Add member
                </a>
              </li>
</ul>

@endsection
@section('content')


<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
            <div class="flash-message">
              @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))

                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
              @endforeach
            </div> <!-- end .flash-message -->
              <div class="card-header">
                <h4 class="card-title"> {{$title}}</h4>
                <div  class="col-md-2" style = "margin-left:85%">
                      <button class="btn btn-primary" onclick="window.location='{{ route("add_member_list")}}'">Add new</button>
                </div>
         
  
             
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Full Name
                      </th>
                      <th>
                        Post
                      </th>
                      
                      <th>
                        Address
                      </th>
                      <th>
                        Contact
                      </th>
                      <th>
                        Website
                      </th>
                      <th class="text-right">
                        Action
                      </th>
                    </thead>
                    <tbody>
                     @foreach($member_lists as $member_list)
                      <tr>
                          <td>
                            {{$member_list->name}}
                          </td>
                          <td>
                          {{$member_list->designation}}
                          </td>
                          
                          <td>
                          {{$member_list->address}}
                          </td>
                          <td>
                          {{$member_list->phone}}
                          </td>
                          <td>
                          <a target = "_blank" href = "{{$member_list->website_link}}">{{$member_list->website_link}}</a>
                          </td>
                          <td class="text-right">
                            <a  href="{{route('edit_member_list',['id' => $member_list->id])}}"><i data-toggle="tooltip" data-placement="top" title="Edit" class="far fa-edit"></i></a>&nbsp;&nbsp;<a onclick="return confirm('Are you sure to delete this item?')" href = "{{route('delete_member_list',['id' => $member_list->id])}}"><i data-toggle="tooltip" data-placement="top" title="Delete" class="far fa-trash-alt"></i></a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
@endsection
@section('script')

@endsection
