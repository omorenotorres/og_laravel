@extends('layouts.app')

@section('content')	

 <div class="container">
    @include('tplatos.fragment.error')
    @include('tplatos.fragment.info')
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
       
        @include('tplatos.fragment.aside')
      </div>
    </div>
   
    <div class=col-lg-12>
      <h2>
        Editar TIPO DE PLATO
        <a href="{{ route('tplatos.index') }}" class="btn btn-primary float-right">Listado</a>
      </h2>
      <br>
        {!! Form::model($tplato, ['route' => ['tplatos.update', $tplato->id], 'method' => 'PUT', 'files' => true]) !!}
               @include('tplatos.fragment.formedit')
        {!! Form::close() !!}
    </div>

 </div>
@endsection
