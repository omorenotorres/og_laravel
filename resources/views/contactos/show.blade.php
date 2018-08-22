@extends('layouts.app')

@section('content')	

 <div class="container">
    <div class="row">
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
        @include('contactos.fragment.aside')
      </div>
    </div>
   
    <div class=col-lg-12>
      <h2>
        TIPO DE CONTACTO
        <a href="{{ route('contactos.index') }}" class="btn btn-primary float-right">Listado</a>
      </h2>
      <br>
        {!! Form::model($contacto, ['route' => ['contactos.update', $contacto->id, 'method' => 'GET' ]]) !!}
               @include('contactos.fragment.formshow')
        {!! Form::close() !!}
    </div>

 </div>
@endsection
