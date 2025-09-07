@extends('app')
@section('content1')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">User Information</h4>
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
            <form action="{{route('student.store')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="" autocomplete="off">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="" autocomplete="off">
              <label for="semester">Semester</label>
              <input type="number" name="semester" id="semester" class="form-control" placeholder="" autocomplete="off">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
@endsection