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
    Edit Staff
  </div>
  <div class="card-body">
	<form method="POST" action="{{route('staffs.update', ['staff' => $staff->id])}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
	  <div class="form-group">
	    <label for="fname">First Name</label>
	    <input type="text" class="form-control" id="fname" name="fname" value="{{$staff->fname}}">
	  </div>
	  <div class="form-group">
	    <label for="mname">Middle Name</label>
	    <input type="text" class="form-control" id="mname" name="mname" value="{{$staff->mname}}">
	  </div>
	  <div class="form-group">
	    <label for="lname">Last Name</label>
	    <input type="text" class="form-control" id="lname" name="lname" value="{{$staff->lname}}">
	  </div>
	  <div class="form-group">
	    <label for="idno">National ID</label>
	    <input type="number" class="form-control" id="idno" name="idno" value="{{$staff->idno}}">
	  </div>
	  <div class="form-group">
	    <label for="tscno">TSC Number</label>
	    <input type="number" class="form-control" id="tscno" name="tscno" value="{{$staff->tscno}}">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
  </div>
</div>
@endsection