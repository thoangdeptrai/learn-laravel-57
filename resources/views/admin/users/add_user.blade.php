@extends('layouts.admin')

@section('title', 'Add user')

@section('content')
<h1 align="center">Add User nè</h1>
<div class="container">
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<form action="{{Route('add_user')}}" method="POST" class="container form-group" style="width: 80%;">
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
			<label for="password">Password:</label>
			<input type="password" class="form-control" name="password">
		</div>
		<div class="form-group" align="center">
			<input type="submit" class="btn btn-primary" name="add_user" value="Add user">
		</div>
	</form>
</div>


@endsection