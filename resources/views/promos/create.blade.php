@extends('layouts.app')

@section('content')
<div class="container">
	@include('promos.fragment.error')
	@include('promos.fragment.info')
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4"></div>
		<div class="col-lg-4">@include('promos.fragment.aside')</div>
	</div>
	<div class="container">
		<div class="row">
			<div class=col-lg-12>
				<h2>
					<a href="{{ route('promos.index') }}" class="btn btn-primary float-right">Listado</a>
					<br>
					Crear PROMOCION
				</h2>

				<br>
        		{!! Form::open(['route' => 'promos.store', 'files' => true]) !!}
                	@include('promos.fragment.formcreate')
        		{!! Form::close() !!}
			</div>			
		</div>
	</div>


</div>	

	
	


@endsection
