@extends('plantilla')

@section('seccion')

<h3>Nuestro Equipo de trabajo</h3>
@foreach($equipo as $item)
	<a href="{{ route('nosotros', $item)}}" class="h4 text-danger">{{ $item }}</a><br>
@endforeach

@if(!empty($nombre))
	@switch($nombre)
		@case($nombre == 'Wilson Castillo')
			<h2 class="mt-3">{{ $nombre }}</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea repudiandae, veritatis, tenetur aliquam explicabo adipisci minima voluptatibus repellendus molestias repellat libero harum, perferendis autem quasi excepturi ducimus quisquam consectetur at!</p>
			@break

		@case($nombre == 'Roxana Castillo')
			<h2 class="mt-3">{{ $nombre }}</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea repudiandae, veritatis, tenetur aliquam explicabo adipisci minima voluptatibus repellendus molestias repellat libero harum, perferendis autem quasi excepturi ducimus quisquam consectetur at!</p>
			@break

		@case($nombre == 'Vanessa Castillo')
			<h2 class="mt-3">{{ $nombre }}</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea repudiandae, veritatis, tenetur aliquam explicabo adipisci minima voluptatibus repellendus molestias repellat libero harum, perferendis autem quasi excepturi ducimus quisquam consectetur at!</p>
			@break
	@endswitch
@endif


@endsection