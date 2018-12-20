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
        DOWNLOADS</div>
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>NAME</th>
                  <th>FILE NAME</th>
                  <th class="col-3">Action</th>
                </tr>
              </thead>
              <tbody>
              @forelse($files as $file)
                <tr>
                  <td>{{$file->name}}</td>
                  <td>{{$file->file}}</td>
                  <td><a href="{{route('files.edit', $file['id'])}}" class="btn btn-warning">Edit</a>
                    <span>
                  <form action="{{route('files.destroy', $file['id'])}}" method="post">
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
                  {{ $files->links() }}
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

@endsection