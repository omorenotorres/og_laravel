@extends('layouts.app')

@section('content')	

 <div class="container">
    @include('contactos.fragment.error')
    @include('contactos.fragment.info')
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
       
        @include('contactos.fragment.aside')
      </div>
    </div>
   
    <div class=col-lg-12>
      <h2>
        Editar TIPO DE CONTACTO
        <a href="{{ route('contactos.index') }}" class="btn btn-primary float-right">Listado</a>
      </h2>
      <br>
        {!! Form::model($contacto, ['route' => ['contactos.update', $contacto->id], 'method' => 'PUT', 'files' => true]) !!}
               @include('contactos.fragment.formedit')
        {!! Form::close() !!}
    </div>

 </div>
@endsection
