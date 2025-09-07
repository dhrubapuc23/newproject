@extends('app')
@section('content1')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Student List</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Semester</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->student_name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->semester }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $students->withQueryString()->links('pagination::bootstrap-4') !!}
        </div>
    </div>
    
@endsection