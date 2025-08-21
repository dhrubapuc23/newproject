<h1>Homepage</h1>
<h2>User ID: {{$id}}</h2>
@if ($name == null)
    <h2>No username found!</h2>
@else
    <h2>Username: {{$name}}</h2>
@endif

<a href="{{route('gt')}}">Greeting page</a>
