
@extends('backend.layouts.subpage')
@section('content')


<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">New Student Record Entry</h3>
             
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                    <form class="forms-sample" action="{{ route('teacher.store')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                      <div class="form-group col-md-6">
                    <label>User_id:</label>
                        <input type="text" name="teacher_id" class="form-control" required>
                    </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputUsername1">Username:</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="teacher_name" placeholder="teacher_name" required/>
                      </div>
                    </div>
                   

                    <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Email:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" required/>
                      </div>


                <div class="form-group col-md-6">
           <label>Phone Number:</label>
            <input type="text" name="number" class="form-control" pattern="[0-9]{10}" required>
          </div>
            </div>

                                            
                            
                      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                      <a class="btn btn-light" href="{{ URL::previous() }}">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>

              
            </div>
          </div>
          @endsection