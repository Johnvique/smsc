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
        STUDENT</div>
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>FULL NAME</th>
                  <th>DATE OF BIRTH</th>
                  <th>COURSE</th>
                  <th>IMAGE</th>
                  <th>GENDER</th>
                  <th>EMAIL</th>
                  <th>NATIONAL ID</th>
                  <th class="col-3">Action</th>
                </tr>
              </thead>
              <tbody>
              @forelse($students as $student)
                <tr>
                  <td>{{$student->full_name}}</td>
                  <td>{{$student->dob}}</td>
                  <td>{{$student->course_id}}</td>
                  <td>
                    <img src="/storage/students/{{$student->image}}" style="width: 60px; height: 70px">
                  </td>
                  <td>{{$student->gender}}</td>
                  <td>{{$student->email}}</td>
                  <td>{{$student->idno}}</td>
                  <td><a href="{{route('students.edit', $student['id'])}}" class="btn btn-warning">Edit</a>
                    <span>
                  <form action="{{route('students.destroy', $student['id'])}}" method="post">
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
                  {{ $students->links() }}
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

@endsection