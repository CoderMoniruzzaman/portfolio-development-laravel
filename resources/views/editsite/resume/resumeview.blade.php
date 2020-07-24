@extends('layouts.master')

@section('content')

<section>
  <div class="container-fuild">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header text-center">
            <h5>Education Table</h5>
          </div>
          <!-- Category  Table-->
          <div class="card-body table-responsive">
            <table id="" class="table display text-nowrap">
                <thead>
                    <tr>
                        <th>Serial/ID</th>
                        <th>Degree</th>
                        <th>Institute</th>
                        <th>Sesion</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>
                          <a href="/education/delete/" class="btn-sm btn-info " data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>

                          <a href="/education/delete/" class="btn-sm btn-danger " data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-header text-center">
            <h5>Experience Table</h5>
          </div>
          <!-- Category  Table-->
          <div class="card-body table-responsive">
            <table id="" class="table display text-nowrap">
                <thead>
                    <tr>
                        <th>Serial/ID</th>
                        <th>Degree</th>
                        <th>Institute</th>
                        <th>Sesion</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>
                          <a href="/experience/Edit/" class="btn-sm btn-info " data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>

                          <a href="/experience/delete/" class="btn-sm btn-danger " data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <div class="row mt-5">
      <div class="col-lg-6 m-auto">
        <div class="card">
          <div class="card-header text-center">
            <h5>Working Process Table</h5>
          </div>
          <!-- Category  Table-->
          <div class="card-body table-responsive">
            <table id="" class="table display text-nowrap">
                <thead>
                    <tr>
                        <th>Serial/ID</th>
                        <th>Degree</th>
                        <th>Institute</th>
                        <th>Sesion</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>
                          <a href="/experience/Edit/" class="btn-sm btn-info " data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>

                          <a href="/experience/delete/" class="btn-sm btn-danger " data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
