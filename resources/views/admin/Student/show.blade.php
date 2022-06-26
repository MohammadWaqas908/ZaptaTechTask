@extends('layouts.adminLayoute')
@section('title','Student')
@section('main-content')
<div class="container">
    <div class="card">
        <div class="card-header">
          <a href="{{url('/admin-student/create')}}" class="btn btn-primary">Add Sudent</a>
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
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $index=>$user)
                    <tr>
                        <td>{{++$index}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->phone_no}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->department->name??''}}</td>
                        <td>
                          @if($user->status == 0)
                              <button class="btn btn-success 
                              enable_disable_status" id="{{$user->id}}">Active</button>
                          @else
                              <button class="btn btn-danger
                              enable_disable_status" id="{{$user->id}}">Block</button>
                          @endif  
                        </td>
                        <td>
                          <a href="{{url('admin-student/'.$user->id.'/edit')}}" class="btn btn-primary">Edit</a>
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
@section('script')
    <script>
      $(document).ready(function () {
        $('.enable_disable_status').click(function() {
            const thisRef = $(this);
            thisRef.text('Processing');
            $.ajax({
                type: 'GET',
                url: '/admin-student/'+thisRef.attr('id'),
                success: function(response) {
                    console.log(response);
                    if (response.status == 1) {
                        toastr.success(response.msg);
                        thisRef.text(response.text);
                        thisRef.removeClass(response.removeClass);
                        thisRef.addClass(response.class);
                    } else {
                        toastr.success(response.msg);
                    }
                }
            });
        });
      });
    </script>
@endsection