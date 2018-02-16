@extends('layouts.app')

@section('content')
<div class="card card-default">

    <form method="POST" action="{{ route('users.profile.update') }}">
    <div class="card-header">Edit Profile <button type="submit" class="btn btn-sm btn-success float-right">Save</button></div>

    <div class="card-body">
        @method('PUT')
        @csrf
        <!-- <img src={{ $user->image ? $user->image : "http://via.placeholder.com/175x235" }} class="float-right" height="235" width="175"> --> 
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="birthday" class="col-md-4 col-form-label text-md-right">Birthday</label>

            <div class="col-md-6">
                <input id="name" type="date" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="birthday" value="{{ $user->birthday }}" required>

                @if ($errors->has('birthday'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('birthday') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>

            <div class="col-md-6">
                <select name="gender" class="form-control">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>

                @if ($errors->has('gender'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('gender') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>

            <div class="col-md-6">
                <input id="phone" type="tel" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $user->phone }}" required>

                @if ($errors->has('phone'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="location" class="col-md-4 col-form-label text-md-right">Location</label>

            <div class="col-md-6">
                <input id="location" type="text" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" value="{{ $user->location }}" required>

                @if ($errors->has('location'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('location') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
    </form>

</div>
@endsection
