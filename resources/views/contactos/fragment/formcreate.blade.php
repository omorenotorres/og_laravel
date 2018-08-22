<div class="form-group">
	{!! Form::label('co_descripcion', 'DESCRIPCION DEL TIPO DE CONTACTO') !!}
	{!! Form::text('co_descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('co_informacion', 'INFORMACION DEL TIPO DE CONTACTO') !!}
	{!! Form::text('co_informacion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('co_imagen', 'IMAGEN') !!}
	{!! Form::file('co_imagen') !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
