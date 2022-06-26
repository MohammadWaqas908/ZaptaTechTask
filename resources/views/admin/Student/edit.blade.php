@extends('layouts.adminLayoute')
@section('title','Edit Student')
@section('main-content')
<div class="container">
    <form method="POST" action="{{url('/admin-student',[$user->id])}}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">Edit Student</h4>
                    </div>
                    <div class="card-block">
                      <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                              <fieldset class="form-group">
                                  <label for="">Name</label>
                                  <input type="text" class="form-control form-control-lg input-lg" id="name" name="name" 
                                  placeholder="Subject Name" value="{{ old('name',$user->name) }}">
                              </fieldset>
                              <div>
                                  @error('name')
                                      <span class="text-danger" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                            </div>
                            <div class="col-md-6">
                              <fieldset class="form-group">
                                  <label for="">Phone No#</label>
                                  <input type="text" class="form-control form-control-lg input-lg" id="phone_no" name="phone_no" 
                                  placeholder="Phone Number" value="{{ old('phone_no',$user->phone_no) }}">
                              </fieldset>
                              <div>
                                  @error('phone_no')
                                      <span class="text-danger" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                              <fieldset class="form-group">
                                  <label for="">Email</label>
                                  <input type="email" class="form-control form-control-lg input-lg" id="email" name="email" 
                                  placeholder="Email" value="{{ old('email',$user->email) }}" readonly>
                              </fieldset>
                              <div>
                                  @error('email')
                                      <span class="text-danger" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                            </div>
                            <div class="col-md-6">
                              <fieldset class="form-group">
                                  <label for="">Password</label>
                                  <input type="password" class="form-control form-control-lg input-lg" id="password" name="password" 
                                  placeholder="Password" value="">
                              </fieldset>
                              <div>
                                  @error('password')
                                      <span class="text-danger" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                              <fieldset class="form-group">
                                  <label for="">Confirm Password</label>
                                  <input type="text" class="form-control form-control-lg input-lg" id="password_confirmation" name="password_confirmation" 
                                  placeholder="Confirm Password" value="">
                              </fieldset>
                              <div>
                                  @error('password_confirmation')
                                      <span class="text-danger" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                            </div>
                            <div class="col-md-6">
                              <fieldset class="form-group">
                                  <label for="">Department Name</label>
                                  <select name="department_id" class="form-control form-control-lg input-lg" id="department_id">
                                      <option value="">Choose Department</option>
                                      @foreach ($Departments as $Department)
                                          <option value="{{$Department->id}}" {{ old('department_id',$user->department_id) == $Department->id ? "selected" : "" }}>{{$Department->name}}</option>
                                      @endforeach
                                  </select>
                              </fieldset>
                              <div>
                                  @error('department_id')
                                      <span class="text-danger" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info"><i class="ft-save"></i> Update</button>
                        <a href="{{url('/admin-student')}}" class="btn btn-danger"><i class="ft-arrow-left"></i> Cancel</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection