<div class="form-group">
	{!! Form::label('p_titulo', 'TITULO DE LA PROMOCION') !!}
	{!! Form::text('p_titulo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('p_descripcion', 'DESCRIPCION DE LA PROMOCION') !!}
	{!! Form::text('p_descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('p_imagen', 'IMAGEN DE LA PROMOCION') !!}
	{!! Form::file('p_imagen') !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
