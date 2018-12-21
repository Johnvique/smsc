@extends('layouts.admin')

@section('content')

<br>
@if ($errors->any())
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
	  	@foreach ($errors->all() as $error)
				{{ $error }}
		@endforeach
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
@endif
<br>

<div class="card">
  <div class="card-header">
    Create Student
  </div>
  <div class="card-body">
	<form method="POST" action="{{route('staffs.store')}}" enctype="multipart/form-data">
		@csrf
	  <div class="form-group">
	    <label for="name">Full Name</label>
	    <input type="text" class="form-control" id="name" name="name" placeholder="Enter staff's name">
	  </div>
	  <div class="form-group">
	    <label for="position">Position</label>
	    <input type="text" class="form-control" id="position" name="position" placeholder="Enter staff's position">
	  </div>
	  <div class="form-group">
	    <label for="idno">National ID</label>
	    <input type="number" class="form-control" id="idno" name="idno" placeholder="Enter staff's idno">
	  </div>
	  <div class="form-group">
	    <label for="password">Password</label>
	    <input type="text" class="form-control" id="password" name="password" placeholder="Enter staff's password">
	  </div>
	  <div class="form-group">
	    <label for="email">E-mail</label>
	    <input type="text" class="form-control" id="email" name="email" placeholder="Enter student email">
	  </div>
	  <div class="form-group">
	    <label for="image">Image</label>
	    <input type="file" class="form-control-file" id="image" name="image">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
  </div>
</div>
@endsection