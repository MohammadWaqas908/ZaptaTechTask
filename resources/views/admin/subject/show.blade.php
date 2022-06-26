@extends('layouts.adminLayoute')
@section('title','Subject')
@section('main-content')
<div class="container">
    <div class="card">
        <div class="card-header">
          <a href="{{url('/admin-subject/create')}}" class="btn btn-primary">Add Subject</a>
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
          <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Sr.</th>
                    <th>Department Name</th>
                    <th>Subject Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($Subjects as $index=>$Subject)
                    <tr>
                        <td>{{++$index}}</td>
                        <td>{{$Subject->name}}</td>
                        <td>{{$Subject->department->name}}</td>
                        <td>
                          <a href="{{url('admin-subject/'.$Subject->id.'/edit')}}" class="btn btn-primary">Edit</a>
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