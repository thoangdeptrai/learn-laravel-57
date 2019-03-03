@extends('layouts.admin')

@section('title', 'List user')

@section('content')
<h1 align="center">Add User nè</h1>

<form action="{{Route('add_user')}}" method="POST" class="form-group" style="width: 80%;">
	@csrf
	<div class="form-group">
	    <label for="name">Name: </label>
	    <input type="text" class="form-control" name="name">
	</div>
	<div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" name="email">
	</div>
	<div class="form-group">
		<label for="pwd">Password:</label>
		<input type="password" class="form-control" name="pwd">
	</div>
	<div class="form-group">
		<input type="submit" class="form-control" name="add_user" value="Add user">
	</div>
</form>

@endsection