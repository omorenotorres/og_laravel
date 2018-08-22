<div class="form-group">
	{!! Form::label('tp_codigo', 'CODIGO DE TIPO DE PLATO') !!}
	{!! Form::text('tp_codigo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('tp_descripcion', 'DESCRIPCION DEL TIPO DE PLATO') !!}
	{!! Form::text('tp_descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('tp_imagen', 'IMAGEN') !!}
	{!! Form::file('tp_imagen') !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
