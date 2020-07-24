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
      @if ($message = Session::get('status'))
         <div class="alert alert-success alert-block">

             <button type="button" class="close" data-dismiss="alert">×</button>

             <strong>{{ $message }}</strong>

         </div>
     @endif
    </div>
  </div>

  <div class="row ">
    <div class="col-lg-3 ml-auto">
      @if ($message = Session::get('editstatus'))
         <div class="alert alert-success alert-block">

             <button type="button" class="close" data-dismiss="alert">×</button>

             <strong>{{ $message }}</strong>

         </div>
     @endif
    </div>
  </div>

  <div class="row ">
    <div class="col-lg-3 ml-auto">
      @if ($message = Session::get('delete'))
         <div class="alert alert-warning alert-block">

             <button type="button" class="close" data-dismiss="alert">×</button>

             <strong>{{ $message }}</strong>

         </div>
     @endif
    </div>
  </div>

  <div class="row ">
    <div class="col-lg-3 ml-auto">
      @if ($message = Session::get('restore'))
         <div class="alert alert-success alert-block">

             <button type="button" class="close" data-dismiss="alert">×</button>

             <strong>{{ $message }}</strong>

         </div>
     @endif
    </div>
  </div>


  <div class="row ">
    <div class="col-lg-3 ml-auto">
      @if ($message = Session::get('pardeletestatus'))
         <div class="alert alert-danger alert-block">

             <button type="button" class="close" data-dismiss="alert">×</button>

             <strong>{{ $message }}</strong>

         </div>
     @endif
    </div>
  </div>


  <div class="row ">
    <div class="col-lg-3 ml-auto">

    @if (session('alert'))
      <div class="alert alert-danger">
        {{ session('alert') }}
      </div>
    @endif
  </div>
</div>

</div>

<!-- Product Table -->
<div class="container">
    <div class="row justify-content-center">
      <div class ="col-lg-12">
        <div class="card">
          <div class="card-header">

            <div class="">
              <a type="button" class="btn btn-success text-white" data-toggle="modal" data-target="#exampleModalCenter">
                  <i class="fas fa-plus-square mr-2"></i>Add New
              </a>

            </div>
          </div>

          <div class="card-body table-responsive">
            <table id="table_id" class="table display text-nowrap">
                <thead>
                    <tr>
                        <th>Serial/ID</th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Product Category</th>
                        <th>Product Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @forelse($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{!! Str::limit($product->product_description, 20) !!}</td>
                        <td>{{ Str::limit($product->ralationcategory->category_name)}}</td>
                        <td><img src="{{ asset('uploads/product_photos') }}/{{ $product->product_image }}" alt="not found" width="100"></td>
                        <td>
                          <a href="{{ url('work/view') }}/{{ $product->id }}" class="btn btn-success mr-1 text-white" data-toggle="tooltip" data-placement="bottom" title="View"> <i class="fa fa-eye"></i></a>

                          <a data-vbtype="ajax" href="{{ url('editsite/work/workedit') }}/{{ $product->id }}" class=" venobox btn btn-info mr-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>

                          <a href="/work/delete/{{$product->id}}" class="btn btn-danger " data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>

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
      </div><!-- card end -->
      <!-- Modal -->



      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Product Adding</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form action="{{url('add/product') }}"  method="POST" enctype="multipart/form-data">
               @csrf
              <div class="modal-body">

                  <div class="form-group">
                    <label >Work name</label>
                    <input name="name" type="text" class="form-control">
                  </div>

                  <div class="form-group">
                    <label >Work type</label>
                    <select class="form-control" name="category_id">
                      <option value="">-- select --</option>
                      @foreach($categoreies as $category)
                      <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Product Description</label>
                    <textarea class="form-control" id="product_description" rows="3" name="product_description"></textarea>
                  </div>

                  <div class="form-group">
                    <label >Product Image</label>
                    <input type="file" class="form-control" name="product_image">
                  </div>

                  <div class="form-group">
                    <label >Product Image</label>
                    <input type="file" class="form-control btn btn-primary" name="slider_image[]" multiple="multiple">
                  </div>

                  <div class="form-group">
                    <label >Product Url</label>
                    <input type="text" class="form-control" placeholder="Copy the url link and paste" name="product_link">
                  </div>

                  <div class="form-group">
                    <label >Product Video Url</label>
                    <input type="text" class="form-control" placeholder="Copy the url link and paste" name="product_video_link">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="Submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

<div class="container mt-4 pt-4">
    <div class="row justify-content-center">
      <div class ="col-lg-12">
        <div class="card">
          <div class="card-header text-center">
            <h3>Deleted Work</h3>
          </div>
          <div class="card-body table-responsive">
            <table id="table_deleted_id" class="table display text-nowrap">
                <thead>
                    <tr>
                        <th>Serial/ID</th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Product Category</th>
                        <th>Product Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @forelse($deleteds as $deleted)
                    <tr>
                        <td>{{$deleted->id}}</td>
                        <td>{{$deleted->name}}</td>
                        <td>{{Str::limit($deleted->product_description, 20)}}</td>
                        <td>{{$deleted->id}}</td>
                        <td><img src="{{ asset('uploads/product_photos') }}/{{ $deleted->product_image }}" alt="not found" width="100"></td>
                        <td>
                          <a href="{{ url('work/restore') }}/{{ $deleted->id }}" class="btn btn-info mr-1 text-white" data-toggle="tooltip" data-placement="bottom" title="Restore"><i class="fa fa-trash-restore"></i></a>

                          <a href="{{ url('forcedelete/work') }}/{{ $deleted->id }}" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Permanently delete"><i class="fa fa-trash"></i> </a>
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

@section('footer_scripts')
<script type="text/javascript">
      ClassicEditor
              .create( document.querySelector( '#product_description' ) )
              .then( editor => {
                      console.log( editor );
              } )
              .catch( error => {
                      console.error( error );
              } );
</script>
@endsection
