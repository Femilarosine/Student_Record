
@extends('backend.layouts.subpage')
@section('content')
<div class="main-panel">
          <div class="content-wrapper">
<div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h1>View Details</h1>
                    </div>
                    <div class="card-body">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="">Name : {{ $user->name }}</label>

                            </div>
                            <div class="col-md-12">
                                <label for="">Mail : {{ $user->email }}</label>
                            </div>
                           
                            <div class="col-md-12">
                                <label for="">Gender : {{ $user->gender }}</label>
                            </div>

                            <div class="col-md-12">
                                <label for="">Age : {{ $user->age }}</label>
                            </div>
                          
                            <div class="col-md-12">
                                <label for="">Year : {{ $user->year }}</label>
                            </div>

                            <div class="col-md-12">
                                <label for="">Image:</label>
                                <img src="{{ asset('image' . $user->image) }}" width="100" alt="">
                                <a href="{{ asset('image' . $user->image) }}"
                                    download>{{ $user->image ?? '' }}</a>
                         
                        </div>
                           
                        </div>
                      
                    </div>
                </div>
                <a class="btn btn-light" href="{{ URL::previous() }}">Back</a>
</div>
</div>
            </div>
        </div>
    </div>
    @endsection