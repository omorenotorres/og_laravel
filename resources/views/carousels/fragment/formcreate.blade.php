<div class="form-group">
	{!! Form::label('c_titulo', 'TITULO DEL CARRUSEL') !!}
	{!! Form::text('c_titulo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('c_imagen', 'IMAGEN') !!}
	{!! Form::file('c_imagen') !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
