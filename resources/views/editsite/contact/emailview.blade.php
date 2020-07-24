@extends('layouts.master')

@section('content')
<section>
<div class="container">
  <div class="col-lg-8 m-auto">
    <div class="card">
      <div class="card-header" style="text-transform: capitalize;">
        <b>Email From <span style="color:green;">{{ $single_contact_info->name }}</span> </b>
      </div>
      <div class="card-body">
        <h2 class="card-title">Email : <span>{{ $single_contact_info->email }}</span>
        </h2>

        <h3 style="text-align:left; font-size:22px; font-weight:700;">Subject : <span> {{ $single_contact_info->Subject }}</span><h3>


        <h5><span style="text-align:left;" >Description:</span></h5>
        <p class="card-text" style="text-align:left; font-size:16px;" ><span>{{ $single_contact_info->message }}</p>


        <a href="{{ url('editsite/contact/email')}}" class="btn btn-primary mt-3">back</a>
      </div>
      <div class="card-footer text-muted">
          {{ $single_contact_info->created_at->format('d-M-Y h:i:s A') }}
          <br>
            {{ $single_contact_info -> created_at->diffForHumans() }}
      </div>
    </div>


    </section>
@endsection
