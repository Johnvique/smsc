@extends('layouts.admin')

@section('content')

<br />
@if (\Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <p>{{ \Session::get('success') }}</p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
  <!-- Icon Cards-->
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-comments"></i>
          </div>
          <div class="mr-5">{{$messages->count()}} New Messages!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{route('messages.index')}}">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-list"></i>
          </div>
          <div class="mr-5">{{$products->count()}} Products!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{route('products.index')}}">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-shopping-cart"></i>
          </div>
          <div class="mr-5">123 New Orders!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-life-ring"></i>
          </div>
          <div class="mr-5">13 New Tickets!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
  </div>

  <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Products</div>
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>image</th>
                  <th>Details</th>
                  <th>Category</th>
                  <th>SubCategory</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th class="col-3">Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>image</th>
                  <th>Details</th>
                  <th>Category</th>
                  <th>SubCategory</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <!-- <th>Action</th> -->
                </tr>
              </tfoot>
              <tbody>
              @forelse($products as $product)
                <tr>
                  <td>{{$product->name}}</td>
                  <td>
                    <img src="/storage/products/{{$product->image}}" style="width: 60px; height: 70px">
                  </td>
                  <td>{{$product->details}}</td>
                  <td>{{$product->category->name}}</td>
                  <td>{{$product->category->sub_category_id}}</td>
                  <td>{{$product->qty}}</td>
                  <td>{{$product->price}}</td>
                  <td><a href="{{action('ProductsController@edit', $product['id'])}}" class="btn btn-warning">Edit</a>
                    <span>
                  <form action="{{action('ProductsController@destroy', $product['id'])}}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                    </span>

                  </td>
                </tr>
                @empty
              <p>No Data Found!!!</p>
            @endforelse
              </tbody>
            </table>
            <div class="container">
              <div class="row justify-content-md-center">
                <div class="col-lg-2">
                  {{ $products->links() }}
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

@endsection
