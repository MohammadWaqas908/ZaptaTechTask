@extends('layouts.adminLayoute')
@section('title','Add Subject')
@section('main-content')
<div class="container">
    <form method="POST" action="{{url('/admin-subject')}}">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Subject</h4>
                    </div>
                    <div class="card-block">
                      <div class="card-body">
                        <fieldset class="form-group">
                            <label for="">Department Name</label>
                            <select name="department_id" class="form-control form-control-lg input-lg" id="department_id" required>
                                <option value="">Choose Department</option>
                                @foreach ($Departments as $Department)
                                    <option value="{{$Department->id}}" {{ old('department_id') == $Department->id ? "selected" : "" }}>{{$Department->name}}</option>
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
                        <fieldset class="form-group">
                            <label for="">Subject Name</label>
                            <input type="text" class="form-control form-control-lg input-lg" id="name" name="name" 
                            placeholder="Subject Name" value="{{ old('name') }}" required>
                        </fieldset>
                        <div>
                            @error('name')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-info"><i class="ft-save"></i> Save</button>
                        <a href="{{url('/admin-subject')}}" class="btn btn-danger"><i class="ft-arrow-left"></i> Cancel</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection