@extends('layouts.app')

@section('content')	

 <div class="container">
    <div class="row">
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
        @include('reservacions.fragment.aside')
      </div>
    </div>
   
    <div class=col-lg-12>
      <h2>
        RESERVACION
        <a href="{{ route('reservacions.index') }}" class="btn btn-primary float-right">Listado</a>
      </h2>
      <br>
        {!! Form::model($reservacion, ['route' => ['reservacions.update', $reservacion->id, 'method' => 'GET' ]]) !!}
               @include('reservacions.fragment.formshow')
        {!! Form::close() !!}
    </div>

 </div>
@endsection
