@extends('layouts.admin')

@section('title', 'Edit user')

@section('content')
<h1 align="center">Edit User nè</h1>
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
	<form action="{{Route('/admin/edit_user/', $id)}}" method="POST" class="container form-group" style="width: 80%;">
		@csrf
		@foreach ($users as $user)
		<div class="form-group">
		    <label for="name">Name: </label>
		    <input type="text" class="form-control" name="name" value="{{$user->name}}">
		</div>
		<div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" name="email" value="{{$user->email}}">
		</div>
		<div class="form-group" align="center">
			<input type="submit" class="btn btn-primary" name="edit_user" value="Add user">
		</div>
		@endforeach
	</form>
</div>


@endsection