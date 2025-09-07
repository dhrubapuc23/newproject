@extends('app')
@section('content1')
  <div class="col-md-8 offset-md-2">
    <form action="{{route('student.file.submit')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="file">Choose file</label>
            <input type="file" name="file" id="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
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