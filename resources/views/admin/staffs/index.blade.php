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


  <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        STAFF</div>
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>FIRST NAME</th>
                  <th>MIDDLE NAME</th>
                  <th>LAST NAME</th>
                  <th>NATIONAL ID</th>
                  <th>TSC NUMBER</th>
                  <th class="col-3">Action</th>
                </tr>
              </thead>
              <tbody>
              @forelse($staffs as $staff)
                <tr>
                  <td>{{$staff->fname}}</td>
                  <td>{{$staff->mname}}</td>
                  <td>{{$staff->lname}}</td>
                  <td>{{$staff->idno}}</td>
                  <td>{{$staff->tscno}}</td>
                  <td><a href="{{route('staffs.edit', $staff['id'])}}" class="btn btn-warning">Edit</a>
                    <span>
                  <form action="{{route('staffs.destroy', $staff['id'])}}" method="post">
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
                  {{ $staffs->links() }}
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

@endsection