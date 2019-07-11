@extends('layouts.dashboard')

@section('title', 'Mabolo National High School')

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h5 class="card-category">
              Create a new role
            </h5>

          </div>
          <div class="card-body">
            <div class="table-responsive">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" placeholder="Enter a role name">
                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input type="text" class="form-control" placeholder="Enter a description of the role">
                </div>
                <button type="submit" class="btn btn-primary">Create new role</button>
                <a href="/roles" class="btn btn-link">
                  <i class="fas fa-long-arrow-alt-left" style="margin-right: 5px"></i> Back to list
                </a>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2">
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