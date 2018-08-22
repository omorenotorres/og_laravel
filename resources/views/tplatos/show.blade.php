@extends('layouts.app')

@section('content')	

 <div class="container">
    <div class="row">
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
        @include('tplatos.fragment.aside')
      </div>
    </div>
   
    <div class=col-lg-12>
      <h2>
        TIPO DE PLATO
        <a href="{{ route('tplatos.index') }}" class="btn btn-primary float-right">Listado</a>
      </h2>
      <br>
        {!! Form::model($tplato, ['route' => ['tplatos.update', $tplato->id, 'method' => 'GET' ]]) !!}
               @include('tplatos.fragment.formshow')
        {!! Form::close() !!}
    </div>

 </div>
@endsection
