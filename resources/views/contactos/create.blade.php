@extends('layouts.app')

@section('content')
<div class="container">
	@include('contactos.fragment.error')
	@include('contactos.fragment.info')
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4"></div>
		<div class="col-lg-4">@include('contactos.fragment.aside')</div>
	</div>
	<div class="container">
		<div class="row">
			<div class=col-lg-12>
				<h2>
					<a href="{{ route('contactos.index') }}" class="btn btn-primary float-right">Listado</a>
					<br>
					Crear TIPO DE CONTACTO
				</h2>

				<br>
        		{!! Form::open(['route' => 'contactos.store', 'files' => true]) !!}
                	@include('contactos.fragment.formcreate')
        		{!! Form::close() !!}
			</div>			
		</div>
	</div>


</div>	

	
	


@endsection
