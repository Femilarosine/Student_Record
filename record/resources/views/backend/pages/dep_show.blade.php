
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
                                <label for="">Name : {{ $user->department_id }}</label>

                            </div>
                            <div class="col-md-12">
                                <label for="">Mail : {{ $user->department_name }}</label>
                            </div>
                           
                            <div class="col-md-12">
                                <label for="">Description : {{ $user->description }}</label>
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