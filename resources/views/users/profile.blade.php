@extends('layouts.app')

@section('content')
<div class="card card-default">

    <div class="card-header">User Profile <a href="" class="btn btn-sm btn-primary float-right">Edit</a></div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-2">
                <strong>
                    <p>Name</p>
                    <p>Email</p>
                    <p>Birthday</p>
                    <p>Gender</p>
                    <p>Phone</p>
                    <p>Location</p>
                </strong>
            </div>

            <div class="col-md-10">
                <img src={{ $user->image ? $user->image : "http://via.placeholder.com/175x235" }} class="float-right" height="235" width="175">
                <p>{{ $user->name }}</p>
                <p>{{ $user->email }}</p>
                <p>{{ $user->birthday }}</p>
                <p>{{ $user->gender }}</p>
                <p>{{ $user->phone }}</p>
                <p>{{ $user->location }}</p>
            </div>
        </div>
    </div>

</div>
@endsection
