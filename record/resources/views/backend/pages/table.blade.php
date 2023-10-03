@extends('backend.layouts.subpage')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
          <a href="{{ route('form') }}" tite="add" class="btn btn-primary">Add+</a>
<div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title">
                      <div class="row"><div class="col-sm-2"><h4>Table</h4></div><div class="col-sm-7"></div>
                      <div class="col-sm-3"><a href="{{ route('form') }}" data-toggle="tooltip" title="Edit"> <i class="fa fa-edit" style="font-size:30px;color:black"></i></a>
                    <a href=""  onclick="myFunction()" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o" style="font-size:30px;color:black"></i>

                        <!-- <script>
                        function myFunction() {
                        alert("Are sure you want to delete!");
                        }
                        </script> -->
                        <a href="" data-toggle="tooltip" title="View"><i class="fa fa-eye" style="font-size:30px;color:blue"></i></a>
                      </div>
                      </div>
<table class="table table-striped table-hover text-center">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Mail</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry the Bird</td>
      <td>Larry</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Jesintha</td>
      <td>Mary</td>
      <td>@mary</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Alex</td>
      <td>Antony</td>
      <td>@alex</td>
    </tr>  <tr>
      <th scope="row">6</th>
      <td>Femila</td>
      <td>Rosine</td>
      <td>@rose</td>
    </tr>
  </tbody>
</table>
</div>
                  </div>
                </div>
              </div>
                      </div>
          
          @endsection