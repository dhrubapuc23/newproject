@extends('app')
@section('content1')
  <div class="col-md-8 offset-md-2">
    @session('success')
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endsession
    <form action="{{route('student.file.submit')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="file">Choose file</label>
            <input type="file" name="file" id="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>File Path</th>
          <th>File</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($files as $file)
        <tr>
          <td scope="row">{{$file->id}}</td>
          <td>{{$file->file_path}}</td>
          <td><img src="{{asset($file->file_path)}}" alt="" srcset="" style="width: 50%; height:50%;"></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  {{-- @section('content2')

  <table class="table">
    <tbody>
        <tr>
            <td><img src="{{}}" alt="" srcset=""></td>
        </tr>
    </tbody>
  </table>
      
  @endsection --}}
    
@endsection