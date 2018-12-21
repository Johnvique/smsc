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
	<form method="POST" action="{{route('students.store')}}" enctype="multipart/form-data">
		@csrf
	  <div class="form-group">
	    <label for="full_name">Full Name</label>
	    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter student's full name">
	  </div>
	  <div class="form-group">
	    <label for="dob">Date of Birth</label>
	    <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter course dob">
	  </div>
	  <div class="form-group">
	    <label for="course">Course</label>
	    <select class="form-control" id="course_id" name="course_id">
	    @foreach($courses as $course)
	      <option value="{{ $course->id }}">{{ $course->name }}</option>
	     @endforeach
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="gender">gender</label>
	    <select class="form-control" id="gender" name="gender">
	      <option value="male">Male</option>
	      <option value="female">Female</option>
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="idno">National ID</label>
	    <input type="number" class="form-control" id="idno" name="idno" placeholder="Enter student National ID">
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