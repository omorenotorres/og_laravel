<div class="form-group">
	{!! Form::label('p_titulo', 'TITULO DE LA PROMOCION') !!}
	{!! Form::text('p_titulo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('p_descripcion', 'DESCRIPCION DE LA PROMOCION') !!}
	{!! Form::text('p_descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="container">
	@if($promo->p_imagen)
        <img src="{{ $promo->p_imagen }}" class="img-responsive" width="500" height="500">
        <br>
        <p>{{ $promo->p_imagen }}</p>
    @endif
</div>

<div class="form-group">
	{!! Form::label('p_imagen', 'IMAGEN DE LA PROMOCION') !!}
	{!! Form::file('p_imagen') !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
