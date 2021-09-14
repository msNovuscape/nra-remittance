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
                <a class="nav-link" href="{{ route("add_partner")}}">
                  Add partner
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
                      <button class="btn btn-primary" onclick="window.location='{{ route("add_partner")}}'">Add new</button>
                </div>
         
  
             
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Address
                      </th>
                      <th>
                        Logo
                      </th>

                      <th class="text-right">
                        Action
                      </th>
                    </thead>
                    <tbody>
                      @foreach($partners as $partner)
                      <tr>
                          <td>
                            {{$partner->name}}
                          </td>
                          <td>
                          {{$partner->address}}
                          </td>
                          <td>
                           <img class="avatar border-gray" src="{{ asset( 'storage/' . $partner->image_path ) }}" alt = "No image">
                          </td>
                          
                          <td class="text-right">
                            <a  href="{{route('edit_partner',['id' => $partner->id])}}"><i data-toggle="tooltip" data-placement="top" title="Edit" class="far fa-edit"></i></a>&nbsp;&nbsp;<a onclick="return confirm('Are you sure to delete this item?')" href = "{{route('delete_partner',['id' => $partner->id])}}"><i data-toggle="tooltip" data-placement="top" title="Delete" class="far fa-trash-alt"></i></a>
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
