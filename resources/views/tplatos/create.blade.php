@extends('layouts.app')

@section('content')
<div class="container">
	@include('tplatos.fragment.error')
	@include('tplatos.fragment.info')
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4"></div>
		<div class="col-lg-4">@include('tplatos.fragment.aside')</div>
	</div>
	<div class="container">
		<div class="row">
			<div class=col-lg-12>
				<h2>
					<a href="{{ route('tplatos.index') }}" class="btn btn-primary float-right">Listado</a>
					<br>
					Crear TIPO DE PLATO
				</h2>

				<br>
        		{!! Form::open(['route' => 'tplatos.store', 'files' => true]) !!}
                	@include('tplatos.fragment.formcreate')
        		{!! Form::close() !!}
			</div>			
		</div>
	</div>


</div>	

	
	


@endsection
