@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Jobs</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
                <p class="card-text">number of jobs: 8</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Categories</h5>
            
                <p class="card-text">number of categories: 4</p>
            
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Admins</h5>
            
                <p class="card-text">number of admins: 3</p>
            
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Applications</h5>
            
                <p class="card-text">number of applications: 3</p>
            
            </div>
        </div>
    </div>
</div>

@endsection