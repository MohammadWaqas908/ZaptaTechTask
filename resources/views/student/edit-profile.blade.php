@extends('layouts.studentbase')
@section('title','Edit Profile')
@section('main-content')
<div class="bg-light p-4 rounded">
    <h1>Edit Profile</h1>    
    <div class="container mt-4">
        @if (session('message'))
            <div class="alert alert-success" role="alert">
                <i class="fa fa-check"></i>
                {{ session('message') }}
            </div>
        @endif
        <form method="post" action="{{url('/student-profile',[$user->id])}}">
            @method('patch')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name" 
                value="{{ old('name',$user->name)}}" required>
                @if ($errors->has('name'))
                    <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="phone_no" class="form-label">Phone No#</label>
                <input value="{{ old('phone_no',$user->phone_no)}}" type="text" class="form-control" name="phone_no" 
                    placeholder="Phone No#" required>
                @if ($errors->has('phone_no'))
                    <span class="text-danger text-left">{{ $errors->first('phone_no') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input value="{{ $user->email }}" type="email" class="form-control" name="email" 
                    placeholder="Email address"  readonly>
                @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" name="password" placeholder="New Password">
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
                <div><small>If you want to change the password then enter new password other wise leave it empty </small></div>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Department</label>
                <select name="department_id" class="form-control" id="department_id">
                    <option value="">Choose Department</option>
                    @foreach ($Departments as $Department)
                        <option value="{{$Department->id}}" {{ old('department_id',$user->department_id) == $Department->id ? "selected" : "" }}>{{$Department->name}}</option>
                    @endforeach
                </select>
                @if ($errors->has('department_id'))
                    <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection