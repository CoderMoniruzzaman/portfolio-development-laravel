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
    height : 90vh !important;
  }
/*
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
      <section>
        <div class="container">

            <div class="row">
              <div class="col-lg-12">
                <div class="card-header">
                  <h2>Home Page View</h2>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="card-group">
                  <div class="card">
                      <img class="card-img-top" src="{{ asset('uploads/pro_photos') }}/{{ $HomePage_single_info->profile_pic }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{ $HomePage_single_info->name }}</h5>
                      <p class="card-text">{{ $HomePage_single_info->description_one }}</p>
                      <p class="card-text">{{ $HomePage_single_info->description_two }}</p>
                      <a data-vbtype="ajax" href="{{url('editsite/homepage/edithomapage')}}/{{$HomePage_single_info->id}}" class="venobox btn btn-primary">Edit</a>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      Information
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Age <span class="pl-1">:</span><span class="pr-2"></span> {{ $HomePage_single_info->age }}</li>
                        <li class="list-group-item">Address <span class="pl-1">:</span><span class="pr-2"></span> {{ $HomePage_single_info->address }}</li>
                        <li class="list-group-item">Email <span class="pl-1">:</span><span class="pr-2"></span> {{ $HomePage_single_info->email }}</li>
                        <li class="list-group-item">Phone <span class="pl-1">:</span><span class="pr-2"></span> {{ $HomePage_single_info->phone }}</li>
                        <li class="list-group-item">Skype <span class="pl-1">:</span><span class="pr-2"></span> {{ $HomePage_single_info->skype }}</li>
                      </ul>
                    </div>
                    <div class="card-header">
                      Social Link
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Facebook <span class="pl-1">:</span><span class="pr-2"></span> <a href="{{ $HomePage_single_info->facebook }}">{{ $HomePage_single_info->facebook }}</a></li>

                        <li class="list-group-item">Twitter<span class="pl-1">:</span><span class="pr-2"></span> <a href="{{ $HomePage_single_info->twitter }}">{{ $HomePage_single_info->twitter }}</a></li>

                        <li class="list-group-item">Linkedin <span class="pl-1">:</span><span class="pr-2"></span> <a href="{{ $HomePage_single_info->linkedin }}">{{ $HomePage_single_info->linkedin }}</a></li>

                        <li class="list-group-item">Stack Overflow<span class="pl-1">:</span><span class="pr-2"></span><a href="{{ $HomePage_single_info->stack }}">{{ $HomePage_single_info->stack }}</a></li>

                        <li class="list-group-item">Github <span class="pl-1">:</span><span class="pr-2"></span> <a href="{{ $HomePage_single_info->github }}">{{ $HomePage_single_info->github }}</a></li>
                      </ul>
                    </div>
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
