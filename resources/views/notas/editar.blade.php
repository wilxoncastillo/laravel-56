@extends('plantilla')

@section('seccion')
	<h1>Editar nota {{ $nota->id }}</h1>

	@if(session('mensaje'))
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
    @endif

	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</ul>
	</div>
	@endif

	<form action="{{ route('notas.update', $nota->id) }}" method="POST">
		@csrf
		@method('PUT')
		<input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{ old('nombre', $nota->nombre) }}">
		<input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" value="{{ old('descripcion', $nota->descripcion) }}">
		<button class="btn btn-warning btn-block" type="submit">Actualizar</button>
	</form>
@endsection
