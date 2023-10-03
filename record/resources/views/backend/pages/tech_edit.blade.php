
@extends('backend.layouts.subpage')
@section('content')


<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Update Student Record Entry</h3>
             
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                    <form class="forms-sample" action="{{ route('teacher.update',$user->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT') 
                      <div class="row">
                      <div class="form-group col-md-6">
                    <label>User_id:</label>
                        <input type="text" name="teacher_id" class="form-control" value="{{ $user->teacher_id }}" required>
                    </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputUsername1">Username:</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="teacher_name" placeholder="teacher_name" value="{{ $user->teacher_name }}" required/>
                      </div>
                    </div>
                   

                    <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Email:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" value="{{ $user->email }}" required/>
                      </div>


                <div class="form-group col-md-6">
           <label>Phone Number:</label>
            <input type="text" name="number" class="form-control" value="{{ $user->number }}" pattern="[0-9]{10}" required>
          </div>
            </div>

                                            
                            
                      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

              
            </div>
          </div>
          @endsection