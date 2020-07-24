@extends('layouts.master')

@section('content')
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4">
        <div class="card">
          @if ($message = Session::get('status'))
             <div class="alert alert-success alert-block">

                 <button type="button" class="close" data-dismiss="alert">×</button>

                 <strong>{{ $message }}</strong>

             </div>
          @endif


          @if (count($errors) > 0)
           <div class="alert alert-danger">
               <strong>Whoops!</strong> There were some problems with your input.<br><br>
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
         @endif

          <div class="card-header text-center pt-3">
            <h3 class="form-heading bg-info text-white">Add Cv</h3>
          </div>
          <div class="card-body">
            <form action="{{url('addcv/insert') }}"  method="POST" enctype="multipart/form-data">
               @csrf
                  <div class="form-group">
                    <label >CV name</label>
                    <input name="name" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label >Upload CV</label>
                    <input type="file" class="form-control" name="file">
                  </div>
                <button type="Submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-8">
        <div class="card">
         <div class="card-header">
           @if ($message = Session::get('editstatus'))
              <div class="alert alert-success alert-block">

                  <button type="button" class="close" data-dismiss="alert">×</button>

                  <strong>{{ $message }}</strong>

              </div>
           @endif
         </div>
         <div class="card-body table-responsive">
           <table id="table_id" class="table table-bordered display">
               <thead>
                   <tr>
                       <th>Serial/ID</th>
                       <th>Cv Name</th>
                       <th>File</th>
                       <th>Created</th>
                       <th>Status</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody>
                  @forelse ($files as $file)
                   <tr>
                       <td>{{ ++$i }}</td>
                       <td>{{$file -> name}}</td>
                       <td>{{$file -> file}}</td>
                       <td>
                         {{ $file -> created_at -> format('d-M-Y h:i:s A') }}
                          <br>
                          {{ $file -> created_at -> diffForHumans() }}
                      </td>
                       <td>
                         <a href="{{ url('change/cv') }}/{{ $file->id }}">
                           <button type="submit"
                             class="<?php if ($file->file_status == 1): echo "btn btn-sm btn-success"; ?>
                             <?php else:   echo "btn btn-sm btn-danger"; ?>
                             <?php endif; ?>">

                             <?php if ($file->file_status == 1): echo "Active"; ?>
                             <?php else:   echo "Deactive"; ?>
                             <?php endif; ?>
                           </button>
                         </a>

                       </td>
                       <td>
                         <a href="{{ url('file/download') }}/{{ $file->id }}" class="btn btn-success mr-1 text-white" data-toggle="tooltip" data-placement="bottom" title="download"> <i class="fas fa-file-download"></i></a>

                         <a data-vbtype="ajax" href="{{ url('cv/edit') }}/{{ $file->id }}" class=" venobox btn btn-info mr-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>

                         <a href="/file/delete/{{$file->id}}" class="btn btn-warning " data-toggle="tooltip" data-placement="bottom" title="Trash"><i class="fa fa-trash"></i></a>


                       </td>
                   </tr>
                   @empty
                    <tr class="text-center text-danger">
                      <td colspan="12">No Data Available</td>
                    </tr>
                   @endforelse
               </tbody>
           </table>

           <!-- Modal -->


         </div>
       </div>
      </div>

    </div>
  </div>
</section>


<section class="pt-5 mt-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
         <div class="card-header">
           @if ($message = Session::get('perstatus'))
              <div class="alert alert-danger alert-block">

                  <button type="button" class="close" data-dismiss="alert">×</button>

                  <strong>{{ $message }}</strong>

              </div>
           @endif

         </div>
         <div class="card-body">
           <table id="table_deleted_id" class="table table-bordered display">
               <thead>
                   <tr>
                       <th>Serial/ID</th>
                       <th>Cv Name</th>
                       <th>File</th>
                       <th>Created</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody>
                  @forelse ($deleted_cvs as $deleted_cv)
                   <tr>
                       <td>{{ ++$i }}</td>
                       <td>{{$deleted_cv -> name}}</td>
                       <td>{{$deleted_cv -> file}}</td>
                       <td>
                         {{ $deleted_cv -> created_at -> format('d-M-Y h:i:s A') }}
                          <br>
                          {{ $deleted_cv -> created_at -> diffForHumans() }}
                      </td>

                      <td>

                        <a href="{{url('file/restore')}}/{{$deleted_cv->id}}" class="btn btn-info mr-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Restore"><i class="fa fa-trash-restore"></i></a>

                        <a href="{{ url('forcedelete/file') }}/{{$deleted_cv->id}}" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Permanently delete"><i class="fa fa-trash"></i></a>

                      </td>
                   </tr>
                   @empty
                    <tr class="text-center text-danger">
                      <td colspan="12">No Data Available</td>
                    </tr>
                   @endforelse
               </tbody>
           </table>

           <!-- Modal -->


         </div>
       </div>
      </div>
    </div>
  </div>
</section>
@endsection
