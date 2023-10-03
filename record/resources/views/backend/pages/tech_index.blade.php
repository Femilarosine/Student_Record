@extends('backend.layouts.subpage')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
          <a href="{{ route('teacher.create') }}" tite="add" class="btn btn-primary">Add+</a>
<div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title">
                      <div class="row"><div class="col-sm-2"><h4>Teacher Table</h4></div>
                      <div class="col-sm-7"></div>
                      <div class="col-sm-3">
                      
                      </div>
                      </div>
<table class="table table-striped table-hover text-center">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

 
  @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @foreach($users as $key => $user)
    <tr>
      <th scope="row">{{ $key+1}}</th>
      <td>{{$user->teacher_id}}</td>
      <td>{{$user->teacher_name}}</td>
     
      <td>  <a href="{{ route('teacher.edit',$user->id) }}" data-toggle="tooltip" title="Edit"> <i class="fa fa-edit" style="font-size:30px;color:black"></i></a>
      <a data-toggle="tooltip" title="delete" onclick="return confirm('Are you sure you want to delete?')" href="{{route('teacher.destroy', $user->id)}}"><i class="fa fa-trash" style="font-size:30px;color:black"></i></a>

                        <a href="{{ route('teacher.show',$user->id) }}" data-toggle="tooltip" title="View"><i class="fa fa-eye" style="font-size:30px;color:blue"></i></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
                  </div>
                </div>
              </div>
                      </div>
          
          @endsection