<div class="form-group">
	{!! Form::label('tp_codigo', 'CODIGO DE TIPO DE PLATO') !!}
	{!! Form::text('tp_codigo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('tp_descripcion', 'DESCRIPCION DEL TIPO DE PLATO') !!}
	{!! Form::text('tp_descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="container">
	@if($tplato->tp_imagen)
        <img src="{{ $tplato->tp_imagen }}" class="img-responsive" width="500" height="500">
        <br>
        <p>{{ $tplato->tp_imagen }}</p>
    @endif

</div>


