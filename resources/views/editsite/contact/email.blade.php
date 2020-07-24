@extends('layouts.master')

@section('content')
<section>
<div class="container-fluid">
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
</section>


<section>
  <div class="row">
    <div class ="col-lg-12">
      <div class="card">
        <div class="card-header text-center">
          <h5>All Mail</h5>
        </div>
        <!-- Category  Table-->
        <div class="card-body table-responsive">
          <table id="table_message" class="table display text-nowrap">
              <thead>
                  <tr>
                      <th>Serial/ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Message</th>
                      <th>Time</th>
                      <th>Status</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                 @forelse($contacts as $contact)
                  <tr class= "{{ ($contact -> readstatus == 1)?"bg_message":"" }}" style="color:#2B2624; font-weight:400; background:#ffffff;">
                      <td> {{ ++$i }} </td>
                      <td>{{ $contact->name }}</td>
                      <td>{{ $contact->email }}</td>
                      <td>{{ $contact->Subject }}</td>
                      <td>{{ Str::limit($contact->message, 20) }}</td>
                      <td>
                        {{ $contact->created_at->format('d-M-Y h:i:s A')}}
                        <br>
                        {{ $contact -> created_at->diffForHumans() }}
                      </td>
                      <td>  <?php if ($contact->readstatus == 1): echo "Unread"; ?>
                      <?php else:   echo "Read"; ?>
                        <?php endif; ?>
                      </td>

                      <td>
                        <a href="{{ url('editsite/contact/emailview') }}/{{$contact->id }}" class="btn btn-sm btn-info text-white">
                  Open
                </a>
                        <a href="/message/delete/{{ $contact->id }}" class="btn btn-danger " data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
                      </td>

                  </tr>

                  @empty
                   <tr class="text-center text-danger">
                     <td colspan="12">No Data Available</td>
                   </tr>
                 @endforelse
              </tbody>
          </table>
            {{ $contacts->links() }}
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('footer_scripts')
