@extends('layouts.master')

@section('content')
<section>


  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 ml-auto">
        @if (count($errors) > 0)
         <div class="alert alert-danger">
            <div class="button">
              <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
               @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
             </ul>
         </div>
       @endif
      </div>
    </div>

    <div class="row ">
      <div class="col-lg-3 ml-auto">
        @if ($message = Session::get('sliderstatus'))
           <div class="alert alert-success alert-block">

               <button type="button" class="close" data-dismiss="alert">×</button>

               <strong>{{ $message }}</strong>
           </div>
       @endif
      </div>
    </div>

    <div class="row ">
      <div class="col-lg-3 ml-auto">
        @if ($message = Session::get('sliderdeletestatus'))
           <div class="alert alert-danger alert-block">

               <button type="button" class="close" data-dismiss="alert">×</button>

               <strong>{{ $message }}</strong>

           </div>
       @endif
      </div>
    </div>

    <div class="row ">
      <div class="col-lg-3 ml-auto">
        @if ($message = Session::get('editsliderstatus'))
           <div class="alert alert-info alert-block">

               <button type="button" class="close" data-dismiss="alert">×</button>

               <strong>{{ $message }}</strong>

           </div>
       @endif
      </div>
    </div>

  </div>

  <div class="container-fuild">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header text-center">
            <h5>Add New Slider</h5>
          </div>

          <div class="card-body">
            <form action="{{url('add/slider/insert') }}"  method="POST" enctype="multipart/form-data">
               @csrf
              <div class="modal-body">

                  <div class="form-group">
                    <label >Product name</label>
                    <input name="slidername" type="text" class="form-control">
                  </div>

                  <div class="form-group">
                    <label >Product name</label>
                    <input name="slider_image" type="file" class="form-control">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="Submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

        </div>
      </div>


  <!-- Slider  part start-->
  <div class ="col-lg-6">
    <div class="card">

      <div class="card-header text-center">
        <h5>Slider List</h5>
      </div>

      <!-- Slider  Table-->
      <div class="card-body table-responsive">
        <table id="table_id_two" class="table display text-nowrap">
            <thead>
                <tr>
                    <th>Serial/ID</th>
                    <th>Slider Name</th>
                    <th>Slider Name</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              @forelse($sliders as $slider)
                <tr>
                    <td>{{ $slider->id }}</td>
                    <td>{{$slider->slidername}}</td>
                    <td><img src="{{ asset('uploads/slider') }}/{{ $slider->slider_image }}" alt="not found" width="100"></td>
                    <td>

                      {{ $slider->created_at->format('d-M-Y h:i:s A') }}
                          <br>
                      {{ $slider -> created_at->diffForHumans() }}
                    </td>
                    <td>
                      <a href="" class="btn btn-success mr-1 text-white"> <i class="fa fa-eye" data-toggle="tooltip" data-placement="bottom" title="Trash"></i></a>

                      <a data-vbtype="ajax" href="{{ url('editsite/work/editslider') }}/{{ $slider->id }}" class="venobox btn btn-info mr-1 text-white"><i class="fa fa-edit" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>

                      <a href="/slider/delete/{{$slider->id}}" class="btn btn-danger mr-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Trash"><i class="fa fa-trash"></i></a>
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
  <!-- Slider  part end-->


</div>
</div>

@endsection
