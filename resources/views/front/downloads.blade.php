@extends('layouts.main')

@section('content')

<section class="engine"><a href="{{url('/')}}">School Website</a></section><section class="mbr-section content5 cid-rcch5LToVN mbr-parallax-background" id="content5-n">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h4 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">Important Downloads</h4>
                
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content6 cid-rcchAYqFC9" id="content6-o">
    
     
    
    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-8">
                <div class="media-container-row">
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
                                  <td><a href="{{url('files/'. $file->file)}}" class="btn btn-primary">Download</a>
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
                </div>
            </div>
        </div>
    </div>
</section>


@endsection