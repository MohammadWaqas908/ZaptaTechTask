@extends('layouts.teacherbase')
@section('title','All Subjects')
@section('main-content')
<div class="bg-light p-4 rounded">
    <div class="bg-light p-4 rounded">
        <h1>Subject In Department</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Sr.#</th>
                <th scope="col">Subject Name</th>
                <th scope="col">Department</th>    
            </tr>
            </thead>
            <tbody>
                @foreach($subjects as $index=>$subject)
                    <tr>
                        <th scope="row">{{ ++$index }}</th>
                        <td>{{ $subject->name }}</td>
                        <td>{{ $subject->department->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex">
            {!! $subjects->links() !!}
        </div>
    </div>
</div>
@endsection