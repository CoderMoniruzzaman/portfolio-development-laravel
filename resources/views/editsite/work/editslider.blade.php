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







<style media="screen">
  .venoframe, .vbox-inline{
    width: 30% ;
    height : 50vh !important;
  }

  .card-header h3{
    font-size: 22px;
    padding-top: 10px;
    padding-bottom: 10px;
  }

  @media screen and (max-width: 1200px)  {
    .venoframe, .vbox-inline{
      width: 40% ;
      height : 50vh !important;
    }
     }


  @media screen and (min-width: 991px)  {
    .venoframe, .vbox-inline{
      width: 40% ;
      height : 50vh !important;
    }
     }


    @media screen and (max-width: 767px)  {
      .venoframe, .vbox-inline{
        width: 70% ;
        height : 50vh !important;
      }
       }


  @media screen and (max-width: 320px)  {
    .venoframe, .vbox-inline{
      width: 90% ;
      height : 50vh !important;
    }
     }



</style>

</head>

<body>
    <!-- Navbar-->
    <div class="py-4 mt-5" id="app">

      <section>
        <div class="container">
          <div class="row">
            <div class="col-lg-12 m-auto">
              <div class="card">

                <div class="card-header text-center pt-3">
                  <h3 class="form-heading bg-info text-white">Edit slider</h3>
                </div>
                <div class="card-body">
                  <form action="{{ url('edit/slider/insert') }}"  method="POST" enctype="multipart/form-data">
                     @csrf
                        <div class="form-group">
                          <label >Slider name</label>
                          <input type="hidden" name="id" value="{{$old_info->id}}">
                          <input name="slidername" type="text" class="form-control" value="{{$old_info->slidername}}">
                        </div>
                        <div class="form-group">
                          <label >Upload Slider image</label>
                          <input type="file" class="form-control mb-2" name="slider_image">
                          <span></span>
                          <img src="{{ asset('uploads/slider') }}/{{ $old_info->slider_image }}" alt="not found" width="250">
                        </div>
                      <button type="Submit" class="btn btn-primary">update</button>
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
</body>

</html>
