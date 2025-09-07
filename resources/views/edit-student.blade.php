@extends('app')
@section('content1')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Student Information</h4>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('student.update',[$student->id])}}" method="post">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="" autocomplete="off" value="{{$student->student_name}}">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="" autocomplete="off" value="{{$student->email}}">
              <label for="semester">Semester</label>
              <input type="number" name="semester" id="semester" class="form-control" placeholder="" autocomplete="off" value="{{$student->semester}}">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </form>
        </div>
    </div>
@endsection