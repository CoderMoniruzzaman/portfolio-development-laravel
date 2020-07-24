@extends('layouts.master')

@section('content')



<section class="py-4">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 ml-auto">
        @if ($message = Session::get('status'))
           <div class="alert alert-success alert-block">

               <button type="button" class="close" data-dismiss="alert">×</button>

               <strong>{{ $message }}</strong>

           </div>
        @endif


        @if ($message = Session::get('deletestatus'))
           <div class="alert alert-warning alert-block">

               <button type="button" class="close" data-dismiss="alert">×</button>

               <strong>{{ $message }}</strong>

           </div>
        @endif

        @if ($message = Session::get('editstatus'))
           <div class="alert alert-info alert-block">

               <button type="button" class="close" data-dismiss="alert">×</button>

               <strong>{{ $message }}</strong>

           </div>
        @endif
      </div>
      <div class="col-lg-12">


      <div class="card">

          <div class="card-header">
            <div class="">

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
            </div>
              <div class="">
                <a data-vbtype="ajax" href="{{ url('editsite/homepage/addhomecontent')}}" class="venobox btn btn-success mr-1 text-white">Add New</a>
              </div>
              <h3>Home page content list</h3>
          </div>

          <div class="card-body table-responsive">
            <table id="table_id" class="table display">
                <thead>
                    <tr>
                        <th>Serial/ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Description</th>
                        <th>Picture</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @forelse($home_page_contents as $home_page_content)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{$home_page_content -> name}}</td>
                        <td>{{$home_page_content -> email}}</td>
                        <td>{{Str::limit($home_page_content -> description_one , 10)}}</td>
                        <td><img src="{{ asset('uploads/pro_photos') }}/{{ $home_page_content->profile_pic }}" alt="not found" width="100"></td>
                        <td>{{ Str::limit($home_page_content -> address, 10)}}</td>

                        <td>

                          <a href="{{ url('change/homepage') }}/{{ $home_page_content->id }}">
                            <button type="submit"
                              class="<?php if ($home_page_content->status == 1): echo "btn btn-sm btn-success"; ?>
                              <?php else:   echo "btn btn-sm btn-danger"; ?>
                              <?php endif; ?>">

                              <?php if ($home_page_content->status == 1): echo "Active"; ?>
                              <?php else:   echo "Deactive"; ?>
                              <?php endif; ?>
                            </button>
                          </a>

                        </td>

                        <td>
                          <a data-vbtype="ajax" href="{{url('editsite/homepage/singleviewhomepage')}}/{{$home_page_content->id}}"  class="venobox btn btn-success mr-1 text-white" data-toggle="tooltip" data-placement="bottom" title="View"> <i class="fa fa-eye"></i></a>

                          <a data-vbtype="ajax" href="{{url('editsite/homepage/edithomapage')}}/{{$home_page_content->id}}" class="venobox btn btn-info mr-1 text-white"data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>

                          <a href="/homepage/delete/{{$home_page_content->id}}" class="btn btn-danger mr-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Trash"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @empty
                     <tr class="text-center text-danger">
                       <td colspan="12">No Data Available</td>
                     </tr>
                    @endforelse
                </tbody>
            </table>
          </div>
        </div>
          </div>
    </div>
  </div>
</section>

<section class="py-4 mt-4">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 ml-auto">
        @if ($message = Session::get('pardeletestatus'))
           <div class="alert alert-danger alert-block">

               <button type="button" class="close" data-dismiss="alert">×</button>

               <strong>{{ $message }}</strong>

           </div>
        @endif
      </div>
      <div class="col-lg-12">


      <div class="card">

          <div class="card-header">
            <div class="">
            </div>

              <h3>Home page Trashed list</h3>
          </div>

          <div class="card-body table-responsive">
            <table id="table_deleted_id" class="table table-bordered display">
                <thead>
                    <tr>
                        <th>Serial/ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Description</th>
                        <th>Picture</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @forelse($deleted_home_pages as $deleted_home_page)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{$deleted_home_page -> name}}</td>
                        <td>{{$deleted_home_page -> email}}</td>
                        <td>{{$deleted_home_page -> description_one}}</td>
                        <td><img src="{{ asset('uploads/pro_photos') }}/{{ $deleted_home_page->profile_pic }}" alt="not found" width="100"></td>
                        <td>{{ Str::limit($deleted_home_page -> address, 10)}}</td>

                        <td>
                          <a href="/homepage/restore/{{$deleted_home_page->id}}" class="btn btn-info mr-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Restore"><i class="fa fa-trash-restore"></i></a>

                          <a href="{{url('forcedelete/homepage')}}/{{$deleted_home_page->id}}" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Permanently delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @empty
                     <tr class="text-center text-danger">
                       <td colspan="12">No Data Available</td>
                     </tr>
                    @endforelse
                </tbody>
            </table>
          </div>
        </div>
          </div>
    </div>
  </div>
</section>

@endsection
