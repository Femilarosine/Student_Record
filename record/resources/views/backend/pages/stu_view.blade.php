
@extends('backend.layouts.subpage')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
<div class="student-profile py-4">
  <div class="container">
  
      <div class="col-lg-12 align-center">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><img src="{{ asset('image' .$user->image) }}" width="50%" height="50%">Welcome {{ $user->name}}</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
     
      <tr>
                <th width="30%">ID</th>
                <td width="2%">:</td>
                <td>{{ $user->id}}</td>
              </tr>
              <tr>
                <th width="30%">NAME</th>
                <td width="2%">:</td>
                <td>{{ $user->name}}</td>
              </tr>
              <tr>
                <th width="30%">MAIL</th>
                <td width="2%">:</td>
                <td>{{ $user->email}}</td>
              </tr>
              <tr>
                <th width="30%">GENDER</th>
                <td width="2%">:</td>
                <td>{{ $user->gender}}</td>
              </tr>
              <tr>
                <th width="30%">AGE</th>
                <td width="2%">:</td>
                <td>{{ $user->age}}</td>
              </tr>
              <tr>
                <th width="30%">DEPARTMENT ID</th>
                <td width="2%">:</td>
                <td>{{ $user->department_id}}</td>
              </tr>
              <tr>
                <th width="30%">YEAR</th>
                <td width="2%">:</td>
                <td>{{ $user->year}}</td>
              </tr>
            </table>
          </div>
        </div>
     
         
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection