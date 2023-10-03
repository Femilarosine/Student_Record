
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

                    <form class="forms-sample" action="{{ route('department.store')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputUsername1">Department Id:</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="department_id" placeholder="id" required/>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Department Name:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="department_name" placeholder="Department Name" required/>
                      </div>
                    </div>
                   

                    <div class="row">
                <div class="form-group col-md-12">
           <label>Description:</label>
           <textarea rows="4" cols="54" id="keterangan" name="description" style="resize:none, "></textarea>
           </div>
         </div>
          <div>


                 <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

              
            </div>
          </div>
          @endsection