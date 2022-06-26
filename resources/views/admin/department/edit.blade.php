@extends('layouts.adminLayoute')
@section('title','Edit Department')
@section('main-content')
<div class="container">
    <form method="POST" action="{{url('/admin-department',[$department->id])}}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">Edit Department</h4>
                    </div>
                    <div class="card-block">
                      <div class="card-body">
                        <fieldset class="form-group">
                            <label for="">Department Name</label>
                            <input type="text" class="form-control form-control-lg input-lg" id="name" name="name" 
                            placeholder="Department Name" value="{{ old('name',$department->name) }}" required>
                        </fieldset>
                        <div>
                            @error('name')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-info"><i class="ft-save"></i> Update</button>
                        <a href="{{url('/admin-department')}}" class="btn btn-danger"><i class="ft-arrow-left"></i> Cancel</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection