@extends('layouts.adminLayoute')
@section('title','Department')
@section('main-content')
<div class="container">
    <div class="card">
        <div class="card-header">
          <a href="{{url('/admin-department/create')}}" class="btn btn-primary">Add Department</a>
          @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('message') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
        </div>
        <div class="card-block">
          <div class="card-body table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Sr.</th>
                    <th>Name</th>
                    <th>Subjects</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($departments as $index=>$department)
                    <tr class="text-nowrap">
                        <td>{{++$index}}</td>
                        <td>{{$department->name}}</td>
                        <td>
                          @foreach ($department->department_has_subjects as $item)
                            <span class="badge badge-info p-1">{{$item->name}}</span>  
                          @endforeach
                        </td>
                        <td>
                          <a href="{{url('admin-department/'.$department->id.'/edit')}}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>  
          </div>
        </div>
    </div>
</div>
@endsection