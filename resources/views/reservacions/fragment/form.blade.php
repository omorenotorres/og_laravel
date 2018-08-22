<div class="form-group">
	{!! Form::label('nombre', 'NOMBRE') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('correo', 'CORREO') !!}
	{!! Form::text('correo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('hora', 'HORA') !!}
	{!! Form::number('hora', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('fecha', 'FECHA') !!}
	{!! Form::date('fecha', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('comensales', 'NUMERO DE COMENSALES') !!}
	{!! Form::number('comensales', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('telefono', 'TELEFONO') !!}
	{!! Form::number('telefono', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
