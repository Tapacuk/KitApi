@extends('tapacuk\kitapi::home')

@section('content')
		<form method="post">
		{!! csrf_token() !!}
		<div class="form-group">
				@if($errors->has('name'))
				{{ $errors->first('name') }}
				@endif
    <label for="name">Name:</label>
    <input type="name" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection