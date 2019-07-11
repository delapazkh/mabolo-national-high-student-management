@extends('layouts.dashboard')

@section('title', 'Mabolo National High School')

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-category">
              All students List 
              <a href="/enrollment/create">
                <i class="fas fa-plus-circle" style="color:green; cursor: pointer;"></i>
              </a>
            </h5>

          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Email
                  </th>
                  <th>
                    Role
                  </th>
                  <th class="text-right">
                    Created at
                  </th>
                  <th>
                  </th>
                </thead>
                <tbody>
                  @foreach($users as $user)
                    <tr>
                      <td>
                        #{{$user->id}}
                      </td>
                      <td>
                        {{$user->name}}
                      </td>
                      <td>
                        {{$user->email}}
                      </td>
                      <td>
                        No role yet
                      </td>
                      <td class="text-right">
                        {{$user->created_at}}
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
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    </div>
  </div>
  <footer class="footer">
    <div class="container-fluid">
    </div>
  </footer>
@endsection