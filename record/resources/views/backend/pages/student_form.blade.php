
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

                    <form class="forms-sample" action="{{ route('student.store')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputUsername1">Username:</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="name" placeholder="Username" required/>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Email:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" required/>
                      </div>
                    </div>
                   

                    <div class="row">
            <div class="form-group col-md-6">
            <label>Gender :</label>
            <input type="radio" value="Male" name="gender" > Male 
            <input type="radio" value="Female" name="gender"> Female 
            <input type="radio" value="Other" name="gender"> Other
          </div>


                <div class="form-group col-md-6">
           <label>Age:</label>
            <input type="number" name="age" max="40" min="18" class="form-control">
          </div>
            </div>


            
            <div class="row">
            <div class="form-group col-md-6">
            <label class="label">Department</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="department_id" class="form-control" required>
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>CA1</option>
                                    <option>CS2</option>
                                    <option>BCOM3</option>
                                    <option>BBA4</option>
                                    <option>BED5</option>
                                </select>
                                <div class="select-dropdown"></div>
</div>
</div>


                <div class="form-group col-md-6">
            <label class="label">Year</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="year" class="form-control">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>  
                </div>
<div>
<div class="row">
               <div class="form-group col-md-12">
               <label class="">Select Image File to Upload:</label><br>
               <input type="file" name="image" id="file" class="form-control" required><br>
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