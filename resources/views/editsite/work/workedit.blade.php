<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="{{ asset('css/dash.css')}}">
    <link rel="stylesheet" href="{{ asset('css/venobox.css')}}">

    <!-- Font-icon css-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">



<script src="{{ asset('js/ckeditor.js') }}"></script>



<style media="screen">
  /* .venoframe, .vbox-inline{
    width: 30% !important;
    height : 50vh !important;
  }

  .card-header h3{
    font-size: 22px;
    padding-top: 10px;
    padding-bottom: 10px;
  } */
</style>

</head>

<body>
    <!-- Navbar-->
    <div class="py-4 mt-5 mb-4" id="app">
      <section class="homepage bg-light">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">


                <div class="card-header text-center pt-3">
                  <h3 class="form-heading bg-info">Edit Work</h3>
                </div>
                <div class="card-body">
                  <form action="{{url('edit/product') }}"  method="POST" enctype="multipart/form-data">
                     @csrf
                    <div class="modal-body">

                        <div class="form-group">
                          <label >Work name</label>
                          <input type="hidden" name="id" value="{{ $old_info->id }}">
                          <input name="name" type="text" class="form-control" value="{{ $old_info->name }}">
                        </div>


                        <div class="form-group">
                          <label>Product Description</label>
                          <textarea class="form-control" id="product_descriptions" rows="3" name="product_description">{!! $old_info->product_description !!}</textarea>
                        </div>

                        <div class="form-group">
                          <label >Product Image</label>
                          <input type="file" class="form-control" name="product_image">
                          <img src="{{ asset('uploads/product_photos') }}/{{ $old_info->product_image }}" alt="" width="250">
                        </div>

                        <div class="row mb-2">
                          <div class="col-lg-12">
                              <label >Product Slider Image</label>
                          </div>
                          @if($multiple_photos)
                          @foreach($multiple_photos as $multiple_photo)
                          <div class="col-lg-3">

                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('uploads/product_photos/sliders') }}/{{ $multiple_photo }}" alt="" class="img-fluid">
                                <div class="form-group">
                                  <input type="file" name="slider_image[]" class="form-control" multiple="">
                                </div>
                                <div class="card-body">
                                  <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="submit" class="btn btn-info btn-sm" formaction="{{ url('edit/product/single')}}/{{ $multiple_photo }}/{{$old_info->id}}">Update</button>

                                    <a href="{{ url('delete/product/single')}}/{{ $multiple_photo }}/{{$old_info->id}}" class="btn btn-danger btn-sm">Delete</button></a>
                                    </div>
                                </div>
                              </div>


                          </div>
                          @endforeach
                          @endif
                        </div>


                        <div class="form-group">
                          <label >Product Url</label>
                          <input type="text" class="form-control" placeholder="Copy the url link and paste" name="product_link" value="{{ $old_info->product_link }}">
                        </div>

                        <div class="form-group">
                          <label >Product Video Url</label>
                          <input type="text" class="form-control" placeholder="Copy the url link and paste" name="product_video_link" value="{{ $old_info->product_video_link }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="Submit" class="btn btn-primary">Update</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>


    <script src="{{ asset('js/app.js')}}"></script>
    <script src="{{ asset('js/venobox.js')}}"></script>
    <script src="{{ asset('js/dash.js')}}"></script>

    <script type="text/javascript">
          ClassicEditor
                  .create( document.querySelector( '#product_descriptions' ) )
                  .then( editor => {
                          console.log( editor );
                  } )
                  .catch( error => {
                          console.error( error );
                  } );
    </script>
</body>

</html>
