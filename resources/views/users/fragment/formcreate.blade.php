<div  class="form-group">
	{!! Form::label('name', 'NOMBRE') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('email', 'EMAIL') !!}
	{!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div  class="form-group">
	{!! Form::label('password', 'CLAVE') !!}
	{!! Form::text('password', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>