          
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

                    <form class="forms-sample" action="{{ route('student.update',$user->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')  
                      <div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputUsername1">Username:</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="name" placeholder="Username" value="{{ $user->name }}" required/>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Email:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" value="{{ $user->email }}" required/>
                      </div>
                    </div>
                   

                    <div class="row">
            <div class="form-group col-md-6">
            <label>Gender :</label>
            <input type="radio" name="gender" value="Male" {{ $user->gender == 'Male' ? 'checked' : ''}} > Male 
            <input type="radio" name="gender" value="Female" {{ $user->gender == 'Female' ? 'checked' : ''}} > Female 
            <input type="radio" name="gender" value="Other" {{ $user->gender == 'Other' ? 'checked' : ''}} > Other
          </div>


                <div class="form-group col-md-6">
           <label>Age:</label>
            <input type="number" name="age" max="40" min="18" class="form-control" value="{{ $user->age }}" >
          </div>
            </div>


            
            <div class="row">
            <div class="form-group col-md-6">
            <label class="label">Department</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="department_id" class="form-control" required>
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option value="CA1" {{ $user->department_id == 'CA1' ? 'selected' : ''}} >CA1</option>
                                    <option value="CS2" {{ $user->department_id == 'CS2' ? 'selected' : ''}}>CS2</option>
                                    <option value="BCOM3" {{ $user->department_id == 'BCOM3' ? 'selected' : ''}}>BCOM3</option>
                                    <option value="BBA4" {{ $user->department_id == 'BBA4' ? 'selected' : ''}}>BBA4</option>
                                    <option value="BED5" {{ $user->department_id == 'BED5' ? 'selected' : ''}}>BED5</option>
                                </select>
                                <div class="select-dropdown"></div>
</div>
</div>


                <div class="form-group col-md-6">
            <label class="label">Year</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="year" class="form-control">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option value="2019" {{ $user->year == '2019' ? 'selected' : ''}}>2019</option>
                                    <option value="2020" {{ $user->year == '2020' ? 'selected' : ''}}>2020</option>
                                    <option value="2021" {{ $user->year == '2021' ? 'selected' : ''}}>2021</option>
                                    <option value="2022" {{ $user->year == '2022' ? 'selected' : ''}}>2022</option>
                                    <option value="2023" {{ $user->year == '2023' ? 'selected' : ''}}>2023</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>  
                </div>
<div>
<div class="row">
               <div class="form-group col-md-12">
               <label class="">Select Image File to Upload:</label><br>
               <input type="file" name="image" id="file" class="form-control" required value=""
               {{ isset($user) ? '' : 'required' }}>
                                <input type="hidden" name="image_old" value="{{ $user->image ?? '' }}">
                                @if (isset($user))
                                    <img src="{{ asset('image' . $user->image) }}" width="100" alt="">
                                    <a href="{{ asset('image' . $user->image) }}"
                                        download="">{{ $user->image ?? '' }}</a>
                                @endif<br>
            
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