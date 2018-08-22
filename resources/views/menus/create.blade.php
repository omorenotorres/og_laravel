@extends('layouts.app')

@section('content')
<div class="container">
	@include('menus.fragment.error')
	@include('menus.fragment.info')
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4"></div>
		<div class="col-lg-4">@include('menus.fragment.aside')</div>
	</div>
	<div class="container">
		<div class="row">
			<div class=col-lg-12>
				<h2>
					<a href="{{ route('menus.index') }}" class="btn btn-primary float-right">Listado</a>
					<br>
					Crear PLATO
				</h2>

				<br>
        		{!! Form::open(['route' => 'menus.store']) !!}
                	@include('menus.fragment.form')
        		{!! Form::close() !!}
			</div>			
		</div>
	</div>


</div>	

	
	


@endsection
