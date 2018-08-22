@extends('layouts.app')

@section('content')
<div class="container">
	@include('buffets.fragment.error')
	@include('buffets.fragment.info')
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4"></div>
		<div class="col-lg-4">@include('buffets.fragment.aside')</div>
	</div>
	<div class="container">
		<div class="row">
			<div class=col-lg-12>
				<h2>
					<a href="{{ route('buffets.index') }}" class="btn btn-primary float-right">Listado</a>
					<br>
					Crear BUFFET
				</h2>

				<br>
        		{!! Form::open(['route' => 'buffets.store', 'files' => true]) !!}
                	@include('buffets.fragment.formcreate')
        		{!! Form::close() !!}
			</div>			
		</div>
	</div>


</div>	

	
	


@endsection
