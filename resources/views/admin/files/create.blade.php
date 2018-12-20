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
    Create File
  </div>
  <div class="card-body">
	<form method="POST" action="{{route('files.store')}}" enctype="multipart/form-data">
		@csrf
	  <div class="form-group">
	    <label for="name">Name</label>
	    <input type="text" class="form-control" id="name" name="name" placeholder="Enter file name">
	  </div>
	  <div class="form-group">
	    <label for="file">FIle</label>
	    <input type="file" class="form-control-file" id="file" name="file">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
  </div>
</div>
@endsection