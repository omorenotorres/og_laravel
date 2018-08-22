@extends('layouts.app')

@section('content')
<div class="container">
	@include('users.fragment.error')
	@include('users.fragment.info')
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4"></div>
		<div class="col-lg-4">@include('users.fragment.aside')</div>
	</div>
	<div class="container">
		<div class="row">
			<div class=col-lg-12>
				<h2>
					<a href="{{ route('users.index') }}" class="btn btn-primary float-right">Listado</a>
					<br>
					Crear USUARIO
				</h2>

				<br>
        		{!! Form::open(['route' => 'users.store', 'files' => true]) !!}
                	@include('users.fragment.formcreate')
        		{!! Form::close() !!}
			</div>			
		</div>
	</div>


</div>	
@endsection
