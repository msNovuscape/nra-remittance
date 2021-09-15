


@extends('admin.master')
@section('title')
  Admin Dashboard
@endsection


@section('content')

    <div class="content">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">{{App\ExecutiveCommittee::count()}}</h5>
                <h4 class="card-title">Executive Committee</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{route('get_executive_committees')}}">List</a>
                    <a class="dropdown-item" href="{{route('add_executive_committee')}}">Add</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
             
              </div>
              <div class="card-footer">
                 <div class="stats">
                  <!-- <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated -->
                </div> 
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">{{App\MemberList::count()}}</h5>
                <h4 class="card-title">Members</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{route('get_member_lists')}}">List</a>
                    <a class="dropdown-item" href="{{route('add_member_list')}}">Add</a>
                    
                  </div>
                </div>
              </div>
              <div class="card-body">
                
              </div>
              <div class="card-footer">
                <div class="stats">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">{{App\NewsAndUpdate::count()}}</h5>
                <h4 class="card-title">News and Update</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{route('get_news_and_updates')}}">List</a>
                    <a class="dropdown-item" href="{{route('add_news_and_update')}}">Add</a>
                    
                  </div>
                </div>
              </div>
              <div class="card-body">
               
              </div>
              <div class="card-footer">
                <div class="stats">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">Today's</h5>
                <h4 class="card-title">Exchange Rates</h4>
                <div class="dropdown text-right">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    
                    <a class="dropdown-item" href="{{route('add_exchange_rates')}}">Add</a>
                    
                  </div>
                </div>
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
                     
                    
                      @foreach(App\ExchangeRate::whereDate('created_at',\Carbon\Carbon::now()->toDateString())->get() as $exchange_rate)
                      
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
          </div> -->
          <!-- <div class="col-md-6">
            <div class="card  card-tasks">
              <div class="card-header ">
                <h5 class="card-category">Backend development</h5>
                <h4 class="card-title">Tasks</h4>
              </div>
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" checked>
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td class="text-left">Sign contract for "What are conference organizers afraid of?"</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox">
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td class="text-left">Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" checked>
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td class="text-left">Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      @endsection