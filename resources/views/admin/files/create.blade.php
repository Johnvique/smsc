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
    Create Product
  </div>
  <div class="card-body">
	<form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
		@csrf
	  <div class="form-group">
	    <label for="name">Name</label>
	    <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name">
	  </div>
	  <div class="form-group">
	    <label for="price">Price</label>
	    <input type="number" class="form-control" id="price" name="price" placeholder="KSh.">
	  </div>
	  <div class="form-group">
	    <label for="category">Category</label>
	    <select class="form-control" id="category_id" name="category_id">
	    @foreach($categories as $category)
	      <option value="{{ $category->id }}">{{ $category->name }}</option>
	     @endforeach
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="qty">Quantity</label>
	    <input type="number" class="form-control" id="qty" name="qty" placeholder="Enter product Quantity">
	  </div>
	  <div class="form-group">
	    <label for="image">Image</label>
	    <input type="file" class="form-control-file" id="image" name="image">
	  </div>
	  <div class="form-group">
	    <label for="details">Details</label>
	    <textarea class="form-control" id="details" name="details" rows="3"></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
  </div>
</div>
@endsection