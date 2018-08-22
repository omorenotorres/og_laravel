@extends('layouts.app')

@section('content')
<div class="container">
	@include('carousels.fragment.error')
	@include('carousels.fragment.info')
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4"></div>
		<div class="col-lg-4">@include('carousels.fragment.aside')</div>
	</div>
	<div class="container">
		<div class="row">
			<div class=col-lg-12>
				<h2>
					<a href="{{ route('carousels.index') }}" class="btn btn-primary float-right">Listado</a>
					<br>
					Agregar imagen al Carrusel
				</h2>

				<br>
        		{!! Form::open(['route' => 'carousels.store', 'files' => true]) !!}
                	@include('carousels.fragment.formcreate')
        		{!! Form::close() !!}
			</div>			
		</div>
	</div>


</div>	

	
	


@endsection
