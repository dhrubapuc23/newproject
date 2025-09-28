@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Student List</h4>
            <a href="{{route('student.pdf')}}" class="btn btn-info mb-3" style="float: right;">Download</a>
             @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Semester</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->student_name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->semester }}</td>
                        <td><a href="{{route('student.edit',[$student->id])}}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{route('student.delete',[$student->id])}}" class="btn btn-danger" onclick="confirm('Are you sure?')">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $students->withQueryString()->links('pagination::bootstrap-4') !!}
        </div>
    </div>
    
@endsection