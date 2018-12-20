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
    Edit Course
  </div>
  <div class="card-body">
	<form method="POST" action="{{route('courses.update', ['course' => $course->id])}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
	  <div class="form-group">
	    <label for="name">Name</label>
	    <input type="text" class="form-control" id="name" name="name" value="{{$course->name}}">
	  </div>
	  <div class="form-group">
	    <label for="qualification">Qualification</label>
	    <input type="text" class="form-control" id="qualification" name="qualification" value="{{$course->qualification}}">
	  </div>
	  <div class="form-group">
	    <label for="mode">Mode</label>
	    <input type="text" class="form-control" id="mode" name="mode" value="{{$course->mode}}">
	  </div>
	  <div class="form-group">
	    <label for="duration">Duration</label>
	    <input type="text" class="form-control" id="duration" name="duration" value="{{$course->duration}}">
	  </div>
	  <div class="form-group">
	    <label for="fee">Fee</label>
	    <input type="number" class="form-control" id="fee" name="fee" value="{{$course->fee}}">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
  </div>
</div>
@endsection