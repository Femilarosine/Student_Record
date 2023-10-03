@extends('backend.layouts.subpage')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="student-profile py-4">
            <div class="container">
                <div class="col-lg-6 text-center">
                    <div class="card shadow-sm">
                        <div class="card-header bg-transparent border-0">
                           <h1>Total Students</h1>
                        </div>
                        <div class="card-body pt-0">
                            <h3 class="text-info">{{ $studentCount }}</h3> <!-- Display the count here -->
                            <table class="table table-bordered">
                                <!-- ... Rest of the table ... -->
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
