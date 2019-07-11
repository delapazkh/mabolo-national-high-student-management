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
              Create a new user
            </h5>

          </div>
          <div class="card-body">
            <div class="table-responsive">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Full Name</label>
                  <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter full name">
                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" class="form-control" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" placeholder="Enter a secure password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Re-type password</label>
                  <input type="password" class="form-control" placeholder="Re-enter your password for securities">
                </div>
                <button type="submit" class="btn btn-primary">Create new user</button>
                <a href="/users" class="btn btn-link">
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