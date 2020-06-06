@extends('layouts.app')
@section('content')

<div class="col-8 offset-4">


	<div class="col-6 offset-1">

		<h4 class="jumbotron">Listado de Usuarios</h4>

	</div>

	<div>

		<a class="btn btn-success" href="users/create">Agregar</a>

	</div>


	<table class="table table-responsive table-striped">	
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Country</th>
				<th>State</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $user)
			<tr>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->country}}</td>
				<td>{{$user->state}}</td>
				<td></td>
			</tr>

			@endforeach
		</tbody>
	</table>

{{-- @foreach ($users as $user)
	{{$user->name}}
@endforeach
--}}

@endsection

</div>