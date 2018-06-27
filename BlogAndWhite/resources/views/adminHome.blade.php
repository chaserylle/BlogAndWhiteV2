@extends('layouts.template')
@section('title', 'Manage Accounts')

@section('content')

<div style="margin-top: 10%;" class="wrapper container col col-sm-10 card-group">
  <div class="card">
    <div class="card-body">
      <center><h5 class="card-title"><a href="blogs.php">Blogs</a></h5></center>
      <p class="card-text">
      	Published blogs: 2
      </p>
      <p class="card-text">
      	Unpublished blogs: 4
      </p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <center><h5 class="card-title"><a href="authors.php">Author Accounts</a></h5></center>
      <p class="card-text">
      	Enabled accounts: 5
      </p>
      <p class="card-text">
      	Disabled Accounts: 3
      </p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <center><h5 class="card-title"><a href="comments.php">Comments</a></h5></center>
      <p class="card-text">
      	Comments: 5
      </p>
    </div>
  </div>
</div>
@stop