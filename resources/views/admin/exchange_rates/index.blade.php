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
                <a class="nav-link" href="{{ route("add_exchange_rates")}}">
                  Add exchange rate
                </a>
              </li>
</ul>
<form id = "search_form" method = "POST" action = "{{route('search_by_date')}}">
{{csrf_field()}}
              <div class="input-group no-border">
            
                <input id = "date" type="date" name="date" value = {{$date}} class="form-control" placeholder="Search..." required>
                <div class="input-group-append">
                  <div id = "search" class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
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
                      <button class="btn btn-primary" onclick="window.location='{{ route("add_exchange_rates")}}'">Add new</button>
                </div>
         
  
             
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Currency
                      </th>
                      <th>
                        Unit
                      </th>
                      <th>
                        Buying Rate
                      </th>
                      <th>
                        Selling Rate
                      </th>
                      <th class="text-right">
                        Action
                      </th>
                    </thead>
                    <tbody>
                    @foreach($exchange_rates as $exchange_rate)
                    <tr>
                        <td>
                          {{$exchange_rate->currency}}
                        </td>
                        <td>
                        1
                        </td>
                        <td>
                        {{$exchange_rate->buying_rate}}
                        </td>
                        <td>
                        {{$exchange_rate->selling_rate}}
                        </td>
                        <td class="text-right">
                        <a  href="{{route('edit_exchange_rate',['id' => $exchange_rate->id])}}"><i data-toggle="tooltip" data-placement="top" title="Edit" class="far fa-edit"></i></a>&nbsp;&nbsp;<a onclick="return confirm('Are you sure to delete this item?')" href = "{{route('delete_exchange_rate',['id' => $exchange_rate->id])}}"><i data-toggle="tooltip" data-placement="top" title="Delete" class="far fa-trash-alt"></i></a>
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
<script>

$( "#search" ).click(function() {
   $( "#search_form" ).submit();
  // if(date != '')
  //       {
  //           $.ajax({
  //               url: '{{route('search_by_date')}}',
  //               method:"POST",
  //               data:{date:date,"_token": "{{ csrf_token() }}"},
  //               success:function(data)
  //               {
  //                   alert('success');
  //               }
  //           });
  //       }
  //       else
  //       {
  //           alert("Please Select the Date");
  //       }
});
        
   
</script>
@endsection
