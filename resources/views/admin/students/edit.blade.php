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
    Edit Student
  </div>
  <div class="card-body">
	<form method="POST" action="{{route('students.update', ['student' => $student->id])}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
	  <div class="form-group">
	    <label for="full_name">Full Name</label>
	    <input type="text" class="form-control" id="full_name" name="full_name" value="{{$student->full_name}}">
	  </div>
	  <div class="form-group">
	    <label for="dob">Date of Birth</label>
	    <input type="date" class="form-control" id="dob" name="dob" value="{{$student->dob}}">
	  </div>
	  <div class="form-group">
	    <label for="course">Course</label>
	    <select class="form-control" id="course_id" name="course_id" value="{{ $student->course }}">
	    @foreach($courses as $course)
	      <option value="{{ $course->id }}">{{ $course->name }}</option>
	     @endforeach
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="gender">gender</label>
	    <select class="form-control" id="gender" name="gender" value="{{ $student->gender }}">
	      <option value="male">Male</option>
	      <option value="female">Female</option>
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="idno">National ID</label>
	    <input type="number" class="form-control" id="idno" name="idno" value="{{ $student->idno }}">
	  </div>
	  <div class="form-group">
	    <label for="email">E-mail</label>
	    <input type="text" class="form-control" id="email" name="email" value="{{ $student->email }}">
	  </div>
	  <div class="form-group">
	    <label for="image">Image</label>
	    <input type="file" class="form-control-file" id="image" name="image" value="{{ $student->image }}">{{$student->image}}</input>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
  </div>
</div>
@endsection