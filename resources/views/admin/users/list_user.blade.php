@extends('layouts.admin')

@section('title', 'List user')

@section('content')
<h1 align="center">List User nè</h1>

<div class="container">
	<a href="/admin/add_user">
		<input type="button" class="btn btn-primary" value="Add User">
	</a>
	<table class="table table-striped">
	<tr>
		<th style="width: 10%">Id</th>
		<th style="width: 40%">Username</th>
		<th>Email</th>
		<td>Action</td>
	</tr>
@foreach ($users as $user)
	<tr>
		<td>{{ $user->id }}</td>
	    <td>{{ $user->name }}</td>
	    <td>{{ $user->email }}</td>
	    <td>
	    	<a href="/admin/edit_user/{{ $user->id }}">
	    		<button class="far fa-edit btn btn-primary"></button>
	    	</a>
	    	<a href="/admin/delete_user/{{ $user->id }}">
	    		<button class="fas fa-skull-crossbones btn btn-danger"></button>
	    	</a>
	    </td>
	</tr>
         
@endforeach
</table>  
</div>

@endsection