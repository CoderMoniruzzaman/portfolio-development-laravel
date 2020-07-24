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
                  <h3 class="form-heading bg-info">Edit HomePage Content</h3>
                </div>
                <div class="card-body">
                  <form action="{{ url('edit/homepage/insert')}}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label>Name</label>
                            <input type="hidden" name="id" value="{{ $old_info->id }}">
                            <input name="name" type="text" class="form-control" value="{{ $old_info->name }}">
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="Email" class="form-control" value="{{ $old_info->email }}">
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="form-group">
                            <label>Picture</label>
                            <input name="profile_pic" type="file" class="form-control">
                            <img src="{{ asset('uploads/pro_photos') }}/{{ $old_info->profile_pic }}" alt="" style="max-width:200px;">
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="form-group">
                            <label>Phone</label>
                            <input name="phone" type="text" class="form-control" value="{{ $old_info->phone }}">
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="form-group">
                            <label>Age</label>
                            <input name="age" type="text" class="form-control" value="{{ $old_info->age }}">
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="form-group">
                            <label>Freelance</label>
                            <input name="freelance" type="text" class="form-control" value="{{ $old_info->freelance }}">
                          </div>
                        </div>

                        <div class="col-lg-12">
                          <div class="form-group">
                            <label>Address</label>
                            <input name="address" type="text" class="form-control" value="{{ $old_info->address }}">
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="form-group">
                            <label>Description1</label>
                            <textarea class="form-control" rows="3" name="description_one">{{ $old_info->description_one }}</textarea>
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="form-group">
                            <label>Description2</label>
                            <textarea class="form-control" rows="3" name="description_two">{{ $old_info->description_two }}</textarea>
                          </div>
                        </div>


                        <div class="col-lg-12">

                          <div class="card">
                            <div class="card-header  text-center">
                              <h3 class="form-heading bg-info">Add Social link</h3>
                            </div>
                            <div class="card-body socials-link">
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <span><i class="fab fa-facebook-square"></i></span> <input name="facebook" type="text" class="form-control" value="{{ $old_info->facebook }}">
                                  </div>
                                </div>

                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <span><i class="fab fa-twitter-square"></i></span> <input name="twitter" type="text" class="form-control" value="{{ $old_info->twitter }}">
                                  </div>
                                </div>

                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <span><i class="fab fa-skype"></i></span> <input name="skype" type="text" class="form-control" value="{{ $old_info->skype }}">
                                  </div>
                                </div>

                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <span><i class="fab fa-linkedin"></i></span> <input name="linkedin" type="text" class="form-control" value="{{ $old_info->linkedin }}">
                                  </div>
                                </div>

                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <span><i class="fab fa-stack-overflow"></i></span> <input name="stack" type="text" class="form-control" value="{{ $old_info->stack }}">
                                  </div>
                                </div>

                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <span><i class="fab fa-github-square"></i></span> <input name="github" type="text" class="form-control" value="{{ $old_info->github }}">
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-12 text-center">
                          <button type="submit" class="btn btn-info mt-4 text-white" name="button">Submit</button>
                        </div>
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
</body>

</html>
