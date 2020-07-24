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
      @if ($message = Session::get('categorystatus'))
         <div class="alert alert-success alert-block">

             <button type="button" class="close" data-dismiss="alert">×</button>

             <strong>{{ $message }}</strong>

         </div>
     @endif
    </div>
  </div>

  <div class="row ">
    <div class="col-lg-3 ml-auto">
      @if ($message = Session::get('deletestatus'))
         <div class="alert alert-danger alert-block">

             <button type="button" class="close" data-dismiss="alert">×</button>

             <strong>{{ $message }}</strong>

         </div>
     @endif
    </div>
  </div>

</div>

<div class="container-fluid">
<div class="row justify-content-center mb-5 pb-3">


  <div class="col-lg-4">
    <div class="card">
      <div class="card-header text-center">
        <h5>Add New Category</h5>
      </div>
      <div class="card-body">
        <form action="{{url('add/category/insert') }}"  method="POST" enctype="multipart/form-data">
           @csrf
           <div class="form-group">
             <label >Category name</label>
             <input name="category_name" type="text" class="form-control">
           </div>

           <div class="form-group">
             <input name="status" type="checkbox" id="menu" class="mr-1" value="1"><label for="menu">use menu</label>
           </div>

            <button type="Submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <div class ="col-lg-6">
    <div class="card">
      <div class="card-header text-center">
        <h5>Category List</h5>
      </div>
      <!-- Category  Table-->
      <div class="card-body table-responsive">
        <table id="table_id_one" class="table display text-nowrap">
            <thead>
                <tr>
                    <th>Serial/ID</th>
                    <th>Category Name</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categoreies as $category)
                <tr>
                    <td> {{ $category->id }} </td>
                    <td>{{ $category->category_name }}</td>
                    <td>
                      <a href="{{ url('change/category') }}/{{ $category->id }}">
                        <button type="submit"
                          class="<?php if ($category->status == 1): echo "btn btn-sm btn-success"; ?>
                          <?php else:   echo "btn btn-sm btn-danger"; ?>
                          <?php endif; ?>">

                          <?php if ($category->status == 1): echo "Active"; ?>
                          <?php else:   echo "Deactive"; ?>
                          <?php endif; ?>
                        </button>
                      </a>
                    </td>
                    <td>{{ $category->created_at->format('d-M-Y h:i:s A') }}
                        <br>
                        {{ $category -> created_at->diffForHumans() }}
                    </td>

                    <td>


                      <a href="/category/delete/{{$category->id}}" class="btn btn-danger " data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
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
  <!-- Category  part end-->

</div>
</div>


</section>
@endsection
