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
            <i class="fas fa-fw fa-users"></i>
          </div>
          <div class="mr-5">4 Students!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{url('admin/students')}}">
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
          <div class="mr-5">3 Courses!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{url('admin/courses')}}">
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
            <i class="fas fa-fw fa-book"></i>
          </div>
          <div class="mr-5">123 files!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{url('admin/files')}}">
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
        Courses</div>
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>NAME</th>
                  <th>QUALIFICATION</th>
                  <th>MODE</th>
                  <th>DURATION</th>
                  <th>FEE</th>
                  {{-- <th class="col-3">Action</th> --}}
                </tr>
              </thead>
              {{-- <tfoot>
                <tr>
                  <th>NAME</th>
                  <th>QUALIFICATION</th>
                  <th>MODE</th>
                  <th>DURATION</th>
                  <th>FEE</th>
                </tr>
              </tfoot> --}}
              <tbody>
              @forelse($courses as $course)
                <tr>
                  <td>{{$course->name}}</td>
                  <td>{{$course->qualification}}</td>
                  <td>{{$course->mode}}</td>
                  <td>{{$course->duration}}</td>
                  <td>{{$course->fee}}</td>
                </tr>
                @empty
              <p class="text-danger">No Data Found!!!</p>
            @endforelse
              </tbody>
            </table>
            <div class="container">
              <div class="row justify-content-md-center">
                <div class="col-lg-2">
                  {{ $courses->links() }}
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="card-footer small text-muted">Courtesy of KaliInc Technologies</div>
    </div>

@endsection
