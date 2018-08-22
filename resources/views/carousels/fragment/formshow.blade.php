<div class="form-group">
	{!! Form::label('c_titulo', 'TITULO DEL CARRUSEL') !!}
	{!! Form::text('c_titulo', null, ['class' => 'form-control']) !!}
</div>

<div class="container">
	@if($carousel->c_imagen)
        <img src="{{ $carousel->c_imagen }}" class="img-responsive" width="500" height="500">
        <br>
        <p>{{ $carousel->c_imagen }}</p>
    @endif
</div>


