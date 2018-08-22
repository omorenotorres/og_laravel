<div class="form-group">
	{!! Form::label('co_descripcion', 'DESCRIPCION DEL TIPO DE CONTACTO') !!}
	{!! Form::text('co_descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('co_informacion', 'INFORMACION DEL TIPO DE CONTACTO') !!}
	{!! Form::text('co_informacion', null, ['class' => 'form-control']) !!}
</div>

<div class="container">
	@if($contacto->co_imagen)
        <img src="{{ $contacto->co_imagen }}" class="img-responsive" width="500" height="500">
        <br>
        <p>{{ $contacto->co_imagen }}</p>
    @endif
</div>

<div class="form-group">
	{!! Form::label('co_imagen', 'IMAGEN') !!}
	{!! Form::file('co_imagen') !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
