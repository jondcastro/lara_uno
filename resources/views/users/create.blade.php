@extends('layouts.app')
@section('content')

<div class="col-8 offset-4">


	<div class="col-6 offset-1">

		<h4 class="jumbotron">Agregar Usuario</h4>

	</div>

	<div class="col-6 offset-1">

		<form action="users" method="post" accept-charset="utf-8">
			<input class="form-control" type="text" name="name" placeholder="name">

			<input class="form-control" type="email" name="email" placeholder="email">

			<input class="form-control" type="password" name="password" placeholder="password">

			<button class="btn btn-info" type="submit">Enviar</button>
		</form>

	</div>

	




	@endsection

</div>