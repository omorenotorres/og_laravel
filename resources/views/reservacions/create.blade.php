@extends('layouts.app')

@section('content')
<div class="container">
	@include('reservacions.fragment.error')
	@include('reservacions.fragment.info')
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4"></div>
		<div class="col-lg-4">@include('reservacions.fragment.aside')</div>
	</div>
	<div class="container">
		<div class="row">
			<div class=col-lg-12>
				<h2>
					<a href="{{ route('reservacions.index') }}" class="btn btn-primary float-right">Listado</a>
					<br>
					Crear RESERVACION
				</h2>

				<br>
        		{!! Form::open(['route' => 'reservacions.store']) !!}
                	@include('reservacions.fragment.form')
        		{!! Form::close() !!}
			</div>			
		</div>
	</div>


</div>	

	
	


@endsection
